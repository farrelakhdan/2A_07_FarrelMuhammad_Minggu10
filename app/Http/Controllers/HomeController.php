<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $kode = Session::get('ssKode');
        $list_data = DB::select('SELECT username FROM user WHERE kode=?', [$kode[0]->kode]);
        $teks = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio, pariatur recusandae magnam impedit inventore veritatis minus dolor exercitationem necessitatibus commodi repellendus. Maxime, quis consequatur nobis vero saepe veritatis voluptate praesentium.";
        return view('Home', compact('list_data'));
    }
}