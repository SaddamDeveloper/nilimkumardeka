@extends('web.template.blog_master')

@section('content')
<section class="tm-blog-hero">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <h1 class="tm-blog-hero-title">Our News & Blog</h1>
                 </div>
            </div>
         </div>
      </section>
      <div class="tm-blog-section tm-blog-right-sidebar">
         <div class="empty-space col-md-b100 col-xs-b70"></div>
         <div class="container">
            <div class="row">
               <main class="col-xl-12">
                  <div class="tm-site-main">
                     <article class="tm-post">
                        <header class="tm-entry-header">
                           <div class="tm-post-thumb">
                              <div class="col-lg-6">
                                 <div class="empty-space col-md-b20 col-xs-b20"></div>
                                 <div class="container" >
                                    <img src="{{asset('admin/post/'.$single_post->image)}}" alt="##" > 
                                    <div class="empty-space col-md-b20 col-xs-b20"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="tm-post-details-wrap">
                              <h2 class="tm-entry-title">{{ $single_post->title }}</h2>
                              <div class="tm-byline">  <span class="posted-on"><i class="fa fa-calendar"></i>{{ date_format($single_post->created_at, "F m, Y") }}</span>  <span>Share  <a href="" class="blog-share-whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> <a href="" class="blog-share-fb"><i class="fa fa-facebook" aria-hidden="true"></i></a></span></div>
                           </div>
                        </header>
                        <div class="tm-entry-content">
                           <p>{!! $single_post->body !!}</p>
                        </div>
                     </article>
                     <div class="empty-space col-md-b60 col-xs-b30"></div>
                  </div>
               </main>
            </div>
         </div>
         <div class="empty-space col-md-b100 col-xs-b70"></div>
      </div>
   @endsection

   @section('script')
   
   @endsection