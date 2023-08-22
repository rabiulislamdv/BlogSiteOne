<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.add');

    }

    public function create(Request $request)
    {
//        return $request->all();
        Category::newCategory($request);
        return redirect()->back()->with('message', 'Category info crate successfully.');

    }

    public function manage()
    {
        return view('admin.category.manage');
    }

}
