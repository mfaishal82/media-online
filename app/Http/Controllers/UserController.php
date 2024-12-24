<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $data  = DB::table('news')->join('category', 'news.category_id', '=', 'category.id')->get();

        return view('frontend.home', ['data' => $data]);
    }

    public function getDetailById($id)
    {
        $data = DB::table('news')->where('id', $id)->first();

        return view('frontend.detail', ['data' => $data]);
    }

    // public function getCategory()
    // {
    //     $data = DB::table('category')->get();

    //     return view('sections.category', ['data' => $data]);
    // }

    public function getCategoryById($id)
    {
        $data = DB::table('news')->where('category_id', $id)->get();

        return (['data' => $data]);
    }

}
