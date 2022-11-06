<?php

namespace App\Http\Controllers;

use App\Models\Bar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Datatables;

class IndexController extends Controller
{
    public function show() 
    {
        $bar = DB::table('bars')->select('name', 'place_plz', 'price_category', 'address')->limit(1)->get();
        return view('index')->with('bar', $bar);

        $data = array();
        while($row = $bar) {
            $data[] = $row;
        }

        echo json_encode($data);
    }

    // public function getData()
    // {
    //     $bars = Bar::all();
    //     return Datatables::of($bars);

    // }
}
