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
    // POST /timeline
    public function getIndex(Request $request)
    {
        if(Auth::check()){
            $id = Auth::user()->id;
            // need_to_be_improved
            /*$Timelines = DB::table('Timelines')
                            ->join('Supports', 'Timelines.content_id', '=', 'Supports.content_id')
                            ->join('Contents', 'Timelines.content_id', '=', 'Contents.id')
                            ->select('Timelines.*', 'Contents.*')
                            ->where('Supports.user_id', $id)
                            ->get();*/
            $Timelines = DB::select('select Timelines.*, Contents.name as content_name, Contents.picture1 as content_icon from (Timelines inner join Contents on Timelines.content_id = Contents.id) inner join Supports on (Timelines.content_id = Supports.content_id) where Supports.user_id = ?', [$id]);
            return view('timeline', ["Timelines" => $Timelines]);
        }
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
