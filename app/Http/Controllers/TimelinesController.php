<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;

class TimelinesController extends Controller
{
    public function getIndex(Request $request)
    {
				if(Auth::check()){
					$id = Auth::user()->id;
        	return view('timeline', ["id" => $id]);
				}
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
