<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $category;
    private $categories;

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
        $categories = new Category();
        $this->$categories= Category::orderBy('id', 'desc')->get();

        return view('admin.category.manage' , ['categories' => $this->$categories]);
    }

}
