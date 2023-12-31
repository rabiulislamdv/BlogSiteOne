@extends('master.admin.master')

@section('body')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4"> Add Blog Form</h4>
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <form action="{{route('blog.update',['id'=>$blog->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-4">
                            <level for="horizontal-firstname-input" class="col-sm-3 col-form-label">Category Name</level>
                            <div class="col-sm-9">
                                <select class="form-control" required name="category_id">
                                    <option value="" disabled selected>-- Select Category Name--</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{$blog->category_id == $category->id ? 'selected': ' '}}>{{$category->name}}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <level for="horizontal-firstname-input1" class="col-sm-3 col-form-label">Blog title</level>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$blog->main_title}}"  name="main_title" id="horizontal-firstname-input1">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <level for="horizontal-firstname-input2" class="col-sm-3 col-form-label">Blog Sub title</level>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$blog->sub_title}}" name="sub_title" id="horizontal-firstname-input2">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <level for="horizontal-email-input" class="col-sm-3 col-form-label">Short Description</level>
                            <div class="col-sm-9">
                                <textarea class="form-control" value="" name="short_description" id="horizontal-email-input">{{$blog->short_description}}</textarea>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <level for="horizontal-email-input" class="col-sm-3 col-form-label">Long Description</level>
                            <div class="col-sm-9">
                                <textarea class="form-control" value="" name="long_description" id="horizontal-email-input">{{$blog->long_description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <level for="horizontal-password-input4" class="col-sm-3 col-form-label">Image</level>
                            <div class="col-sm-9">
                                <input type="file" class="form-control-file"  name="image" id="horizontal-password-input4">
                                <img src="{{asset($blog->image)}}" alt="" height="100" width="150"/>
                            </div>
                        </div>

                        <div class="form-group justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md"> Update Blog Info </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
