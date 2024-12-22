<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data = DB::table('news')->get();
    
        return view('admin.dashboard', compact('data'));
    }
    
    public function getCategory()
    {
        $data = DB::table('category')->get();
    
        return view('admin.category', compact('data'));
    }
}
