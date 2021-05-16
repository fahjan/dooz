@extends('layouts.website')

@section('js')
<script>
    
</script>
@endsection
@section('content')

<div class="body-content">

    <!-- news-section-1 -->
    <section class="news-section-1 -mt-5">
        <div class="container-fluid">
            <div class="row cs-gutter-md">
                <div class="col-lg-2">
                    <div class="marquee-news wow fadeInUp" data-wow-duration="1.5s">
                        <div class="title">
                            <i class="fas fa-angle-double-left"></i>
                            <a href="{{url('/news')}}" class="white"><span>شريط الأخبار</span></a>
                        </div>
                        <div class="marquee-news-list"  data-direction='up' data-duration='5000' data-pauseOnHover="true">
                            @foreach ($marquees as $post)
                            <div  class="item">
                                
                                <a href="{{url('p/'.$post->id)}}?{{$post->slug}}">
                                    <p>{{$post->created}}</p>
                                    <h3>{{$post->title}}</h3>
                                </a>                                        
                            </div> 
                            @endforeach
                        </div>
                    </div>
                   
                </div>
                <div class="col-lg-6">
                    <div class="main-news-slider owl-carousel wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        @foreach($sliders as $post)
                        <div class="news-item-1 radius">
                            <a href="{{url('p/'.$post->id)}}?{{$post->slug}}" class="white">
                            <img src="{{url('uploads/678-386/' . $post->image)}}" class="radius">
                            <div class="caption radius">
                                <div class="title-wrapper d-flex align-items-center">
                                    <div class="title">
                                        <h3> {{$post->title}}</h3>
                                        {{-- <p class="date">{{$post->created}}</p> --}}
                                    </div>
                                    {{-- <a href="{{url('p/'.$post->id)}}" class="btn cs-primary-btn">التفاصيل</a> --}}
                                </div>
                                <div class="excerpt">
                                    {{$post->leading}}
                                </div>
                                {{-- <div class="share-sec">
                                    <button type="button" class="btn white">
                                        <svg id="share_1_" data-name="share (1)" xmlns="http://www.w3.org/2000/svg" width="14.267" height="15.564" viewBox="0 0 14.267 15.564">
                                            <path id="Path_5" data-name="Path 5" d="M311.764,4.864A2.432,2.432,0,1,1,314.2,2.432,2.435,2.435,0,0,1,311.764,4.864Zm0-3.891a1.459,1.459,0,1,0,1.459,1.459A1.461,1.461,0,0,0,311.764.973Zm0,0" transform="translate(-299.929)" fill="currentcolor"/>
                                            <path id="Path_6" data-name="Path 6" d="M311.764,356.864a2.432,2.432,0,1,1,2.432-2.432A2.435,2.435,0,0,1,311.764,356.864Zm0-3.891a1.459,1.459,0,1,0,1.459,1.459A1.461,1.461,0,0,0,311.764,352.973Zm0,0" transform="translate(-299.929 -341.3)" fill="currentcolor"/>
                                            <path id="Path_7" data-name="Path 7" d="M2.432,180.864a2.432,2.432,0,1,1,2.432-2.432A2.435,2.435,0,0,1,2.432,180.864Zm0-3.891a1.459,1.459,0,1,0,1.459,1.459A1.461,1.461,0,0,0,2.432,176.973Zm0,0" transform="translate(0 -170.65)" fill="currentcolor"/>
                                            <path id="Path_8" data-name="Path 8" d="M120.176,99.963a.486.486,0,0,1-.241-.909l6.017-3.431a.486.486,0,0,1,.481.845L120.416,99.9a.487.487,0,0,1-.24.064Zm0,0" transform="translate(-116.051 -92.654)" fill="currentcolor"/>
                                            <path id="Path_9" data-name="Path 9" d="M126.214,275.952a.482.482,0,0,1-.24-.064l-6.017-3.431a.486.486,0,0,1,.481-.845l6.017,3.431a.487.487,0,0,1-.241.909Zm0,0" transform="translate(-116.072 -263.294)" fill="currentcolor"/>
                                        </svg>
                                    </button>
                                    @include('website.share', ['url' => url('p/'.$post->id)])
                                </div> --}}
                            </div>
                        </a>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="news-2-container wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.5s">
                        
                        
                        <div class="row cs-gutter-md">


                            @foreach ($specials as $post)

                            <div class="col-lg-6 col-sm-4 col-6">
                                <article class="news-item-2  radius">
                                    <a href="{{url('p/'.$post->id)}}?{{$post->slug}}">
                                        <figure>                                            
                                            <img src="{{url('uploads/215-122/' . $post->image)}}" class="radius">
                                        </figure>
                                        <h3>{{$post->title}}</h3>
                                    </a>
                                </article>
                            </div>
                            
                            @endforeach
                        
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- news-section-1 -->

    <!-- widgets-section -->
    <section class="widgets-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <!--  -->
                    <div class="currency-widget wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0s">                      
                        <div class="row no-gutters align-items-center">
                            <div class="col">
                                <header class="w-header">
                                    <img src="{{asset('assets/images/money.png')}}" class="img-fluid ">
                                    <h3>أسعار العملات</h3>
                                </header>
                            </div>
                            <div class="col ">
                                <div class="stat-item">
                                    <h6>دولار أمريكي</h6>
                                    <p>{{$erates['usd']['a']}}</p>
                                </div>
                            </div>
                            <div class="col ">
                                <div class="stat-item">
                                    <h6>دينار أردني</h6>
                                    <p>{{$erates['jod']['a']}}</p>
                                </div>
                            </div>
                            <div class="col ">
                                <div class="stat-item">
                                    <h6>يورو</h6>
                                    <p>{{$erates['eur']['a']}}</p>
                                </div>
                            </div>
                        </div>                
                    </div>

                    <!--  -->
                    <div class="weather-widget wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0s">
                        <div class="d-flex align-items-center">
                
                            <header class="w-header">
                                <img src="{{asset('assets/images/weather/'. $weather->image)}}" class="img-fluid">
                                <h3>{{$weather->degree}}</h3>
                            </header>
               
                            <div class="w-body">
                                <p>{{$weather->story}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="-currency-widget wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0s">                      
                        
                            @foreach ($ads['home_top'] as $ad)
                                <a href="{{$ad->url}}" target="_blank">
                                    <img src="{{$ad->image}}" class="img-fluid">
                                </a>        
                                @endforeach
                        
                    </div>

                    <!--  -->
                    <div class="-weather-widget wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0s">
                        
                            @foreach ($ads['home_top'] as $ad)
                                @if($loop->index <= 1)
                                <a href="{{$ad->url}}" target="_blank">
                                    <img src="{{$ad->image}}" class="img-fluid">
                                </a>
                                @endif
                                @endforeach
                        
                    </div>

                </div>
                <div class="col-lg-4" style="padding-right: 8px;">
                    <div class="where-go-widget wow fadeInUp sec-header" data-wow-duration="1.5s" data-wow-delay="0.6s">
                        <h2 style="border-bottom: 1px solid #eeb041;">وين أروح بنابلس؟   </h2>
                        <div class="form-group mb-0">
                            <div id="where-is-go-datepiker" class="cs-datepicker" ></div>
                            <input type="hidden" id="where-is-go-datepiker-input">
                        </div>
                    </div>
                    
                </div>
            </div>                    
       
        </div>
    </section>
    <!-- widgets-section -->


    <!-- news-slider-3-section -->
    <section class="news-slider-3-section">
        <header class="sec-header wow fadeInUp" data-wow-duration="1.5s">
            <h2>
                <a href="{{url('cat/3')}}" class="black">الأخبار</a>    
            </h2>
        </header>
        <div class="content-body wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
            <div class="news-slider-3 owl-carousel nav-top-30">
                {{-- <div class="item"  style="width:677px">
                    <article class="news-item-3">
                        <figure>                                    
                            <img src="images/news-3/1.png" class="img-fluid">
                        </figure>
                        <div class="caption">
                            <h3>الصحة: فلسطين تسجل 168 إصابة بكورونا اليوم</h3>
                            <p class="date">19-06-2020</p>
                            <div class="content">
                                اعلنت وزيرة الصحة مي كيلة، مساء اليوم الاثنين، عن تسجيل 12 إصابة جديدة بفيروس كورونا، بينها 4 إصابات جديدة في محافظة الخليل (3 في مدينة الخليل وإصابة في دورا) و8 إصابات في محافظة بيت لحم، ما يرفع حصيلة الإصابات منذ الصباح إلى 168 إصابة،.
                            </div>
                            <div class="meta d-flex">
                                <div class="share-sec white">
                                    <button type="button" class="btn white">
                                        <svg id="share_1_" data-name="share (1)" xmlns="http://www.w3.org/2000/svg" width="14.267" height="15.564" viewBox="0 0 14.267 15.564">
                                            <path id="Path_5" data-name="Path 5" d="M311.764,4.864A2.432,2.432,0,1,1,314.2,2.432,2.435,2.435,0,0,1,311.764,4.864Zm0-3.891a1.459,1.459,0,1,0,1.459,1.459A1.461,1.461,0,0,0,311.764.973Zm0,0" transform="translate(-299.929)" fill="currentcolor"/>
                                            <path id="Path_6" data-name="Path 6" d="M311.764,356.864a2.432,2.432,0,1,1,2.432-2.432A2.435,2.435,0,0,1,311.764,356.864Zm0-3.891a1.459,1.459,0,1,0,1.459,1.459A1.461,1.461,0,0,0,311.764,352.973Zm0,0" transform="translate(-299.929 -341.3)" fill="currentcolor"/>
                                            <path id="Path_7" data-name="Path 7" d="M2.432,180.864a2.432,2.432,0,1,1,2.432-2.432A2.435,2.435,0,0,1,2.432,180.864Zm0-3.891a1.459,1.459,0,1,0,1.459,1.459A1.461,1.461,0,0,0,2.432,176.973Zm0,0" transform="translate(0 -170.65)" fill="currentcolor"/>
                                            <path id="Path_8" data-name="Path 8" d="M120.176,99.963a.486.486,0,0,1-.241-.909l6.017-3.431a.486.486,0,0,1,.481.845L120.416,99.9a.487.487,0,0,1-.24.064Zm0,0" transform="translate(-116.051 -92.654)" fill="currentcolor"/>
                                            <path id="Path_9" data-name="Path 9" d="M126.214,275.952a.482.482,0,0,1-.24-.064l-6.017-3.431a.486.486,0,0,1,.481-.845l6.017,3.431a.487.487,0,0,1-.241.909Zm0,0" transform="translate(-116.072 -263.294)" fill="currentcolor"/>
                                        </svg>
                                    </button>
                                    <ul>
                                        <li><a href="" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <a href="" class="btn cs-dark-btn border-radius-0">التفاصيل</a>
                            </div>
                        </div>
                    </article>
                </div> --}}
                @foreach ($news as $post)
                <div class="item" style="width:322px">
                    <article class="news-item-4">
                        <figure>
                            <img src="{{url('uploads/322-181/' . $post->image)}}" class="img-fluid radius">
                        </figure>
                        <div class="caption">
                            <h3>
                                <a href="{{url('p/'.$post->id)}}?{{$post->slug}}">{{$post->title}}</a>
                            </h3>
                            <div class="meta">                                        
                                {{-- <div class="share-sec">
                                    <button type="button" class="btn">
                                        <svg id="share_1_" data-name="share (1)" xmlns="http://www.w3.org/2000/svg" width="14.267" height="15.564" viewBox="0 0 14.267 15.564">
                                            <path id="Path_5" data-name="Path 5" d="M311.764,4.864A2.432,2.432,0,1,1,314.2,2.432,2.435,2.435,0,0,1,311.764,4.864Zm0-3.891a1.459,1.459,0,1,0,1.459,1.459A1.461,1.461,0,0,0,311.764.973Zm0,0" transform="translate(-299.929)" fill="currentcolor"/>
                                            <path id="Path_6" data-name="Path 6" d="M311.764,356.864a2.432,2.432,0,1,1,2.432-2.432A2.435,2.435,0,0,1,311.764,356.864Zm0-3.891a1.459,1.459,0,1,0,1.459,1.459A1.461,1.461,0,0,0,311.764,352.973Zm0,0" transform="translate(-299.929 -341.3)" fill="currentcolor"/>
                                            <path id="Path_7" data-name="Path 7" d="M2.432,180.864a2.432,2.432,0,1,1,2.432-2.432A2.435,2.435,0,0,1,2.432,180.864Zm0-3.891a1.459,1.459,0,1,0,1.459,1.459A1.461,1.461,0,0,0,2.432,176.973Zm0,0" transform="translate(0 -170.65)" fill="currentcolor"/>
                                            <path id="Path_8" data-name="Path 8" d="M120.176,99.963a.486.486,0,0,1-.241-.909l6.017-3.431a.486.486,0,0,1,.481.845L120.416,99.9a.487.487,0,0,1-.24.064Zm0,0" transform="translate(-116.051 -92.654)" fill="currentcolor"/>
                                            <path id="Path_9" data-name="Path 9" d="M126.214,275.952a.482.482,0,0,1-.24-.064l-6.017-3.431a.486.486,0,0,1,.481-.845l6.017,3.431a.487.487,0,0,1-.241.909Zm0,0" transform="translate(-116.072 -263.294)" fill="currentcolor"/>
                                        </svg>
                                    </button>
                                    @include('website.share', ['url' => url('p/'.$post->id)])

                                </div> --}}
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach
                
                
            </div>
        </div>
    </section>
    <!-- news-slider-3-section -->

    <!-- news-videos-section -->
    <section class="news-videos-section">
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
    
    <!-- albums-section -->
    <section class="albums-section">                
        <div class="content-body">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <header class="sec-header wow fadeInUp" data-wow-duration="1.5s">
                        <h2>
                        <a href="/cat/13" class="black">معرض الصور</a>    
                        </h2>
                    </header>
                    <div class="albums-slider owl-carousel wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        @foreach ($albums as $post)
                        <div class="album-item">
                            <figure>
                                <a href="{{url('p/'.$post->id)}}?{{$post->slug}}" -data-fancybox>
                                    <img src="{{url('uploads/454-250/' . $post->image)}}" class="img-fluid radius">
                                </a>
                            </figure>
                            <div class="caption" style="@if($loop->even) background-color: #EEB01F; @endif"> 
                                <h3 class="">{{$post->title}}</h3>
                            </div>
                        </div>
                        @endforeach
                        
                        
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
    <!-- albums-section -->

    <!-- news-section-5 -->
    <section class="news-section-5">                
        <div class="content-body">
            <div class="row ">
                <div class="col-lg-12">
                    <header class="sec-header wow fadeInUp" data-wow-duration="1.5s" >
                        <h2>
                        <a href="{{url('cat/19')}}" class="black">خدمات</a>     
                        </h2>
                    </header>
                    <div class="news-slider-5 owl-carousel wow fadeInUp nav-top-30" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        @foreach ($services as $post)
                        <div class="item">
                            <article class="news-item-4 style2">
                                <a href="{{url('p/'.$post->id)}}?{{$post->slug}}">
                                <figure>
                                    <img src="{{url('uploads/454-250/' . $post->image)}}" class="img-fluid radius">
                                </figure>
                                <div class="caption">
                                    <h3>
                                        {{$post->title}}
                                    </h3>
                                    {{-- <div class="meta">                                        
                                        <div class="share-sec right">
                                            <button type="button" class="btn">
                                                <svg id="share_1_" data-name="share (1)" xmlns="http://www.w3.org/2000/svg" width="14.267" height="15.564" viewBox="0 0 14.267 15.564">
                                                    <path id="Path_5" data-name="Path 5" d="M311.764,4.864A2.432,2.432,0,1,1,314.2,2.432,2.435,2.435,0,0,1,311.764,4.864Zm0-3.891a1.459,1.459,0,1,0,1.459,1.459A1.461,1.461,0,0,0,311.764.973Zm0,0" transform="translate(-299.929)" fill="currentcolor"/>
                                                    <path id="Path_6" data-name="Path 6" d="M311.764,356.864a2.432,2.432,0,1,1,2.432-2.432A2.435,2.435,0,0,1,311.764,356.864Zm0-3.891a1.459,1.459,0,1,0,1.459,1.459A1.461,1.461,0,0,0,311.764,352.973Zm0,0" transform="translate(-299.929 -341.3)" fill="currentcolor"/>
                                                    <path id="Path_7" data-name="Path 7" d="M2.432,180.864a2.432,2.432,0,1,1,2.432-2.432A2.435,2.435,0,0,1,2.432,180.864Zm0-3.891a1.459,1.459,0,1,0,1.459,1.459A1.461,1.461,0,0,0,2.432,176.973Zm0,0" transform="translate(0 -170.65)" fill="currentcolor"/>
                                                    <path id="Path_8" data-name="Path 8" d="M120.176,99.963a.486.486,0,0,1-.241-.909l6.017-3.431a.486.486,0,0,1,.481.845L120.416,99.9a.487.487,0,0,1-.24.064Zm0,0" transform="translate(-116.051 -92.654)" fill="currentcolor"/>
                                                    <path id="Path_9" data-name="Path 9" d="M126.214,275.952a.482.482,0,0,1-.24-.064l-6.017-3.431a.486.486,0,0,1,.481-.845l6.017,3.431a.487.487,0,0,1-.241.909Zm0,0" transform="translate(-116.072 -263.294)" fill="currentcolor"/>
                                                </svg>
                                            </button>
                                            <ul>
                                                <li><a href="" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                </div>
                            </a>
                            </article>
                        </div>
                        
                        @endforeach
                        
                        
                    </div>
                </div>
                {{-- <div class="col-lg-4">
                    <div class="adv-420-sec wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.5s">
                        <a href="">
                            <img src="images/adv-420.png" class="img-fluid">
                        </a>
                    </div>
                </div> --}}
            </div>
            
        </div>
    </section>
    <!-- news-section-5 -->

    <!-- news-slider-3-section -->
    <section class="news-slider-3-section">
        <header class="sec-header wow fadeInUp" data-wow-duration="1.5s">
            <h2>
            <a href="/cat/12" class="black"> دوز يسأل</a>
            </h2>
        </header>
        <div class="content-body wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
            <div class="news-slider-3 owl-carousel  nav-top-30">
                
                <div class="item"  style="width:500px">
                    <article class="news-item-3">
                        <a href="{{url('p/'.$asks->first()->id)}}?{{$asks->first()->slug}}">
                        <figure>
                            <img src="{{url('uploads/500-280/' . $post->first()->image)}}" class="img-fluid">
                        </figure>
                        <div class="caption orange">
                            <h3>{{$asks->first()->title}}</h3>
                            {{-- <p class="date">19-06-2020</p> --}}
                            <div class="content">
                                {{$asks->first()->leading}}
                            </div>
                            {{-- <div class="meta d-flex">
                                <div class="share-sec white">
                                    <button type="button" class="btn white">
                                        <svg id="share_1_" data-name="share (1)" xmlns="http://www.w3.org/2000/svg" width="14.267" height="15.564" viewBox="0 0 14.267 15.564">
                                            <path id="Path_5" data-name="Path 5" d="M311.764,4.864A2.432,2.432,0,1,1,314.2,2.432,2.435,2.435,0,0,1,311.764,4.864Zm0-3.891a1.459,1.459,0,1,0,1.459,1.459A1.461,1.461,0,0,0,311.764.973Zm0,0" transform="translate(-299.929)" fill="currentcolor"/>
                                            <path id="Path_6" data-name="Path 6" d="M311.764,356.864a2.432,2.432,0,1,1,2.432-2.432A2.435,2.435,0,0,1,311.764,356.864Zm0-3.891a1.459,1.459,0,1,0,1.459,1.459A1.461,1.461,0,0,0,311.764,352.973Zm0,0" transform="translate(-299.929 -341.3)" fill="currentcolor"/>
                                            <path id="Path_7" data-name="Path 7" d="M2.432,180.864a2.432,2.432,0,1,1,2.432-2.432A2.435,2.435,0,0,1,2.432,180.864Zm0-3.891a1.459,1.459,0,1,0,1.459,1.459A1.461,1.461,0,0,0,2.432,176.973Zm0,0" transform="translate(0 -170.65)" fill="currentcolor"/>
                                            <path id="Path_8" data-name="Path 8" d="M120.176,99.963a.486.486,0,0,1-.241-.909l6.017-3.431a.486.486,0,0,1,.481.845L120.416,99.9a.487.487,0,0,1-.24.064Zm0,0" transform="translate(-116.051 -92.654)" fill="currentcolor"/>
                                            <path id="Path_9" data-name="Path 9" d="M126.214,275.952a.482.482,0,0,1-.24-.064l-6.017-3.431a.486.486,0,0,1,.481-.845l6.017,3.431a.487.487,0,0,1-.241.909Zm0,0" transform="translate(-116.072 -263.294)" fill="currentcolor"/>
                                        </svg>
                                    </button>
                                    <ul>
                                        <li><a href="" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <a href="" class="btn cs-dark-btn border-radius-0">التفاصيل</a>
                            </div> --}}
                        </div>
                    </a>
                    </article>
                </div>
                
                @foreach ($asks as $post)
                @if($loop->index > 0)
                <div class="item" style="width:322px">
                    <article class="news-item-4">
                        <a href="{{url('p/'.$post->id)}}?{{$post->slug}}">
                        <figure>
                            <img src="{{url('uploads/322-181/' . $post->image)}}" class="img-fluid">
                        </figure>
                        <div class="caption">
                            <h3>{{$post->title}}</h3>
                            
                        </div>
                        </a>
                    </article>
                </div>

                @endif
                @endforeach
                
           
            </div>
        </div>
    </section>
    <!-- news-slider-3-section -->

    <!-- news-section-6 -->
    <section class="news-section-6">
        <header class="sec-header wow fadeInUp" data-wow-duration="1.5s">
            <h2>
            <a href="{{url('cat/5')}}" class="black">شباب وجامعة</a>    
            </h2>
        </header>
        <div class="content-body wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
            <div class="news-slider-6 owl-carousel">
                @foreach ($youth as $post)
                <div class="item">
                    <a href="{{url('p/'.$post->id)}}?{{$post->slug}}">
                        <article class="news-item-6">
                        <figure>
                                <img src="{{url('uploads/277-461/' . $post->image)}}" class="img-fluid">
                        </figure>
                        <div class="caption">
                            <h3>{{$post->title}}</h3>
                            
                        </div>
                    </article>
                    </a>
                    </div>
                @endforeach
                
                
            </div>
        </div>
    </section>
    <!-- news-section-6 -->

    <!-- four-advr-section -->
    {{-- <section class="four-advr-section  wow fadeInUp" data-wow-duration="1.5s">
        <div class="container-fluid">
            <div class="wrapper d-flex  align-items-center justify-content-center">
                <figure class="advr-item-1">
                    <a href="">
                    <img src="images/advr/1.png">  
                    </a>                                 
                </figure>
                <figure class="advr-item-1">
                    <img src="images/advr/2.png">                                    
                </figure>
                <figure class="advr-item-1">
                    <img src="images/advr/3.png">                                    
                </figure>
                <figure class="advr-item-1">
                    <img src="images/advr/4.png">                                    
                </figure>
            </div>
         
        </div>
    </section> --}}
    <!-- four-advr-section -->

    <!-- news-section-7 ( sport )--> 
    <section class="news-section-7">
        <header class="sec-header wow fadeInUp" data-wow-duration="1.5s">
            <h2>
            <a href="{{url('cat/4')}}" class="black">   رياضة </a> 
            </h2>
        </header>
        <div class="news-slider-7 owl-carousel wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
            @foreach ($sports as $post)
            <div class="item">
                <a href="{{url('p/'.$post->id)}}?{{$post->slug}}">
                <article class="news-item-4 style2">
                    <figure>
                            <img src="{{url('uploads/330-250/' . $post->image)}}" class="img-fluid">
                        
                    </figure>
                    <div class="caption">
                        <h3>
                            {{$post->title}}
                        </h3>
                    </div>
                </article>
            </a>
            </div>
            @endforeach
            
            
        </div>
    </section>
    <!-- news-section-7 -->

    <!-- news-section-7 ( art )--> 
    <section class="news-section-7">
        <header class="sec-header wow fadeInUp" data-wow-duration="1.5s">
            <h2>
                <a href="{{url('cat/7')}}" class="black">فن وثقافة</a>
                
            </h2>
        </header>
        <div class="news-slider-7 owl-carousel wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
            @foreach ($culture as $post)
            <div class="item">
                <a href="{{url('p/'.$post->id)}}?{{$post->slug}}">
                <article class="news-item-4 style2">
                    <figure>
                            <img src="{{url('uploads/330-250/' . $post->image) }}" class="img-fluid">
                    </figure>
                    <div class="caption">
                        <h3>
                            {{$post->title}}
                        </h3>
                    </div>
                </article>
            </a>
            </div>
            @endforeach
            
            
        </div>
    </section>
    <!-- news-section-7 -->

    <!-- news-section-7 ( society )--> 
    <section class="news-section-7">
        <header class="sec-header wow fadeInUp" data-wow-duration="1.5s">
            <h2>
            <a href="{{url('cat/6')}}" class="black">    مجتمع</a>
            </h2>
        </header>
        <div class="news-slider-7 owl-carousel wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
            @foreach($socity as $post)
            <div class="item">
                <a href="{{url('p/'.$post->id)}}?{{$post->slug}}">
                <article class="news-item-4 style2">
                    <figure>
                            <img src="{{url('uploads/330-250/' . $post->image)}}" class="img-fluid">
                    </figure>
                    <div class="caption">
                        <h3>
                            {{$post->title}}
                        </h3>
                    </div>
                </article>
            </a>
            </div>
            @endforeach
            
        </div>
    </section>
    <!-- news-section-7 -->

    <!-- news-section-8 -->
    <section class="news-section-8">
        <header class="sec-header wow fadeInUp" data-wow-duration="1.5s">
            <h2>
                <a href="{{url('cat/9')}}" class="black">مسؤول بحكي</a>
                </h2>
        </header>
        <div class="news-slider-8 owl-carousel wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
            @foreach($talks->chunk(2) as $posts)
            <div class="item">
                @foreach($posts as $post)
                <article class="news-item-8">
                    <a href="{{url('p/' . $post->id)}}?{{$post->slug}}" class="media">
                        <figure>
                            <img src="{{url('uploads/217-124/' . $post->image) }}">
                        </figure>
                        <div class="media-body">
                            <h3>{{$post->title}}</h3>
                        </div>
                    </a>
                </article>
                @endforeach
                
            </div>
            @endforeach
        </div>
    </section>
    <!-- news-section-8 -->

    <!-- news-section-9 -->
    <section class="news-section-9">
        <header class="sec-header wow fadeInUp" data-wow-duration="1.5s">
            <h2>
            <a href="{{url('cat/8')}}" class="black"> منوعات</a></h2>
        </header>
        <div class="news-slider-9 owl-carousel wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
            @foreach ($others as $post)
            <div class="item">
                <article class="news-item-9">
                    <a href="{{url('p/' . $post->id)}}?{{$post->slug}}">
                        <figure>
                            <img src="{{url('uploads/452-244/' . $post->image)}}">
                        </figure>
                        <h3>{{$post->title}}</h3>
                    </a>
                </article>
            </div>
            @endforeach
            
            
        </div>
    </section>
    <!-- news-section-9 -->

    <!-- news-section-7 ( art )--> 
    {{-- <section class="news-section-7">
        <header class="sec-header wow fadeInUp" data-wow-duration="1.5s">
            <h2>فن وثقافة</h2>
        </header>
        <div class="news-slider-7 owl-carousel wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
            <div class="item">
                <article class="news-item-4 style2">
                    <figure>
                        <a href="">
                            <img src="images/news-7/6.png" class="img-fluid">
                        </a>
                    </figure>
                    <div class="caption">
                        <h3>
                            <a href="">استعراض التراثا الفلسطيني من خلال فعاليات في رام الله </a>
                        </h3>
                    </div>
                </article>
            </div>
            
        </div>
    </section> --}}
    <!-- news-section-7 -->

    <!-- news-section-10 -->
    <section class="news-section-10">
        <header class="sec-header wow fadeInUp" data-wow-duration="1.5s">
            <h2>
               <a href="{{url('cat/10')}}" class="black"> اقتصاد</a></h2>
        </header>
        <div class="news-slider-10 owl-carousel wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
            @foreach ($money as $post)
            <div class="item">
                <article class="news-item-10">
                    <a href="{{url('p/'.$post->id)}}?{{$post->slug}}">
                        <figure>
                            <img src="{{url('uploads/272-336/' . $post->image)}}">
                        </figure>
                        <h3>{{$post->title}}</h3>
                    </a>
                </article>                       
            </div>
            @endforeach
            
            
        </div>
    </section>
    <!-- news-section-9 -->

    <!-- advr-full-section -->
    {{-- <div class="advr-full-section text-center wow fadeInUp">
        <div class="container">
            <a href="">
                <img src="images/advr-full.png">
            </a>
        </div>
    </div> --}}
    <!-- advr-full-section -->

</div>


@endsection