<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news;

class FrontendController extends Controller
{
    //
    public function home(){
        $News=news::all();
        return view('frontend.home', compact('News'));
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function news(){
        $News=news::all();
        return view('frontend.news',compact('News'));
    }

    public function about(){
        return view('frontend.about');
    }
}
