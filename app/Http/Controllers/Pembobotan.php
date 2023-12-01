<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pembobotan extends Controller
{
    public function index()
    {
        $data['title'] = "Pembobotan";
        return view('pembobotan.pembobotan_view', $data);
    }
}
