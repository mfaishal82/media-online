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

        return view('admin.dashboard', ['data' => $data]);
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
            'email' => 'Email atau password salah.',
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
