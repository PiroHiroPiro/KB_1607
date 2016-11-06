<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Contents;
use App\Supports;
use Auth;
use DB;

class ContentsController extends Controller
{
		// GET /
		public function getTop()
		{
				if(Auth::check()){
						$user_id = Auth::user()->id;
						$Contents = DB::select('SELECT Contents.*, (CASE WHEN Supports.user_id = ? THEN TRUE ELSE FALSE END) AS supported FROM Contents LEFT OUTER JOIN Supports ON Contents.id = Supports.content_id AND Supports.user_id = ? ORDER BY Contents.id ASC', [$user_id, $user_id]);
				}else{
						$Contents = Contents::all();
				}
				return view('top', ["Contents" => $Contents]);
		}

    // GET /contents/view/{id}
		public function getView($id)
		{
				$Content = Contents::find($id);
				return view('content', ["Content" => $Content]);
		}
		
		// POST /content/support
		public function postSupport(Request $request)
		{
				if(Auth::check()){
						$support = new Supports;
						$support->user_id = Auth::user()->id;
						$support->content_id = $request->content_id;
						$support->money = $request->money;
						$support->save();
						return redirect('/');
				}else{
						return redirect('/auth/login');
				}
		}
}
