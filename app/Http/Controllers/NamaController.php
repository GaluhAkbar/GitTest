<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NamaController extends Controller
{
    public function getnama(Request $request){
        $getnama = $request['namaorang'];
            dd($getnama);
    }
}
