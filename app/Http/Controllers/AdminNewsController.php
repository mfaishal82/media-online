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
        $data = DB::table('news')
        ->get();
        $categories = DB::table('category')->get();
        // return $data;
        // return $category;
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
            ->first();
        $categories = CategoriesModel::get();
        // return $data;
        return view('admin.edit-news', ['data' => $data, 'categories' => $categories]);
    }

    public function updateNews(Request $request)
    {
        $image_name = time() . '.' . $request->img->extension();
        $request->img->move(public_path('images'), $image_name);


        $data = NewsModel::find($request->id);
        $data->title = $request->title;
        $data->content = $request->content;
        $data->category_id = $request->name;
        $data->img = $image_name;
        $data->save();

        return redirect('/admin');
    }

    public function deleteNews($id)
    {
        $news = NewsModel::find($id);
        $image_path = public_path('images') . '/' . $news->img;

        if (file_exists($image_path)) {
            unlink($image_path);
        }

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

    public function login()
    {
        if (Auth::check()) {
            return redirect('/admin');
        }

        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'email' => 'Email or password is wrong!.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
