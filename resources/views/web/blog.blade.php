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
                <div class="col-md-4">
                    <div class="tm-post tm-style1 tm-type1">
                        <div class="tm-post-thumb">
                            <a href="{{route('web.blog')}}" class="tm-link-block"> <img class="lazy" data-src="{{asset('web/assets/img/services.png')}}"  alt="blog1">
                                <div class="tm-blog-hover"> <span class="tm-blog-shap"></span> <i class="fa fa-link"></i> </div>
                            </a>
                        </div>
                        <div class="empty-space col-xs-b25"></div>
                        <div class="tm-blog-body">
                            <h2 class="tm-blog-heading"> <a href="{{route('web.blog-details')}}" class="tm-link-block">SHOULD I UNDERGO A TOTAL JOINT REPLACEMENT FOR ARTHRITIS?</a> </h2>
                            <div class="empty-space col-xs-b15"></div>
                            <div class="tm-blog-meta"><span><i class="fa fa-calendar"></i>Jan 23, 2018</span> <span>Share  <a href="" class="blog-share-whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> <a href="" class="blog-share-fb"><i class="fa fa-facebook" aria-hidden="true"></i></a></span></div>
                            <div class="empty-space col-xs-b20"></div>
                            <div class="tm-blog-separator"></div>
                            <div class="tm-entry-content">
                                <p>Osteoarthritis can be debilitating. When joints are severely affected by arthritis, one potential treatment option to explore is replacing...</p>
                                <div class="empty-space col-xs-b20"></div><a href="{{route('web.blog-details')}}" class="tm-btn1">READ MORE</a> </div>
                        </div>
                    </div>
                    <div class="empty-space col-xs-b30"></div>
                </div>
                <div class="col-md-4">
                    <div class="tm-post tm-style1 tm-type1">
                        <div class="tm-post-thumb">
                            <a href="blog2.html" class="tm-link-block"> <img class="lazy" data-src="{{asset('web/assets/img/video-bg.jpg')}}" alt="blog-01">
                                <div class="tm-blog-hover"> <span class="tm-blog-shap"></span> <i class="fa fa-link"></i> </div>
                            </a>
                        </div>
                        <div class="empty-space col-xs-b25"></div>
                        <div class="tm-blog-body">
                            <h2 class="tm-blog-heading"> <a href="blog2.html" class="tm-link-block">Why Would I Need to See an Orthopaedic Doctor?</a> </h2>
                            <div class="empty-space col-xs-b15"></div>
                            <div class="tm-blog-meta"><span><i class="fa fa-calendar"></i>Jan 23, 2018</span> <span>Share  <a href="" class="blog-share-whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> <a href="" class="blog-share-fb"><i class="fa fa-facebook" aria-hidden="true"></i></a></span></div>
                            <div class="empty-space col-xs-b20"></div>
                            <div class="tm-blog-separator"></div>
                            <div class="tm-entry-content">
                                <p>Do you suffer from long-term tendon, muscle, or joint pain? Do you have chronic back problems? There are more than 28 million people who...</p>
                                <div class="empty-space col-xs-b20"></div><a href="blog2.html" class="tm-btn1">READ MORE</a> </div>
                        </div>
                    </div>
                    <div class="empty-space col-xs-b30"></div>
                </div>
                
                <div class="col-md-4">
                    <div class="tm-post tm-style1 tm-type1">
                        <div class="tm-post-thumb">
                            <a href="#" class="tm-link-block"> <img class="lazy" data-src="{{asset('web/assets/img/slide-02.jpg')}}" alt="blog-01">
                                <div class="tm-blog-hover"> <span class="tm-blog-shap"></span> <i class="fa fa-link"></i> </div>
                            </a>
                        </div>
                        <div class="empty-space col-xs-b25"></div>
                        <div class="tm-blog-body">
                            <h2 class="tm-blog-heading"> <a href="#" class="tm-link-block">Experiencing Chronic Neck Pain on Your Right Side? What Could it Be?</a> </h2>
                            <div class="empty-space col-xs-b15"></div>
                            <div class="tm-blog-meta"><span><i class="fa fa-calendar"></i>Jan 23, 2018</span> <span>Share  <a href="" class="blog-share-whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> <a href="" class="blog-share-fb"><i class="fa fa-facebook" aria-hidden="true"></i></a></span></div>
                            <div class="empty-space col-xs-b20"></div>
                            <div class="tm-blog-separator"></div>
                            <div class="tm-entry-content">
                                <p>Chronic neck pain is a common issue that millions of people just like you face every day. The spinal structure...</p>
                                <div class="empty-space col-xs-b20"></div><a href="blog3.html" class="tm-btn1">READ MORE</a> </div>
                        </div>
                    </div>
                    <div class="empty-space col-xs-b30"></div>
                </div>
                <div class="col-md-4">
                    <div class="tm-post tm-style1 tm-type1">
                        <div class="tm-post-thumb">
                            <a href="blog4.html" class="tm-link-block"> <img class="lazy" data-src="{{asset('web/assets/img/recall.jpg')}}" alt="blog-01">
                                <div class="tm-blog-hover"> <span class="tm-blog-shap"></span> <i class="fa fa-link"></i> </div>
                            </a>
                        </div>
                        <div class="empty-space col-xs-b25"></div>
                        <div class="tm-blog-body">
                            <h2 class="tm-blog-heading"> <a href="blog4.html" class="tm-link-block">Recall to life</a> </h2>
                            <div class="empty-space col-xs-b15"></div>
                            <div class="tm-blog-meta"><span><i class="fa fa-calendar"></i>Jan 23, 2018</span> <span>Share  <a href="" class="blog-share-whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> <a href="" class="blog-share-fb"><i class="fa fa-facebook" aria-hidden="true"></i></a></span></div>
                            <div class="empty-space col-xs-b20"></div>
                            <div class="tm-blog-separator"></div>
                            <div class="tm-entry-content">
                                <p>I can categorize my story with an analogy to Charles Dicken’s “A Tale of Two Cities.” The main theme...</p>
                                <div class="empty-space col-xs-b20"></div><a href="blog4.html" class="tm-btn1">READ MORE</a> </div>
                        </div>
                    </div>
                    <div class="empty-space col-xs-b30"></div>
                </div>
            </div>
        </div>
        <div class="empty-space col-md-b0 col-xs-b40"></div>
    </section>
    @endsection

    @section('script')
    
    @endsection