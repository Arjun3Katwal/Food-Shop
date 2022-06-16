<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function home(){
        return view('adminDashboard.dashboard');
    }

    public function viewNews(){
        return view('adminDashboard.News.viewNews');
    }

    public function News(){
        return view('adminDashboard.News.News');
    }

    public function editNews(){
        return view('adminDashboard.News.editNews');
    }

    public function viewContact(){
        return view('adminDashboard.Contact.viewContact');
    }
}

