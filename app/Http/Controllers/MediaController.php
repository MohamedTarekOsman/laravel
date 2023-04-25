<?php

namespace App\Http\Controllers;
use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $media=Media::paginate(6);
        return view('media.index')->with('media',$media);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('media.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file=$request->file('file');
        $photoName=$file->getClientOriginalName();
        $updatedPhotoName = time() . '_' .$photoName;
        $file->move('photos',$updatedPhotoName);
        $media=new Media;
        $media->name=$updatedPhotoName;
        $media->user_id = auth()->user()->id;
        $media->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $media=Media::findOrFail($id);
        return view('media.show')->with('media',$media);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $media=Media::findOrFail($id);
        unlink('./photos/' . $media->name);
        $media->delete();
        return redirect('/media')->with('delete','Media Deleted');
    }
}
