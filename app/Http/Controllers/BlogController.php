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
    private $message;

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
       return redirect()->back()->with('message', 'Blog info created Successfully.');
   }

   public function manage()
   {
//       $blogs =new Blog();
       $this->blogs = Blog::orderBy('id', 'desc')->get();
       return view('admin.blog.manage',['blogs'=>$this->blogs ]);
   }

   public function detail($id)
   {
       $this->blog = Blog::find($id);
       return view('admin.blog.detail', ['blog'=> $this->blog]);
   }

   public function updateStatus($id)
   {
       $this->blog = Blog::find($id);
       if($this->blog->status == 1)
       {
           $this->blog->status = 0;
           $this->message = 'Blog Status info Unpublished successfully.';
        }
       else
       {
           $this->blog->status = 1;
           $this->message = 'Blog Status info Published successfully.';
       }
       $this->blog->save();
       return redirect('/manage-blog')->with('message', $this->message);
   }

   public function edit($id)
   {
       $this->blog = Blog::find($id);
        $this->categories= Category::all();
       return view('admin.blog.edit',['blog'=>$this->blog, 'categories'=>$this->categories]);
   }


   public function update( Request $request,$id)
   {
      Blog::updateBlog($request,$id);
      return redirect('/manage-blog')->with('message', 'Blog info Updated Successfully');
   }

   public function delete($id)
   {
       return $id;
   }
}
