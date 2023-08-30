<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Auth;

class BlogController extends Controller
{
    private $blog;
    private  $blogs;
    private $categories;
   public function index()
   {
//       return Auth::user()->name;
       $this->categories = Category::all();
       return view('admin.blog.add',['categories'=> $this->categories]);
   }
   public function create(Request $request)
   {
//       return $request->all();

       Blog::newBlog($request);
       return redirect()->back()->with('massege', 'Blog info created Successfully.');
   }

   public function manage()
   {
       $this->blogs = Blog::orderBy('id', 'desc')->get();
       return view('admin.blog.manage',['blogs'=>$this->blogs ]);
   }

   public function edit($id)
   {
       return view('admin.blog.edit');
   }
   public function update( Request $request,$id)
   {
       return $request->all();
   }
   public function delete($id)
   {
       return $id;
   }
}
