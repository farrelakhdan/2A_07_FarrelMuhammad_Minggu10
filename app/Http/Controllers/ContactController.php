<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index(){
        $kode = Session::get('ssKode');
        $list_data = DB::select('SELECT * FROM user_contact WHERE kode=?', [$kode[0]->kode]);
        return view('Contact', compact('list_data'));
    }
}