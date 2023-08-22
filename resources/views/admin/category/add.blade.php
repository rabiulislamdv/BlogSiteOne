@extends('master.admin.master')

@section('body')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4"> Add Category Form</h4>
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <form action="{{route('category.new')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-4">
                            <level for="horizontal-firstname-input" class="col-sm-3 col-form-label">Category Name</level>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" id="horizontal-firstname-input">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <level for="horizontal-email-input" class="col-sm-3 col-form-label">Category Description</level>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="description" id="horizontal-email-input"></textarea>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <level for="horizontal-password-input" class="col-sm-3 col-form-label">Category Image</level>
                            <div class="col-sm-9">
                                <input type="file" class="form-control-file" name="image" id="horizontal-password-input">
                            </div>
                        </div>

                        <div class="form-group justify-content-end">
                          <div class="col-sm-9">
                              <div>
                                  <button type="submit" class="btn btn-primary w-md"> Create New Category </button>
                              </div>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
