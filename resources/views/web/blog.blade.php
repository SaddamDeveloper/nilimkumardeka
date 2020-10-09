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
<section id="blog">
        <div class="empty-space col-md-b100 col-xs-b70"></div>
        <div class="tm-section-heading text-center">
            <h2>LATEST BLOGS</h2>
            <div class="tm-section-seperator"><span></span></div>
            <div class="empty-space col-md-b60 col-xs-b40"></div>
        </div>
        <div class="container">
            <div class="row">
                @if (isset($blogs) && !empty($blogs))
                    @foreach ($blogs as $blog)
                        <div class="col-md-4">
                            <div class="tm-post tm-style1 tm-type1">
                                <div class="tm-post-thumb">
                                    <a href="{{route('web.viewPost',['slug'=>urlencode($blog->slug),'id'=>$blog->id])}}" class="tm-link-block"> <img class="lazy" data-src="{{asset('admin/post/thumb/'.$blog->image)}}"  alt="blog1">
                                        <div class="tm-blog-hover"> <span class="tm-blog-shap"></span> <i class="fa fa-link"></i> </div>
                                    </a>
                                </div>
                                <div class="empty-space col-xs-b25"></div>
                                <div class="tm-blog-body">
                                    <h2 class="tm-blog-heading"> <a href="{{route('web.viewPost',['slug'=>urlencode($blog->slug),'id'=>$blog->id])}}" class="tm-link-block">{{ $blog->title }}</a> </h2>
                                    <div class="empty-space col-xs-b15"></div>
                                    <div class="tm-blog-meta"><span><i class="fa fa-calendar"></i>{{ date_format($blog->created_at, 'F d, Y') }}</span> <span>Share  <a href="" class="blog-share-whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> <a href="" class="blog-share-fb"><i class="fa fa-facebook" aria-hidden="true"></i></a></span></div>
                                    <div class="empty-space col-xs-b20"></div>
                                    <div class="tm-blog-separator"></div>
                                    <div class="tm-entry-content">
                                        <p>{!! Str::words($blog->body, 20, ' ...') !!}</p>
                                        <div class="empty-space col-xs-b20"></div><a href="{{route('web.viewPost',['slug'=>urlencode($blog->slug),'id'=>$blog->id])}}" class="tm-btn1">READ MORE</a> </div>
                                </div>
                            </div>
                            <div class="empty-space col-xs-b30"></div>
                        </div>
                    @endforeach
                @endif
                {{ $blogs->links() }}
            </div>
        </div>
        <div class="empty-space col-md-b0 col-xs-b40"></div>
    </section>
    @endsection

    @section('script')
    
    @endsection