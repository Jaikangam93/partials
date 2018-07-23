<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getAbout(){
    	return view('pages.about');
    }
    public function getServices(){
    	return view('pages.services');
    }
    public function getContact(){
    	return view('pages.contact');
    }
}
