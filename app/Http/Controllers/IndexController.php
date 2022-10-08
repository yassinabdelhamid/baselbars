<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function show() 
    {
        $bar = DB::table('bars')->select('name')->get();
        return view('index')->with('bar', $bar);
    }
}
