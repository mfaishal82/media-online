<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNewsRequest;
use App\Models\CategoriesModel;
use App\Models\NewsModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AdminNewsController extends Controller
{
    public function index()
    {
        $data  = DB::table('news')
        ->orderBy('created_at', 'asc')
        ->get();
        $categories = DB::table('category')->get();
        // return $data;
        // return $popularPost;
        return view('admin.dashboard', ['data' => $data, 'categories' => $categories]);
    }

    public function createNews(Request $request)
    {
        // return $request->category;
        $image_name = time() . '.' . $request->img->extension();
        $request->img->move(public_path('images'), $image_name);

        $data = new NewsModel();
        $data->title = $request->title;
        $data->content = $request->content;
        $data->category_id = $request->category;
        $data->img = $image_name;
        $data->save();

        // CreateNewsRequest::create($request->validate());

        return redirect('/admin');
    }

    public function editNews($id)
    {
        // return $id;
        $data = NewsModel::where('news.id', $id)
            ->join('category', 'news.category_id', '=', 'category.id')
            ->select('news.id as news_id', 'news.title', 'news.content', 'news.img', 'category.id as category_id')
            ->first();
        $categories = CategoriesModel::get();
        // return $data;
        // return $categories;
        return view('admin.edit-news', ['data' => $data, 'categories' => $categories]);
    }

    public function updateNews(Request $request, $id)
    {
        // return $id;
        // return $request;
        $image_name = time() . '.' . $request->img->extension();
        $request->img->move(public_path('images'), $image_name);

        $data = NewsModel::where('id', $id)->first();
        $data->title = $request->title;
        $data->content = $request->content;
        $data->category_id = $request->category;
        $data->img = $image_name;
        $data->save();

        return redirect('/admin');
    }

    public function deleteNews($id)
    {
        DB::table('news')->where('id', $id)->delete();

        return redirect('/admin');
    }

    public function setPopular($status, $id)
    {
        DB::table('news')
            ->where('id', $id)
            ->update(['isPopular' => $status]);

        return redirect('/admin');
    }


}
