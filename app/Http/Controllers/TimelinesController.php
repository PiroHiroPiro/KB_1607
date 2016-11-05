<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TimelinesController extends Controller
{
    public function getIndex()
    {
        return view('timeline');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
