<?php

namespace App\Http\Controllers;

use App\Models\NewsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index()
    {
        $data  = DB::table('news')
        ->join('category', 'news.category_id', 'category.id')
        ->select('news.id as news_id', 'news.title', 'news.content', 'news.img', 'news.isPopular', 'news.created_at', 'categoryName')
        ->orderBy('created_at', 'desc')
        ->get();

        // return $data;
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
        $data = DB::table('news')->where('news.id', $id)
        ->join('category', 'news.category_id', 'category.id')
        ->select('news.id as news_id', 'news.title', 'news.content', 'news.img', 'news.isPopular', 'news.created_at', 'categoryName')
        ->first();
        // return $data;
        return view('frontend.detail', ['data' => $data]);
    }

    public function getTableIndex()
    {
        $data = DB::table('news')
        ->join('category', 'news.category_id', '=', 'category.id')
        ->select('news.id as news_id', 'news.title', 'news.created_at', 'news.img', 'news.content', 'categoryName')
        ->orderBy('news_id', 'asc')
        ->get();
        // return $data;
        return view('frontend.indeks', ['data' => $data]);
    }

    public function getCategoryById($id)
    {
        $data = DB::table('news')->where('category_id', $id)
        ->select('news.id as news_id', 'news.title', 'news.content', 'news.img', 'news.created_at')
        ->get();
        // return $data;
        return view('frontend.category', ['data' => $data]);
    }

    public function search(Request $request)
    {
        // return $request;
        $data = NewsModel::
        join('category', 'news.category_id', 'category.id')
        ->where('title', 'like', '%'.$request->keyword.'%')
        ->select('news.id as news_id', 'news.title', 'news.content', 'news.img', 'news.isPopular', 'news.created_at', 'categoryName')
        ->get();
        // return $data;
        return view('frontend.home', ['data' => $data]);
    }

    public function searchIndex(Request $request)
    {
        // return $request;
        $data = NewsModel::
        join('category', 'news.category_id', 'category.id')
        ->where('title', 'like', '%'.$request->keywordIndex.'%')
        ->select('news.id as news_id', 'news.title', 'news.content', 'news.img', 'news.isPopular', 'news.created_at', 'categoryName')
        ->get();
        // return $data;
        return view('frontend.indeks', ['data' => $data]);
    }
}
