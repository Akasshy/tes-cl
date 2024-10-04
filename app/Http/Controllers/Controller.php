<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function admin(){
        return view('admin/beranda');
    }
}
