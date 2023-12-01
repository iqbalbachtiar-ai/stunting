<?php

namespace App\Http\Controllers;

use App\Models\KriteriaModel;
use Illuminate\Http\Request;

class Kriteria extends Controller
{
    public function index()
    {
        $data['title'] = "Kriteria";
        $data['kriteria'] = KriteriaModel::all();
        $data['no'] = 1;
        return view('kriteria.kriteria_view', $data);
    }
}
