<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
    	$first_name = "Sho";
    	$last_name = "Sawa";
    	return view("pages.about", compact("first_name", "last_name"));
    }
}
