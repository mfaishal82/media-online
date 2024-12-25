<?php

namespace App\Http\Controllers;
use App\Models\CategoriesModel;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function getCategory()
    {
        $data = DB::table('category')->get();

        return view('admin.category', ['data' => $data]);
    }

    public function createCategory(Request $request)
    {
        DB::table('category')->insert([
            'name' => $request->name
        ]);

        return redirect('/admin/category');
    }

    public function deleteCategory($id)
    {
        DB::table('category')->where('id', $id)->delete();

        return redirect('/admin/category');
    }
}
