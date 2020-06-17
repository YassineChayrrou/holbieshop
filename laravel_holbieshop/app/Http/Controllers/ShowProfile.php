<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowProfile extends Controller
{
    public function show () {
        $test = 'hello';
        return view('product')->with("s", $test);
    }
    
}
