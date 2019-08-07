<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome To RM-CONSTRUCTIONS";
        return view('pages.index', compact('title'));
    }

    public function who(){
        $data = array(
            'About' => 'We Specialize in all kinds of Building Constructions',
            'Services' => ['Bridge Constructions', 'Road Constructions', 'Building Constructions'],
        );
        return view('pages.who')->with($data);
    }

    public function what(){
        return view('pages.what');
    }

    public function projects(){
        return view('pages.projects');
    }

     public function suppliers(){
         return view('pages.suppliers');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function careers(){
        return view('pages.careers');
    }
}
