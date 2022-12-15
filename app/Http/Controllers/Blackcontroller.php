<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blackcoffer;

class Blackcontroller extends Controller
{
    public function show()
    {   
       
        $coffer = Blackcoffer::all();
        
        return view('welcome')->with(compact('coffer'));
    }

    public function graph()
    {   
    
        $graphcoffer = Blackcoffer::all();
        return view('data-view')->with(compact( 'graphcoffer'));
    }
}
