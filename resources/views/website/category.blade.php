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
    <section class="single-page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
    <section class="news-section-7 -my-5">
        <div class="container-fluid">
            <header class="sec-header wow fadeInUp" data-wow-duration="1.5s">
                <h2>{{$category->title}} </h2>
            </header>
            <div class="row mx-n2 gird-news">
                @foreach ($posts as $post)
                    
                
                <div class="col-xl-6 col-lg-4 col-6 mb-4 px-2 wow fadeInUp" data-wow-duration="1.5s" >
                    <a href="{{url('p/' . $post->id) }}?{{$post->slug}}">
                    <article class="news-item-4 style2">
                        <figure>
                                <img src="{{url('uploads/330-250/' . $post->image)}}" class="img-fluid">
                        </figure>
                        <div class="caption">
                            <h3>{{$post->title}}</h3>
                        </div>
                    </article>
                </a>
                </div>
                @endforeach
            </div>
            <nav aria-label="Page navigation example  justify-content-center">
            {{$posts->links()}}
            </nav>
            
        </div>
    </section>
                </div>
<div class="col-md-4  my-5">


    <div class="where-go-widget wow fadeInUp sec-header" data-wow-duration="1.5s" data-wow-delay="0.6s" style="height: auto;">
        <h2 style="border-bottom: 1px solid #eeb041;">وين أروح بنابلس؟   </h2>
        <div class="form-group mb-0">
            <div id="where-is-go-datepiker" class="cs-datepicker" ></div>
            <input type="hidden" id="where-is-go-datepiker-input">
        </div>
    </div>




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






                    <div class="row mx-n2 gird-news2">
                        @foreach ($top_posts as $post)
                            
                        
                        <div class="col-xl-12 col-lg-12 col-12 mb-4 px-2 wow fadeInUp" data-wow-duration="1.5s" >
                            <a href="{{url('p/' . $post->id) }}?{{$post->slug}}">
                            <article class="news-item-4 style2">
                                <figure>
                                        <img src="{{url('uploads/330-250/' . $post->image)}}" class="img-fluid">
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
                
            </div>
        
        </div>
    </section>
</div>
</div>
@endsection