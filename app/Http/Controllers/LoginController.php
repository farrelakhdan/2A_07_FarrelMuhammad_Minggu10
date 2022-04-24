<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\LOGIN;

class LoginController extends Controller
{

    public function index(Request $request){
        $list_data = DB::select('SELECT kode FROM user WHERE username=? and password=?', [$request->username,$request->password]);
        $list_data1 = DB::select('SELECT ID FROM admin WHERE username=? and password=?', [$request->username,$request->password]);
        if ($list_data) {
            Session::put('ssKode',$list_data);
            return redirect()->route('about');
        }elseif ($list_data1) {
            return redirect()->route('admin');
        }
        else {
            Session::flash('error', 'NIDN/HP atau password salah');
            return redirect()->route('login');
        }
    }

    public function show(){
        return view('Login');
    }

}