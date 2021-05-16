<!DOCTYPE html>
<html dir="rtl">
	<head>
		<meta charset="utf-8" />
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    	  <!-- Bootstrap CSS -->
	    <!-- <link rel="stylesheet" href="css/bootstrap.min.css" /> -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap-rtl.min.css')}}" />
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" />
        <!-- FontAwesome CSS -->
        <link rel="stylesheet" href="{{asset('assets/fontawesome/css/all.css')}}" />  
        <!-- owl slider CSS -->
        <link rel="stylesheet" href="{{asset('assets/plugins/owlslider/assets/owl.carousel.min.css')}}"/>

        <link rel="stylesheet" href="{{asset('assets/plugins/fancybox/jquery.fancybox.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}">

        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />

        



        {{-- <title>Page Title. Maximum length 60-70 characters</title> --}}
        {{-- <meta name="description" content="Page description. No longer than 155 characters." /> --}}
        <title>{{ $page_title }}</title>
        <meta name="description" content="{{ $page_description }}" />
        
        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="{{ $page_title }}">
        <meta itemprop="description" content="{{ $page_description }}">
        <meta itemprop="image" content="http://www.example.com/image.jpg">
        
        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@publisher_handle">
        <meta name="twitter:title" content="{{ $page_title }}">
        <meta name="twitter:description" content="{{ $page_description }}">
        <meta name="twitter:creator" content="@author_handle">
        <!-- Twitter summary card with large image must be at least 280x150px -->
        <meta name="twitter:image:src" content="http://www.example.com/image.jpg">
        
        <!-- Open Graph data -->
        <meta property="og:title" content="{{ $page_title }}" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="{{Request::url()}}" />
        <meta property="og:image" content="http://example.com/image.jpg" />
        <meta property="og:description" content="{{ $page_description }}" />
        <meta property="og:site_name" content="dooz دوز" />
        {{-- <meta property="article:published_time" content="2013-09-17T05:59:00+01:00" />
        <meta property="article:modified_time" content="2013-09-16T19:08:47+01:00" /> --}}
        <meta property="article:section" content="Article Section" />
        <meta property="article:tag" content="Article Tag" />
        <meta property="fb:admins" content="1633990799999556" />







        <link rel="shortcut icon" type="image/png" href="{{asset('favicon.png')}}"/>
        @yield('css')

        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({
                  google_ad_client: "ca-pub-8022061984908001",
                  enable_page_level_ads: false
             });
        </script>
        
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '1633990799999556');
            fbq('track', 'PageView');
          </script>
          <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1633990799999556&ev=PageView&noscript=1"
          /></noscript>
          <!-- End Facebook Pixel Code -->
          
          <script>
            fbq('track', 'ViewContent');
          </script>
          
          <!-- Global site tag (gtag.js) - Google Analytics -->
          <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111892984-1"></script>
          <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
          
            gtag('config', 'UA-111892984-1');
          </script>
    </head>
    <body>   

        <div id="fb-root"></div>
		<script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

        <!-- pre-loader -->
        {{-- <section class="pre-loader">
            <div class="loader">
                <div></div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                <defs>
                    <filter id="goo">
                        <fegaussianblur in="SourceGraphic" stddeviation="15" result="blur"></fegaussianblur>
                        <fecolormatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 30 -10"
                                       result="goo"></fecolormatrix>
                        <feblend in="SourceGraphic" in2="goo"></feblend>
                    </filter>
                </defs>
            </svg>
        </section> --}}
        <!-- pre-loader -->

    	<!-- Side Menu -->
        <aside class="side-menu">
            <div class="text-left">
                <button class="bg-transparent border-0 btn text-muted btn-lg" id="closeMenu">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="scroll-menu">
                <nav class="scrollspy_menu">
                    <ul class="navbar-nav">

                        @foreach ($menus as $menu)
                            <li class="nav-item">
                                <a class="nav-link {{$menu->url==Request::path()? 'active': ''}}" href="{{url($menu->url)}}">{{$menu->title}}</a>
                            </li>
                        @endforeach
                        <li class="nav-item">
                            <a class="nav-link " href="{{'page/4'}}">من نحن</a>
                        </li>      
                        <li class="nav-item">
                            <a class="nav-link " href="{{'page/6'}}">اتصل بنا</a>
                        </li>         
                    </ul>
                </nav>
            </div> 
        </aside>

        <div class="side-overlay"></div>
        <!-- Side Menu -->



        <!-- Start Main Header -->
        <header class="main-header " id="home">            
            <div class="header-top">
                <div class="container-fluid">
                    <div class="wrapper d-flex align-items-center justify-content-between flex-wrap flex-lg-nowrap row">
                        <a href="{{url('')}}" class="brand col" style="padding-right: 50px;">
                            <img src="{{asset('assets/images/logo.svg')}}">
                        </a>
                        <div class="adv-80 mx-auto col-7">
                            <div class="ads-slider owl-carousel wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                                @foreach ($ads['home_top'] as $ad)
                                <a href="{{$ad->url}}" target="_blank">
                                    <img src="{{$ad->image}}">
                                </a>        
                                @endforeach
                            </div>
                        </div>
                        <div class="h-social col text-left">
                            <a href="https://www.facebook.com/Dooz.News" target="_blank">
                                <img src="{{url('assets/images/social/facebook1.png')}}">
                            </a>
                            <a href="https://www.instagram.com/dooznablus/" target="_blank">
                                <img src="{{url('assets/images/social/instagram1.png')}}">
                            </a>
                            <a href="https://www.youtube.com/channel/UCGSUJEes_AwVnhDsqa-Mi_w" target="_blank">
                                <img src="{{url('assets/images/social/youtube1.png')}}">

                            </a>
                            <a href="https://twitter.com/dooznablus" target="_blank">
                                <img src="{{url('assets/images/social/twitter1.png')}}">
                                
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container-fluid position-relative">
                    <nav class="navbar navbar-expand-xl">
                        <button type="button" class="navbar-toggler btn " id="openMenu">
                            <i class="fa fa-align-right fa-fw"></i>
                        </button>              
                        <div class="collapse navbar-collapse " id="main_menu">    
                            <ul class="navbar-nav main-menu">
                                @foreach ($menus as $menu)
                                <li class="nav-item">
                                    <a class="nav-link {{$menu->url==Request::path()? 'active': ''}}" href="{{url($menu->url)}}">{{$menu->title}}</a>
                                </li>
                            @endforeach    
                                <li class="nav-item">
                                    <div style="width: 30px"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="{{'page/4'}}">من نحن</a>
                                </li>      
                                <li class="nav-item">
                                    <a class="nav-link " href="{{'page/6'}}">اتصل بنا</a>
                                </li>      
                            </ul>
                        </div>   
                        <div class="header-search">
                            <form action="{{url('search')}}">
                                <div class="search-form-wrapper d-flex">
                                    <input type="text" placeholder="بحث .." value="{{request('word')}}" class="form-control" name="word">
                                    <button type="submit" class="btn cs-primary-btn"><i class=" fa fa-search fa-fw"></i></button>
                                </div>
                            </form>
                        </div>                         
                    </nav>                           
                    
                </div>
            </div>                 
        </header>
        <!-- End Main Header -->

        @yield('content')

        

        <!-- main-footer -->
        <footer class="main-footer">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="f-logo">
                            <a href="/">
                                <img src="{{asset('assets/images/logo.svg')}}">
                            </a>
                        </div>
                        {{-- <div class="f-quick-links">
                            <div class="d-flex">
                                @foreach ($menus->chunk(4) as $sub_menus)
                                <ul class="list-unstyled flex-grow-1">
                                    @foreach ($sub_menus as $menu)
                                    <li class="nav-item">
                                        <a class="nav-link {{$menu->url==Request::path()? 'active': ''}}" href="{{url($menu->url)}}">{{$menu->title}}</a>
                                    </li>
                                @endforeach
                            </ul>
                                @endforeach
                                
                                                           
                            </div>
                        </div> --}}
                        <div class="f-social">
                            {{-- <a href="" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="" target="_blank"><i class="fab fa-youtube"></i></a>
                            <a href="" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="" target="_blank"><i class="fab fa-facebook"></i></a> --}}
                        </div>
                        <div class="copyright">
                          جميع الحقوق محفوظة dooz  © {{date('Y')}}
                        </div>
                    </div>
                </div>     
                <span id="move-to-top"><i class="fas fa-chevron-up"></i></span> 
            </div>     
        </footer>
        <!-- ./main-footer -->

       

        <!-- Optional JavaScript -->
        <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/plugins/owlslider/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/plugins/fancybox/jquery.fancybox.min.js')}}"></script>
        <script src="{{asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{asset('assets/plugins/bootstrap-datepicker/locales/bootstrap-datepicker.ar.min.js')}}"></script>

        {{-- <script src="{{asset('assets/js/wow.min.js')}}"></script> --}}
        <script src="{{asset('assets/js/main.js')}}"></script>
        {{-- <script type='text/javascript' src='https://cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js'></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/jquery.marquee@1.5.0/jquery.marquee.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script type="text/javascript">
            $('.marquee-news-list').marquee();

            // $('.datepicker').datepicker({
            //     language: "ar"
            // });
          
            // var daysArray = [];

           

            var daysArray = @json($events);
            $(document).ready(function() {

            $('#where-is-go-datepiker').datepicker({
                language: 'ar',
                
                templates:{
                    leftArrow: '<i class="fas fa-angle-double-right"></i>',
                    rightArrow: '<i class="fas fa-angle-double-left"></i>',
                },
                todayHighlight: true,
                beforeShowDay: function(date) {
                    var month = ("0" + (date.getMonth() + 1)).slice(-2)
                        calender_date = date.getFullYear() + '-' + month + '-' + ('0'+date.getDate()).slice(-2);

                        var search_index = $.grep(daysArray, function(e){ return e.date == calender_date; });
                    
                        if (search_index.length > 0) {
                            console.log(search_index);
                            return {
                                classes: 'has-content', 
                                content: '<span>'+date.getDate()+'</span><div class="content">'+search_index[0].content+'</div><span class="date">'+calender_date+'</span>'
                            };
                        } else {
                            return {
                                content: '<span>'+date.getDate()+'</span>'
                            };
                        }
                    }

                });

                $(".datepicker .datepicker-days").on('click', 'td.day.has-content', function () {
                    content = $(this).find('span + div').html();
                    date = $(this).find('.date').text();
                
                    Swal.fire({
                            title: "أحداث يوم " + date,
                            html: content
                        });
                });
            });
            
        </script>
        @yield('js')

	</body>
</html>