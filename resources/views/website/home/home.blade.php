@extends('master.front.master')

@section('body')
    <section class="slider mt-4">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-12 col-sm-12 col-md-12 slider-wrap">
                    <div class="slider-item">
                        <div class="slider-item-content">
                            <div class="post-thumb mb-4">
                                <a href="blog-single.html">
                                    <img src="{{asset('/')}}website/images/slider/slider1.jpg" alt="" class="img-fluid">
                                </a>
                            </div>

                            <div class="slider-post-content">
                                <span class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Lifestyle</span>
                                <h3 class="post-title mt-1"><a href="blog-single.html">Tips for Taking a Long-term Trip</a></h3>
                                <span class=" text-muted  text-capitalize">January 2, 2019</span>
                            </div>
                        </div>
                    </div>

                    <div class="slider-item">
                        <div class="slider-item-content">
                            <div class="post-thumb mb-4">
                                <a href="blog-single.html">
                                    <img src="{{asset('/')}}website/images/slider/slider2.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="slider-post-content">
                                <span class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Travel</span>
                                <h3 class="post-title mt-1"><a href="blog-single.html">Trip to California</a></h3>
                                <span class=" text-muted  text-capitalize">September 15, 2019</span>
                            </div>
                        </div>
                    </div>

                    <div class="slider-item">
                        <div class="slider-item-content">
                            <div class="post-thumb mb-4">
                                <a href="blog-single.html">
                                    <img src="{{asset('/')}}website/images/slider/slider3.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="slider-post-content">
                                <span class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">weekends</span>
                                <h3 class="post-title mt-1"><a href="blog-single.html">Our Favorite Weekend Getaways</a></h3>
                                <span class=" text-muted  text-capitalize">June 12, 2019</span>
                            </div>
                        </div>
                    </div>

                    <div class="slider-item">
                        <div class="slider-item-content">
                            <div class="post-thumb mb-4">
                                <a href="blog-single.html">
                                    <img src="{{asset('/')}}website/images/slider/slider2.jpg" alt="" class="img-fluid">
                                </a>
                            </div>

                            <div class="slider-post-content">
                                <span class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Travel</span>
                                <h3 class="post-title mt-1"><a href="blog-single.html">Trip to California</a></h3>
                                <span class=" text-muted  text-capitalize">September 15, 2019</span>
                            </div>
                        </div>
                    </div>

                    <div class="slider-item">
                        <div class="slider-item-content">
                            <div class="post-thumb mb-4">
                                <a href="blog-single.html">
                                    <img src="{{asset('/')}}website/images/slider/slider3.jpg" alt="" class="img-fluid">
                                </a>
                            </div>

                            <div class="slider-post-content">
                                <span class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Travel</span>
                                <h3 class="post-title mt-1"><a href="blog-single.html">Trip to California</a></h3>
                                <span class=" text-muted  text-capitalize">September 15, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4 class="section-sm  text-danger text-center">Recent Blog</h4>
                    <h2 class="section-sm  text-danger text-center">Latest Recent Blog</h2>
                    <div class="row">
                        @foreach($recent_blogs as $recent_blog)
                        <div class="col-lg-4 col-md-6 mb-4">
                              <div class="card text-center">
                                  <h4 class="card-title pt-3">{{$recent_blog->main_title}}</h4>
                                  <a class="post-thumb mb-4 d-block" href="{{route('blog-detail',['id'=> $recent_blog->id])}}">
                                      <img src="{{asset($recent_blog->image)}}" alt="" class="img-fluid w-100" width="500" height="400">
                                  </a>
                                  <span class="cat-name text-color font-extra text-sm text-uppercase letter-spacing-1"></span>
                                  <p class="post-title mt-1"><a href="">{{$recent_blog->short_description}}</a></p>
                                  <a href="{{route('blog-detail',['id'=> $recent_blog->id])}}" class="btn btn-secondary translate-y-25">Read More</a>

                              </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="m-auto">
                    <div class="pagination mt-5 pt-4">
                        <ul class="list-inline ">
                            <li class="list-inline-item"><a href="#" class="active">1</a></li>
                            <li class="list-inline-item"><a href="#">2</a></li>
                            <li class="list-inline-item"><a href="#">3</a></li>
                            <li class="list-inline-item"><a href="#" class="prev-posts"><i class="ti-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
