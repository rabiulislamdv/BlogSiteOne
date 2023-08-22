<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blog;
    private  $blogs;

   public function index()
   {
       return view('admin.blog.add');
   }
   public function create(Request $request)
   {
       return $request->all();
   }

   public function manage()
   {
       return view('admin.blog.manage');
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
