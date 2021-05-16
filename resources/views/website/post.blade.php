@extends('layouts.website')
@section('css')
    <style>
        .content {
            text-align: justify;
        }
        .content img {
            width: 100%;
        }
    </style>
@endsection

@section('content')
<div class="body-content">

    <!-- single-page -->
    <section class="single-page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="content-wrapper">
                        <h1 class="title">{{$post->title}}</h1>
                        <figure class="main-img news-item-1">
                            <img src="{{url('uploads/678-386/' . $post->image)}}" class="img-fluid">
                            <div class="caption ">
                            @include('website.share', ['url' => url('p/'.$post->id)])
                            </div>
                        </figure>
                        {{-- <p class="date">نشر بتاريخ: 29/08/2020 ( آخر تحديث: 29/08/2020 الساعة: 20:24 )</p> --}}

                        <div class="content">
                            {!! $post->story !!}
                        </div>
                        <p>{{$post->created}}</p>
                        {{-- <div class="share-wrapper d-flex justify-content-end">
                            <div class="share">
                                <p>مشاركة الخبر عبر مواقع التواصل</p>
                                <div class="share-links">
                                    <a href="" class="instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                                    <a href="https://twitter.com/home?status={{url($post->id)}}" class="twitter"  onclick="javascript:window.open(this.href,'','menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{url($post->id)}}" class="facebook"  onclick="javascript:window.open(this.href,'','menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                        </div> --}}
                    
                    </div> 
                </div>
                <div class="col-lg-4">
{{-- 
                    <div class="fb-like" data-href="https://www.facebook.com/Dooz.News" data-width="350" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
						
						
						<iframe class="hide"  src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FDooz.News%2F&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId=737556729619390" width="100%" height="100" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
 --}}

    <div 
    style="height: 510px;"
    class="fb-page" 
    data-href="https://www.facebook.com/Dooz.News/?fref=ts" 
    data-tabs="timeline" 
    data-small-header="false" 
    data-adapt-container-width="true" 
    data-hide-cover="false" 
    data-show-facepile="true">
        <blockquote 
        cite="https://www.facebook.com/Dooz.News/?fref=ts" 
        class="fb-xfbml-parse-ignore">
            <a href="https://www.facebook.com/Dooz.News/?fref=ts">‎Dooz  دوز‎</a>
        </blockquote>
    </div>



                    <div class="where-go-widget wow fadeInUp sec-header" data-wow-duration="1.5s" data-wow-delay="0.6s" style="height: auto;">
                        <h2 style="border-bottom: 1px solid #eeb041;">وين أروح بنابلس؟   </h2>
                        <div class="form-group mb-0">
                            <div id="where-is-go-datepiker" class="cs-datepicker" ></div>
                            <input type="hidden" id="where-is-go-datepiker-input">
                        </div>
                    </div>

                    {{-- <aside class="sidebar">                                
                        <div class="where-go-widget wow fadeInUp mb-3" data-wow-duration="1.5s" data-wow-delay="0.6s">
                            <h6>أين تذهب في نابلس؟ </h6>
                            <div class="form-group mb-0">
                                <div id="where-is-go-datepiker" class="cs-datepicker" ></div>
                                <input type="hidden" id="where-is-go-datepiker-input">
                            </div>
                        </div>
                        <!--  -->
                        <div class="currency-widget wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0s">                      
                            <div class="row no-gutters align-items-center">
                                <div class="col">
                                    <header class="w-header">
                                        <img src="images/money.png" class="img-fluid">
                                        <h3>أسعار العملات</h3>
                                    </header>
                                </div>
                                <div class="col ">
                                    <div class="stat-item">
                                        <h6>دولار امريكي</h6>
                                        <p>3.641</p>
                                    </div>
                                </div>
                                <div class="col ">
                                    <div class="stat-item">
                                        <h6>دينار اردني</h6>
                                        <p>4.111</p>
                                    </div>
                                </div>
                                <div class="col ">
                                    <div class="stat-item">
                                        <h6>يورو</h6>
                                        <p>3.9</p>
                                    </div>
                                </div>
                            </div>                
                        </div>

                        <!--  -->
                        <div class="weather-widget wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0s">
                            <div class="d-flex align-items-center">
                    
                                <header class="w-header">
                                    <img src="images/sunny.png" class="img-fluid">
                                    <h3>30/17</h3>
                                </header>
                   
                                <div class="w-body">
                                    <p>يكون القطس حار ويطراء ارتفاع على درجات الحرارة .التي تتراوح  في نابلس نهارا30  و17 ليلاً</p>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="fb-widget wow fadeInUp mt-3" data-wow-duration="1.5s" data-wow-delay="0.5s">
                            <p class="title">تابعنا علي فيس بوك</p>
                            <div class="fb-page" data-href="https://www.facebook.com/Dooz.News/" data-tabs="timeline" data-width="600" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Dooz.News/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Dooz.News/">‎Dooz  دوز‎</a></blockquote></div>
                        </div>
                        <!--  -->
                        <div class="adv-420-sec wow fadeInUp mt-3" data-wow-duration="1.5s" data-wow-delay="0.5s">
                            <a href="">
                                <img src="images/adv-420.png" class="img-fluid">
                            </a>
                        </div>
                    </aside> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- single-page -->

    <!-- news-section-7 --> 
    <section class="news-section-7 container">
        <header class="sec-header wow fadeInUp" data-wow-duration="1.5s">
            <h2>مختارات </h2>
        </header>
        <div class="post-inner owl-carousel nav-top-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
            @foreach ($post->relatedposts as $post)
            <div class="item">
                <a href="{{url('p/'.$post->id)}}?{{$post->slug}}">
                    <article class="post-inner-item inner-item-4 style2">
                        <figure><img src="{{url('uploads/171-100/' . $post->image)}}" class="img-fluid"></figure>
                        <div class="caption">
                            <h3>{{$post->title}}</h3>
                        </div>
                    </article>
                </a>
            </div>
            @endforeach
        </div>
    </section>






    <section class="news-section-8 container">
        <header class="sec-header wow fadeInUp" data-wow-duration="1.5s">
            <h2>دوز يسأل  </h2>
        </header>
        <div class="post-inner owl-carousel nav-top-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
            @foreach ($asks as $post)
            <div class="item">
                <a href="{{url('p/'.$post->id)}}?{{$post->slug}}">
                    <article class="post-inner-item inner-item-4 style2">
                        <figure><img src="{{url('uploads/171-100/' . $post->image)}}" class="img-fluid"></figure>
                        <div class="caption">
                            <h3>{{$post->title}}</h3>

                        </div>
                    </article>
                </a>
            </div>
            @endforeach
        </div>
    </section>
    <!-- news-section-7 -->



        <!-- news-videos-section -->
        <section class="news-videos-section container">
            <header class="sec-header wow fadeInUp" data-wow-duration="1.5s">
                <h2>دوز فيديو</h2>
            </header>
            <div class="content-body wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                <div class="news-videos-slider owl-carousel">
                    @foreach ($videos as $video)
                    <div class="news-video-item">
                        <a target="_blank" href="{{$video->story}}" data-fancybox>
                            <figure>                                
                                <img src="{{$video->image}}" class="img-fluid ">
                            </figure>
                            <span class="play-video">
                                <i class="far fa-play-circle"></i>
                            </span>
                            <div class="caption">
                                <h3>{{$video->title}}</h3>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>        
        <!-- news-videos-section -->

        

    <!-- news-section-7 -->

    <section class="news-section-8 container">
        <header class="sec-header wow fadeInUp" data-wow-duration="1.5s">
            <h2>{{ $same_category_posts->first()->categories->first()->title}} </h2>
        </header>
        <div class="post-inner owl-carousel nav-top-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
            @foreach ($same_category_posts as $post)
            <div class="item">
                <a href="{{url('p/'.$post->id)}}?{{$post->slug}}">
                    <article class="post-inner-item inner-item-4 style2">
                        <figure><img src="{{url('uploads/171-100/' . $post->image)}}" class="img-fluid"></figure>
                        <div class="caption">
                            <h3>{{$post->title}}</h3>

                        </div>
                    </article>
                </a>
            </div>
            @endforeach
        </div>
    </section>
    <!-- news-section-7 -->



    <section class="news-section-8 container">
        <header class="sec-header wow fadeInUp" data-wow-duration="1.5s">
            <h2>أخبار أخرى  </h2>
        </header>
        <div class="post-inner owl-carousel nav-top-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
            @foreach ($randoms as $post)
            <div class="item">
                <a href="{{url('p/'.$post->id)}}?{{$post->slug}}">
                    <article class="post-inner-item inner-item-4 style2">
                        <figure><img src="{{url('uploads/171-100/' . $post->image)}}" class="img-fluid"></figure>
                        <div class="caption">
                            <h3>{{$post->title}}</h3>

                        </div>
                    </article>
                </a>
            </div>
            @endforeach
        </div>
    </section>
    <!-- news-section-7 -->




</div>
@endsection