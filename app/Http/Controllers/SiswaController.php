<?php

namespace App\Http\Controllers;

use App\Models\SiswaModel;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function index(){
        $data=array(
            'dt_siswa'=>SiswaModel::all()
        );
        return view('siswa.list', $data);
    }

    function insert(){
        return view ('siswa.form');
    }

}
