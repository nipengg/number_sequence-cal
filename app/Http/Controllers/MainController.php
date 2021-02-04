<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('aritmatika');
    }

    public function calculate(Request $request){
        $data = [];
        $a1   = $request->a1;
        $f    = $request->f;
        $n    = $request->n;

        $data['a1'] = $a1;
        $data['f'] = $f;
        $data['n'] = $n;

        $un = $a1 + $f * ($n - 1);

        $sn = $n/2 * ($a1 + $un);
        $data['un'] = $un;

        dd($sn);
    }
}