<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Beranda extends Controller
{
    public function index()
    {
        $data['title'] = "Beranda";
        return view('beranda.beranda_view', $data);
    }
}
