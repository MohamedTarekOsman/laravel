<?php

namespace App\Http\Controllers;



class PagesController extends Controller
{

    public function index()
    {
        $title="welcome home";
        return view('pages.index',compact('title'));
    }

    public function about()
    {
        $title = "welcome about";
        return view('pages.about')->with('title',$title);
    }

    public function features()
    {
        $data=array(
            'title'=>'features',
            'features'=>['Create post','Upload Media']
        );
        return view('pages.features')->with($data);
    }

}
