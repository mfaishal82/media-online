<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index()
    {
        $data  = DB::table('news')
        ->join('category', 'news.category_id', '=', 'category.id')
        ->select('news.id as news_id', 'news.title', 'news.content', 'news.img', 'news.created_at', 'categoryName')
        ->orderBy('created_at', 'desc')
        ->get();

        return view('frontend.home', ['data' => $data]);
    }

    public function aboutUs()
    {
        return view('frontend.about-us');
    }

    public function contactUs()
    {
        return view('frontend.contact-us');
    }

    public function getDetailById($id)
    {
        // return $id;
        $data = DB::table('news')->where('id', $id)->first();
        // return $data;
        return view('frontend.detail', ['data' => $data]);
    }

    public function getTableIndex()
    {
        $data = DB::table('news')
        ->join('category', 'news.category_id', '=', 'category.id')
        ->select('news.id as news_id', 'news.title', 'news.created_at', 'categoryName')
        ->orderBy('news_id', 'asc')
        ->get();
        // return $data;
        return view('frontend.indeks', ['data' => $data]);
    }

    // public function getAllCategory()
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
