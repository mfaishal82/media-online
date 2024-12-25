<?php

namespace App\Http\Controllers;

use App\Models\NewsModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data = DB::table('news')->get();
        $category = DB::table('category')->get();

        return view('admin.dashboard', ['data' => $data, 'category' => $category]);
    }

    public function createNews(Request $request)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'content' => 'required',
        //     'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        // return $request;
        $image_name = time().'.'.$request->img->extension();
        $request->img->move(public_path('images'), $image_name);

        $data = new NewsModel();
        $data->title = $request->title;
        $data->content = $request->content;
        $data->img = $image_name;
        $data->save();

        return redirect('/admin');
    }

    public function editNews(Request $id)
    {
        // return $id;

        $data = NewsModel::find($id)
        ->join('category', 'news.category_id', '=', 'category.id');
        $categories = DB::table('category')->get();

        return view('admin.edit-news', ['data' => $data, 'categories' => $categories]);
    }

    public function updateNews(Request $request)
    {
        $image_name = time().'.'.$request->img->extension();
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
        DB::table('news')->where('id', $id)->delete();

        return redirect('/admin');
    }

    public function getCategory()
    {
        $data = DB::table('category')->get();

        return view('admin.category', ['data' => $data]);
    }

    public function setPopular($status, $id)
    {
        DB::table('news')
        ->where('id', $id)
        ->update([ 'isPopular' => $status ]);

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
