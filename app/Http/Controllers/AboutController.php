<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\LOGIN;

class AboutController extends Controller
{

    public function show(){
        $kode = Session::get('ssKode');
        $list_data = DB::select('SELECT * FROM user_data WHERE kode=?', [$kode[0]->kode]);
        return view('Biodataku',compact('list_data'));
    }

}