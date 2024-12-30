<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.home.dashboard');
    }
    public function category()
    {
        return view('admin.category.index');
    }
    public function category_create(Request $request)
    {
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->save();
        return redirect()->back()->with('success', 'Category Created Successfully');
    }
}
