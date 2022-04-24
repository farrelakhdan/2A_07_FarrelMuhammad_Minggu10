<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\LOGIN;

class AdminController extends Controller
{

    public function index(){
        $list_data = DB::select('SELECT * FROM user');
        return view('admin.index', compact('list_data'));
    }

    public function logout(){
        return redirect()->route('login');
    }
}