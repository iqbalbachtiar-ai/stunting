<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Alternatif extends Controller
{
    public function index()
    {
        $data['title'] = 'Alternatif';
        return view('alternatif.alternatif_view', $data);
    }
}
