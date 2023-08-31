@extends('master.front.master')

@section('body')
  <div class="container">
      <div class="single-post">
          <div class="post-header mb-5 text-center">
              <div class="meta-cat">
                  <a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1" href="#">Health ,</a>
                  <a class="post-category font-extra text-color text-uppercase font-sm letter-spacing-1"  href="#">lifestyle</a>
              </div>
              <h2 class="post-title mt-2">
                  First Look At Self-Portrait's Autumn Collection
              </h2>

              <div class="post-meta">
                  <span class="text-uppercase font-sm letter-spacing-1 mr-3">by Liam</span>
                  <span class="text-uppercase font-sm letter-spacing-1">January 17,2019</span>
              </div>
              <div class="post-featured-image mt-5">
                  <img src="{{asset($blog->image)}}" class="img-fluid w-100" alt="featured-image">
              </div>
          </div>
          <div class="post-body">
              <div class="entry-content">

                  <h2 class="mt-4 mb-3">{{$blog->main_title}}</h2>

                  <blockquote>
                      <i class="ti-quote-left mr-2"></i>A wise girls knows her limit to touch the sky.Repellat sapiente
                      neque iusto praesentium adipisci.The question gave me an idea, so I answered quickly before
                      Perry could say anything.<i class="ti-quote-right ml-2"></i>
                  </blockquote>


                  <h3 class="mt-5 mb-3">Enjoying the view of summer</h3>

                  <p>{{$blog->short_description}}</p>
              </div>

              <div class="post-tags py-4">
                  <p>{{!! $blog->short_description}} !!</p>
              </div>


              <div class="tags-share-box center-box d-flex text-center justify-content-between border-top border-bottom py-3">

                  <span class="single-comment-o"><i class="fa fa-comment-o"></i>0 comment</span>

                  <div class="post-share">
                      <span class="count-number-like">2</span>
                      <a class="penci-post-like single-like-button"><i class="ti-heart"></i></a>
                  </div>

                  <div class="list-posts-share">
                      <a target="_blank" rel="nofollow" href="#"><i class="ti-facebook"></i></a>
                      <a target="_blank" rel="nofollow" href="#"><i class="ti-twitter"></i></a>
                      <a target="_blank" rel="nofollow" href="#"><i class="ti-pinterest"></i></a>
                      <a target="_blank" rel="nofollow" href="#"><i class="ti-linkedin"></i></a>
                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection
