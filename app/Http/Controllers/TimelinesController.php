<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use DB;
use App\Timelines;
use App\Supports;

class TimelinesController extends Controller
{
    public function getIndex(Request $request)
    {
				if(Auth::check()){
					$id = Auth::user()->id;
					$Timelines = DB::table('Timelines')
                                ->join('Supports', 'Timelines.content_id', '=', 'Supports.content_id')
                                ->select('Timelines.*')
                                ->where('Supports.user_id', $id)
                                ->get();
        	return view('timeline', ["Timelines" => $Timelines]);
				}
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
