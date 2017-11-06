<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class PageController extends BaseController
{
	// to load the view from the controller than from the route
    public function home()
    {
    	return view('home');
    }
}
