<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

        $reiksme = $this->paskaiciuok(100);

        return view('/index', [
            'kintamsis' => $reiksme
        ]);
    }

    


    private function paskaiciuok($a){
        return $a * 2.5;
    }


}
