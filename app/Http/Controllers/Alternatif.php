<?php

namespace App\Http\Controllers;

use App\Models\AlternatifModel;
use Illuminate\Http\Request;

class Alternatif extends Controller
{
    public function index()
    {
        $data['title'] = 'Alternatif';
        $data['alternatif'] = AlternatifModel::all();
        $data['no'] = 1;
        return view('alternatif.alternatif_view', $data);
    }

    public function import()
    {
        $data['title'] = "Import Data";
        return view('alternatif.alternatif_import', $data);
    }
}
