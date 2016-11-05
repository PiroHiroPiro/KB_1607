<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContentsController extends Controller
{
    // GET /contents/view/{id}
		public function getView($id)
		{
				return view('content', ["id" => $id]);
		}
}
