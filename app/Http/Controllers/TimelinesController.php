<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;

use App\Timelines;

class TimelinesController extends Controller
{
    public function getIndex(Request $request)
    {
				if(Auth::check()){
					$id = Auth::user()->id;
					$Timelines = Timelines::all();
        	return view('timeline', ["Timelines" => $Timelines]);
				}
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
