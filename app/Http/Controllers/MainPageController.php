<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class MainPageController extends Controller
{

    public function view(Request $req)
    {
    	return View::make('pages.main');
    }
}
