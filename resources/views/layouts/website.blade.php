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
        <title>دوز</title>
    </head>
    <body>   
        <!-- pre-loader -->
        <section class="pre-loader">
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
        </section>
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
                        <li class="nav-item">
                            <a class="nav-link active" href="">الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">الاخبار</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">شباب وجامعة</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">خدمات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">مجتمع</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">فن وثقافة</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">منوعات</a>
                        </li>                          
                        <li class="nav-item">
                            <a class="nav-link" href="">مسؤول بحكي</a>
                        </li>                     
                        <li class="nav-item">
                            <a class="nav-link" href="">إقتصاد</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">دوز يسأل</a>
                        </li>  
                        <li class="nav-item">
                            <a class="nav-link" href="">رياضة</a>
                        </li>  
                        <li class="nav-item">
                            <a class="nav-link" href="">معرض صور</a>
                        </li>   
                        <li class="nav-item">
                            <a class="nav-link" href="">من نحن</a>
                        </li>   
                        <li class="nav-item">
                            <a class="nav-link" href="">اتصل بنا</a>
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
                <div class="container">
                    <div class="wrapper d-flex align-items-center justify-content-between flex-wrap flex-lg-nowrap">
                        <a href="" class="brand">
                            <img src="images/logo.svg">
                        </a>
                        <div class="adv-80 mx-auto">
                            <a href="">
                                <img src="images/adv-80.png">
                            </a>
                        </div>
                        <div class="h-social">
                            <a href="" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="" target="_blank"><i class="fab fa-youtube"></i></a>
                            <a href="" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="" target="_blank"><i class="fab fa-facebook"></i></a>
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
                                <li class="nav-item">
                                    <a class="nav-link active" href="">الرئيسية</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">الاخبار</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">شباب وجامعة</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">خدمات</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">مجتمع</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">فن وثقافة</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">منوعات</a>
                                </li>                          
                                <li class="nav-item">
                                    <a class="nav-link" href="">مسؤول بحكي</a>
                                </li>                     
                                <li class="nav-item">
                                    <a class="nav-link" href="">إقتصاد</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">دوز يسأل</a>
                                </li>  
                                <li class="nav-item">
                                    <a class="nav-link" href="">رياضة</a>
                                </li>  
                                <li class="nav-item">
                                    <a class="nav-link" href="">معرض صور</a>
                                </li>   
                                <li class="nav-item">
                                    <a class="nav-link" href="">من نحن</a>
                                </li>   
                                <li class="nav-item">
                                    <a class="nav-link" href="">اتصل بنا</a>
                                </li>                           
                            </ul>
                        </div>   
                        <div class="header-search">
                            <form>
                                <div class="search-form-wrapper d-flex">
                                    <input type="text" placeholder="بحث .." class="form-control" name="">
                                    <button type="button" class="btn cs-primary-btn"><i class=" fa fa-search fa-fw"></i></button>
                                </div>
                            </form>
                        </div>                         
                    </nav>                           
                    
                </div>
            </div>                 
        </header>
        <!-- End Main Header -->

        <div class="body-content">

            <!-- news-section-1 -->
            <section class="news-section-1 mt-5">
                <div class="container-fluid">
                    <div class="row cs-gutter-md">
                        <div class="col-lg-2">
                            <div class="marquee-news wow fadeInUp" data-wow-duration="1.5s">
                                <div class="title">
                                    <i class="fas fa-angle-double-left"></i>
                                    <span>شريط الاخبار</span>
                                </div>
                                <div class="marquee-news-list"  data-direction='up' data-duration='5000' data-pauseOnHover="true">
                                    <div  class="item">
                                        <a href="">
                                            <p>19-06-2020 12:35</p>
                                            <h3>"حزب الله" ينشر فيديو لأهداف داخل إسرائيل تصل إليها صورايخه الدقيقة</h3>
                                        </a>                                        
                                    </div>
                                    <div  class="item">
                                        <a href="">
                                            <p>19-06-2020 12:35</p>
                                            <h3>إسرائيل تسجل وفاتين و91 إصابة جديدة بكورونا</h3>
                                        </a>                                        
                                    </div>
                                    <div  class="item">
                                        <a href="">
                                            <p>19-06-2020 12:35</p>
                                            <h3>دراسة: مستويات الأجسام المضادة لدى المتعافين من كورونا تنخفض سريعا</h3>
                                        </a>                                        
                                    </div>
                                    <div  class="item">
                                        <a href="">
                                            <p>19-06-2020 12:35</p>
                                            <h3>"حزب الله" ينشر فيديو لأهداف داخل إسرائيل تصل إليها صورايخه الدقيقة</h3>
                                        </a>                                        
                                    </div>
                                    <div  class="item">
                                        <a href="">
                                            <p>19-06-2020 12:35</p>
                                            <h3>"حزب الله" ينشر فيديو لأهداف داخل إسرائيل تصل إليها صورايخه الدقيقة</h3>
                                        </a>                                        
                                    </div>
                                    <div  class="item">
                                        <a href="">
                                            <p>19-06-2020 12:35</p>
                                            <h3>"حزب الله" ينشر فيديو لأهداف داخل إسرائيل تصل إليها صورايخه الدقيقة</h3>
                                        </a>                                        
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="col-lg-6">
                            <div class="main-news-slider owl-carousel wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                                <div class="news-item-1">
                                    <img src="images/news-1/1.png">
                                    <div class="caption">
                                        <div class="title-wrapper d-flex align-items-center">
                                            <div class="title">
                                                <h3>الاحتلال يحتجز الحافلات المتوجهة إلى مهرجان أريحا</h3>
                                                <p class="date">19-06-2020</p>
                                            </div>
                                            <a href="" class="btn cs-primary-btn">التفاصيل</a>
                                        </div>
                                        <div class="excerpt">
                                            أريحا- معا- احتجزت قوات الاحتلال الإسرائيلي، اليوم الاثنين، عشرات الحافلات التي تقل مواطنين قادمين إلى مدينة أريحا، للمشاركة في المهرجان المركزي الرافض لمشروع الضم.
                                        </div>
                                        <div class="share-sec">
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
                                    </div>
                                </div>
                                <div class="news-item-1">
                                    <img src="images/news-1/1.png">
                                    <div class="caption">
                                        <div class="title-wrapper d-flex align-items-center">
                                            <div class="title">
                                                <h3>الاحتلال يحتجز الحافلات المتوجهة إلى مهرجان أريحا</h3>
                                                <p class="date">19-06-2020</p>
                                            </div>
                                            <a href="" class="btn cs-primary-btn">التفاصيل</a>
                                        </div>
                                        <div class="excerpt">
                                            أريحا- معا- احتجزت قوات الاحتلال الإسرائيلي، اليوم الاثنين، عشرات الحافلات التي تقل مواطنين قادمين إلى مدينة أريحا، للمشاركة في المهرجان المركزي الرافض لمشروع الضم.
                                        </div>
                                        <div class="share-sec">
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
                                    </div>
                                </div>
                                <div class="news-item-1">
                                    <img src="images/news-1/1.png">
                                    <div class="caption">
                                        <div class="title-wrapper d-flex align-items-center">
                                            <div class="title">
                                                <h3>الاحتلال يحتجز الحافلات المتوجهة إلى مهرجان أريحا</h3>
                                                <p class="date">19-06-2020</p>
                                            </div>
                                            <a href="" class="btn cs-primary-btn">التفاصيل</a>
                                        </div>
                                        <div class="excerpt">
                                            أريحا- معا- احتجزت قوات الاحتلال الإسرائيلي، اليوم الاثنين، عشرات الحافلات التي تقل مواطنين قادمين إلى مدينة أريحا، للمشاركة في المهرجان المركزي الرافض لمشروع الضم.
                                        </div>
                                        <div class="share-sec">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="news-2-container wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.5s">
                                <div class="row cs-gutter-md">
                                    <div class="col-lg-6 col-sm-4 col-6">
                                        <article class="news-item-2">
                                            <a href="">
                                                <figure>                                            
                                                    <img src="images/news-2.png">
                                                </figure>
                                                <h3>أنواع متعددة لريضات كرة القدم</h3>
                                            </a>
                                        </article>
                                    </div>
                                    <div class="col-lg-6 col-sm-4 col-6">
                                        <article class="news-item-2">
                                            <a href="">
                                                <figure>                                            
                                                    <img src="images/news-2.png">
                                                </figure>
                                                <h3>أنواع متعددة لريضات كرة القدم</h3>
                                            </a>
                                        </article>
                                    </div>
                                    <div class="col-lg-6 col-sm-4 col-6">
                                        <article class="news-item-2">
                                            <a href="">
                                                <figure>                                            
                                                    <img src="images/news-2.png">
                                                </figure>
                                                <h3>أنواع متعددة لريضات كرة القدم</h3>
                                            </a>
                                        </article>
                                    </div>
                                    <div class="col-lg-6 col-sm-4 col-6">
                                        <article class="news-item-2">
                                            <a href="">
                                                <figure>                                            
                                                    <img src="images/news-2.png">
                                                </figure>
                                                <h3>أنواع متعددة لريضات كرة القدم</h3>
                                            </a>
                                        </article>
                                    </div>
                                    <div class="col-lg-6 col-sm-4 col-6">
                                        <article class="news-item-2">
                                            <a href="">
                                                <figure>                                            
                                                    <img src="images/news-2.png">
                                                </figure>
                                                <h3>أنواع متعددة لريضات كرة القدم</h3>
                                            </a>
                                        </article>
                                    </div>
                                    <div class="col-lg-6 col-sm-4 col-6">
                                        <article class="news-item-2">
                                            <a href="">
                                                <figure>                                            
                                                    <img src="images/news-2.png">
                                                </figure>
                                                <h3>أنواع متعددة لريضات كرة القدم</h3>
                                            </a>
                                        </article>
                                    </div>
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
                        <div class="col-lg-8">
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
                        </div>
                        <div class="col-lg-4">
                            <div class="where-go-widget wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.6s">
                                <h6>أين تذهب في نابلس؟ </h6>
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
                    <h2>الأخبار</h2>
                </header>
                <div class="content-body wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <div class="news-slider-3 owl-carousel">
                        <div class="item"  style="width:677px">
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
                        </div>
                        <div class="item" style="width:322px">
                            <article class="news-item-4">
                                <figure>
                                    <img src="images/news-3/2.png" class="img-fluid">
                                </figure>
                                <div class="caption">
                                    <h3>
                                        <a href="">الاحتلال يحتجز الحافلات المتوجهة إلى مهرجان أريحا</a>
                                    </h3>
                                    <div class="meta">                                        
                                        <div class="share-sec">
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
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="item" style="width:322px">
                            <article class="news-item-4">
                                <figure>
                                    <img src="images/news-3/2.png" class="img-fluid">
                                </figure>
                                <div class="caption">
                                    <h3><a href="">الاحتلال يحتجز الحافلات المتوجهة إلى مهرجان أريحا</a></h3>
                                    <div class="meta">                                        
                                        <div class="share-sec">
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
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="item" style="width:322px">
                            <article class="news-item-4">
                                <figure>
                                    <img src="images/news-3/2.png" class="img-fluid">
                                </figure>
                                <div class="caption">
                                    <h3><a href="">الاحتلال يحتجز الحافلات المتوجهة إلى مهرجان أريحا</a></h3>
                                    <div class="meta">                                        
                                        <div class="share-sec">
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
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="item" style="width:322px">
                            <article class="news-item-4">
                                <figure>
                                    <img src="images/news-3/2.png" class="img-fluid">
                                </figure>
                                <div class="caption">
                                    <h3><a href="">الاحتلال يحتجز الحافلات المتوجهة إلى مهرجان أريحا</a></h3>
                                    <div class="meta">                                        
                                        <div class="share-sec">
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
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="item" style="width:322px">
                            <article class="news-item-4">
                                <figure>
                                    <img src="images/news-3/2.png" class="img-fluid">
                                </figure>
                                <div class="caption">
                                    <h3><a href="">الاحتلال يحتجز الحافلات المتوجهة إلى مهرجان أريحا</a></h3>
                                    <div class="meta">                                        
                                        <div class="share-sec">
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
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
            <!-- news-slider-3-section -->

            <!-- news-videos-section -->
            <section class="news-videos-section">
                <header class="sec-header wow fadeInUp" data-wow-duration="1.5s">
                    <h2>شاهد فيديوهات دوز</h2>
                </header>
                <div class="content-body wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <div class="news-videos-slider owl-carousel">
                        <div class="news-video-item">
                            <a  href="https://www.youtube.com/watch?v=pLP-x3JD1tw" data-fancybox>
                                <figure>                                
                                    <img src="https://img.youtube.com/vi/OJQI_zHHwow/mqdefault.jpg" class="img-fluid">
                                </figure>
                                <span class="play-video">
                                    <i class="far fa-play-circle"></i>
                                </span>
                                <div class="caption">
                                    <h3>لصحة: فلسطين تسجل 168 إصابة بكورونا اليوم</h3>
                                </div>
                            </a>
                        </div>
                        <div class="news-video-item">
                            <a  href="https://www.youtube.com/watch?v=pLP-x3JD1tw" data-fancybox>
                                <figure> 
                                    <img src="images/news-video/1.png" class="img-fluid">
                                </figure>
                                <span class="play-video">
                                    <i class="far fa-play-circle"></i>
                                </span>
                                <div class="caption">
                                    <h3>الصحة: فلسطين تسجل 168 إصابة بكورونا اليوم</h3>
                                </div>
                            </a>
                        </div>
                        <div class="news-video-item">
                            <a  href="https://www.youtube.com/watch?v=pLP-x3JD1tw" data-fancybox>
                                <figure> 
                                    <img src="images/news-video/2.png" class="img-fluid">
                                </figure>
                                <span class="play-video">
                                    <i class="far fa-play-circle"></i>
                                </span>
                                <div class="caption">
                                    <h3>الصحة: فلسطين تسجل 168 إصابة بكورونا اليوم</h3>
                                </div>
                            </a>
                        </div>
                        <div class="news-video-item">
                            <a  href="https://www.youtube.com/watch?v=pLP-x3JD1tw" data-fancybox>
                                <figure> 
                                    <img src="images/news-video/3.png" class="img-fluid">
                                </figure>
                                <span class="play-video">
                                    <i class="far fa-play-circle"></i>
                                </span>
                                <div class="caption">
                                    <h3>الصحة: فلسطين تسجل 168 إصابة بكورونا اليوم</h3>
                                </div>
                            </a>
                        </div>
                        <div class="news-video-item">
                            <a  href="https://www.youtube.com/watch?v=pLP-x3JD1tw" data-fancybox>
                                <figure> 
                                    <img src="images/news-video/4.png" class="img-fluid">
                                </figure>
                                <span class="play-video">
                                    <i class="far fa-play-circle"></i>
                                </span>
                                <div class="caption">
                                    <h3>الصحة: فلسطين تسجل 168 إصابة بكورونا اليو</h3>
                                </div>
                            </a>
                        </div>
                        <div class="news-video-item">
                            <a  href="https://www.youtube.com/watch?v=pLP-x3JD1tw" data-fancybox>
                                <figure> 
                                    <img src="images/news-video/5.png" class="img-fluid">
                                </figure>
                                <span class="play-video">
                                    <i class="far fa-play-circle"></i>
                                </span>
                                <div class="caption">
                                    <h3>الصحة: فلسطين تسجل 168 إصابة بكورونا اليوم</h3>
                                </div>
                            </a>
                        </div>
              
                    </div>
                </div>
            </section>        
            <!-- news-videos-section -->
            
            <!-- albums-section -->
            <section class="albums-section">                
                <div class="content-body">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <header class="sec-header wow fadeInUp" data-wow-duration="1.5s">
                                <h2>معرض الصور</h2>
                            </header>
                            <div class="albums-slider owl-carousel wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                                <div class="album-item">
                                    <figure>
                                        <a href="images/albums/1.png" data-fancybox>
                                            <img src="images/albums/1.png" class="img-fluid">
                                        </a>
                                    </figure>
                                    <div class="caption" style="background-color: #EEB01F;">                                
                                        <h3 class="">سوق الطيور في نابلس</h3>
                                    </div>
                                </div>
                                <div class="album-item">
                                    <figure>
                                        <a href="images/albums/1.png" data-fancybox>
                                            <img src="images/albums/2.png" class="img-fluid">
                                        </a>
                                    </figure>
                                    <div class="caption">                                
                                        <h3 class="">أجواء رمضان في نابلس</h3>
                                    </div>
                                </div>
                                <div class="album-item">
                                    <figure>
                                        <a href="images/albums/1.png" data-fancybox>
                                            <img src="images/albums/1.png" class="img-fluid">
                                        </a>
                                    </figure>
                                    <div class="caption" style="background-color: #EEB01F;">                                
                                        <h3 class="">سوق الطيور في نابلس</h3>
                                    </div>
                                </div>
                                <div class="album-item">
                                    <figure>
                                        <a href="images/albums/1.png" data-fancybox>
                                            <img src="images/albums/2.png" class="img-fluid">
                                        </a>
                                    </figure>
                                    <div class="caption">                                
                                        <h3 class="">أجواء رمضان في نابلس</h3>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="adv-420-sec wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.5s">
                                <a href="">
                                    <img src="images/adv-420.png" class="img-fluid">
                                </a>
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
                        <div class="col-lg-8">
                            <header class="sec-header wow fadeInUp" data-wow-duration="1.5s" >
                                <h2>خدمات </h2>
                            </header>
                            <div class="news-slider-5 owl-carousel wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                                <div class="item">
                                    <article class="news-item-4 style2">
                                        <figure>
                                            <img src="images/news-3/2.png" class="img-fluid">
                                        </figure>
                                        <div class="caption">
                                            <h3>
                                                <a href="">الاحتلال يحتجز الحافلات المتوجهة إلى مهرجان أريحا</a>
                                            </h3>
                                            <div class="meta">                                        
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
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="item">
                                    <article class="news-item-4 style2">
                                        <figure>
                                            <img src="images/news-3/2.png" class="img-fluid">
                                        </figure>
                                        <div class="caption">
                                            <h3>
                                                <a href="">الاحتلال يحتجز الحافلات المتوجهة إلى مهرجان أريحا</a>
                                            </h3>
                                            <div class="meta">                                        
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
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="item">
                                    <article class="news-item-4 style2">
                                        <figure>
                                            <img src="images/news-3/2.png" class="img-fluid">
                                        </figure>
                                        <div class="caption">
                                            <h3>
                                                <a href="">الاحتلال يحتجز الحافلات المتوجهة إلى مهرجان أريحا</a>
                                            </h3>
                                            <div class="meta">                                        
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
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="item">
                                    <article class="news-item-4 style2">
                                        <figure>
                                            <img src="images/news-3/2.png" class="img-fluid">
                                        </figure>
                                        <div class="caption">
                                            <h3>
                                                <a href="">الاحتلال يحتجز الحافلات المتوجهة إلى مهرجان أريحا</a>
                                            </h3>
                                            <div class="meta">                                        
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
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="adv-420-sec wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.5s">
                                <a href="">
                                    <img src="images/adv-420.png" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- news-section-5 -->

            <!-- news-slider-3-section -->
            <section class="news-slider-3-section">
                <header class="sec-header wow fadeInUp" data-wow-duration="1.5s">
                    <h2>دوز يسأل</h2>
                </header>
                <div class="content-body wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <div class="news-slider-3 owl-carousel">
                        <div class="item"  style="width:677px">
                            <article class="news-item-3">
                                <figure>
                                    <img src="images/news-3/4.png" class="img-fluid">
                                </figure>
                                <div class="caption orange">
                                    <h3>ما هو رئيك بالاجرءات الطبية  المتخذه لمكافحة كرونا؟</h3>
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
                        </div>
                        <div class="item" style="width:322px">
                            <article class="news-item-4">
                                <figure>
                                    <img src="images/news-3/5.png" class="img-fluid">
                                </figure>
                                <div class="caption">
                                    <h3>
                                        <a href="">هل ستتغير اجراءتك الوقائية بموضوع كرونا؟</a>
                                    </h3>
                                    <div class="meta">                                        
                                        <div class="share-sec">
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
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="item" style="width:322px">
                            <article class="news-item-4">
                                <figure>
                                    <img src="images/news-3/6.png" class="img-fluid">
                                </figure>
                                <div class="caption">
                                    <h3><a href="">رئي المواطنين وحالة الأسواق في ظل كرونا؟</a></h3>
                                    <div class="meta">                                        
                                        <div class="share-sec">
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
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="item" style="width:322px">
                            <article class="news-item-4">
                                <figure>
                                    <img src="images/news-3/5.png" class="img-fluid">
                                </figure>
                                <div class="caption">
                                    <h3>
                                        <a href="">هل ستتغير اجراءتك الوقائية بموضوع كرونا؟</a>
                                    </h3>
                                    <div class="meta">                                        
                                        <div class="share-sec">
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
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="item" style="width:322px">
                            <article class="news-item-4">
                                <figure>
                                    <img src="images/news-3/6.png" class="img-fluid">
                                </figure>
                                <div class="caption">
                                    <h3><a href="">رئي المواطنين وحالة الأسواق في ظل كرونا؟</a></h3>
                                    <div class="meta">                                        
                                        <div class="share-sec">
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
                                    </div>
                                </div>
                            </article>
                        </div>
                   
                    </div>
                </div>
            </section>
            <!-- news-slider-3-section -->

            <!-- news-section-6 -->
            <section class="news-section-6">
                <header class="sec-header wow fadeInUp" data-wow-duration="1.5s">
                    <h2>شباب وجامعة</h2>
                </header>
                <div class="content-body wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <div class="news-slider-6 owl-carousel">
                        <div class="item">
                            <article class="news-item-6">
                                <figure>
                                    <a href="">
                                        <img src="images/news-6/1.png" class="img-fluid">
                                    </a>
                                </figure>
                                <div class="caption">
                                    <h3><a href="">فعالية في كلية مسقط - نابلس</a></h3>
                                    <div class="meta">                                        
                                        <div class="share-sec">
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
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="item">
                            <article class="news-item-6">
                                <figure>
                                    <a href="">
                                        <img src="images/news-6/2.png" class="img-fluid">
                                    </a>
                                </figure>
                                <div class="caption">
                                    <h3><a href="">حفل تخرج طلاب الفوج العاشر لجامعة النجاح </a></h3>
                                    <div class="meta">                                        
                                        <div class="share-sec">
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
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="item">
                            <article class="news-item-6">
                                <figure>
                                    <a href="">
                                        <img src="images/news-6/3.png" class="img-fluid">
                                    </a>
                                </figure>
                                <div class="caption">
                                    <h3><a href="">مناقشة رسالة ماجستير في جامعة القدس المفتوحة</a></h3>
                                    <div class="meta">                                        
                                        <div class="share-sec">
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
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="item">
                            <article class="news-item-6">
                                <figure>
                                    <a href="">
                                        <img src="images/news-6/4.png" class="img-fluid">
                                    </a>
                                </figure>
                                <div class="caption">
                                    <h3><a href="">مناقشة رسالة ماجستير في جامعة القدس المفتوحة</a></h3>
                                    <div class="meta">                                        
                                        <div class="share-sec">
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
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="item">
                            <article class="news-item-6">
                                <figure>
                                    <a href="">
                                        <img src="images/news-6/5.png" class="img-fluid">
                                    </a>
                                </figure>
                                <div class="caption">
                                    <h3><a href="">فعالية في كلية مسقط - نابلس</a></h3>
                                    <div class="meta">                                        
                                        <div class="share-sec">
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
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="item">
                            <article class="news-item-6">
                                <figure>
                                    <a href="">
                                        <img src="images/news-6/1.png" class="img-fluid">
                                    </a>
                                </figure>
                                <div class="caption">
                                    <h3><a href="">فعالية في كلية مسقط - نابلس</a></h3>
                                    <div class="meta">                                        
                                        <div class="share-sec">
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
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
            <!-- news-section-6 -->

            <!-- four-advr-section -->
            <section class="four-advr-section  wow fadeInUp" data-wow-duration="1.5s">
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
            </section>
            <!-- four-advr-section -->

            <!-- news-section-7 ( sport )--> 
            <section class="news-section-7">
                <header class="sec-header wow fadeInUp" data-wow-duration="1.5s">
                    <h2>رياضة </h2>
                </header>
                <div class="news-slider-7 owl-carousel wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <div class="item">
                        <article class="news-item-4 style2">
                            <figure>
                                <a href="">
                                    <img src="images/news-7/1.png" class="img-fluid">
                                </a>
                            </figure>
                            <div class="caption">
                                <h3>
                                    <a href="">أنواع متعددة لريضات كرة القدم</a>
                                </h3>
                                <div class="meta">                                        
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
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="item">
                        <article class="news-item-4 style2">
                            <figure>
                                <img src="images/news-7/2.png" class="img-fluid">
                            </figure>
                            <div class="caption">
                                <h3>
                                    <a href="">افضل 7 تمارين للحفاظ علي رشاقتك وجسمك خلال اليوم</a>
                                </h3>
                                <div class="meta">                                        
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
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="item">
                        <article class="news-item-4 style2">
                            <figure>
                                <img src="images/news-7/3.png" class="img-fluid">
                            </figure>
                            <div class="caption">
                                <h3>
                                    <a href="">الرياضة الصباحية تعزز المناعة في الانسان وتجعله يتمتع بيوم جميل</a>
                                </h3>
                                <div class="meta">                                        
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
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="item">
                        <article class="news-item-4 style2">
                            <figure>
                                <img src="images/news-7/4.png" class="img-fluid">
                            </figure>
                            <div class="caption">
                                <h3>
                                    <a href="">فوز منتخب نابلس ببطولة الجري</a>
                                </h3>
                                <div class="meta">                                        
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
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="item">
                        <article class="news-item-4 style2">
                            <figure>
                                <img src="images/news-7/5.png" class="img-fluid">
                            </figure>
                            <div class="caption">
                                <h3>
                                    <a href="">رئي المواطنين وحالة الأسواق في ظل كرونا؟</a>
                                </h3>
                                <div class="meta">                                        
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
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
            <!-- news-section-7 -->

            <!-- news-section-7 ( art )--> 
            <section class="news-section-7">
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
                                <div class="meta">                                        
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
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="item">
                        <article class="news-item-4 style2">
                            <figure>
                                <img src="images/news-7/7.png" class="img-fluid">
                            </figure>
                            <div class="caption">
                                <h3>
                                    <a href="">استعراض التراثا الفلسطيني من خلال فعاليات في رام الله </a>
                                </h3>
                                <div class="meta">                                        
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
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="item">
                        <article class="news-item-4 style2">
                            <figure>
                                <img src="images/news-7/8.png" class="img-fluid">
                            </figure>
                            <div class="caption">
                                <h3>
                                    <a href="">استعراض التراثا الفلسطيني من خلال فعاليات في رام الله </a>
                                </h3>
                                <div class="meta">                                        
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
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="item">
                        <article class="news-item-4 style2">
                            <figure>
                                <img src="images/news-7/9.png" class="img-fluid">
                            </figure>
                            <div class="caption">
                                <h3>
                                    <a href="">استعراض التراثا الفلسطيني من خلال فعاليات في رام الله </a>
                                </h3>
                                <div class="meta">                                        
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
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="item">
                        <article class="news-item-4 style2">
                            <figure>
                                <img src="images/news-7/10.png" class="img-fluid">
                            </figure>
                            <div class="caption">
                                <h3>
                                    <a href="">استعراض التراثا الفلسطيني من خلال فعاليات في رام الله </a>
                                </h3>
                                <div class="meta">                                        
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
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
            <!-- news-section-7 -->

            <!-- news-section-7 ( society )--> 
            <section class="news-section-7">
                <header class="sec-header wow fadeInUp" data-wow-duration="1.5s">
                    <h2>مجتمع</h2>
                </header>
                <div class="news-slider-7 owl-carousel wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <div class="item">
                        <article class="news-item-4 style2">
                            <figure>
                                <a href="">
                                    <img src="images/news-7/11.png" class="img-fluid">
                                </a>
                            </figure>
                            <div class="caption">
                                <h3>
                                    <a href="">طولكم ر- اطلاق مباردة احنا معكم </a>
                                </h3>
                                <div class="meta">                                        
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
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="item">
                        <article class="news-item-4 style2">
                            <figure>
                                <img src="images/news-7/12.png" class="img-fluid">
                            </figure>
                            <div class="caption">
                                <h3>
                                    <a href="">مبادة لتعزيز ثقافة التكافل الاجتماعي الفلسطيني في محاظفة نابلس</a>
                                </h3>
                                <div class="meta">                                        
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
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="item">
                        <article class="news-item-4 style2">
                            <figure>
                                <img src="images/news-7/13.png" class="img-fluid">
                            </figure>
                            <div class="caption">
                                <h3>
                                    <a href="">طولكم ر- اطلاق مباردة احنا معكم </a>
                                </h3>
                                <div class="meta">                                        
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
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="item">
                        <article class="news-item-4 style2">
                            <figure>
                                <img src="images/news-7/14.png" class="img-fluid">
                            </figure>
                            <div class="caption">
                                <h3>
                                    <a href="">مبادة لتعزيز ثقافة التكافل الاجتماعي الفلسطيني في محاظفة نابلس</a>
                                </h3>
                                <div class="meta">                                        
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
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="item">
                        <article class="news-item-4 style2">
                            <figure>
                                <img src="images/news-7/15.png" class="img-fluid">
                            </figure>
                            <div class="caption">
                                <h3>
                                    <a href="">طولكم ر- اطلاق مباردة احنا معكم </a>
                                </h3>
                                <div class="meta">                                        
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
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
            <!-- news-section-7 -->

            <!-- news-section-8 -->
            <section class="news-section-8">
                <header class="sec-header wow fadeInUp" data-wow-duration="1.5s">
                    <h2>مسؤول بحكي</h2>
                </header>
                <div class="news-slider-8 owl-carousel wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <div class="item">
                        <article class="news-item-8">
                            <a href="" class="media">
                                <figure>
                                    <img src="images/news-8/1.png">
                                </figure>
                                <div class="media-body">
                                    <h3>مسؤال العلاقات الطلابية في جامعة نابلس</h3>
                                </div>
                            </a>
                        </article>
                        <article class="news-item-8">
                            <a href="" class="media">
                                <figure>
                                    <img src="images/news-8/2.png">
                                </figure>
                                <div class="media-body">
                                    <h3>المراة الفلسطينية ودورها في تحدي صفقة القرن</h3>
                                </div>
                            </a>
                        </article>
                    </div>
                    <div class="item">
                        <article class="news-item-8">
                            <a href="" class="media">
                                <figure>
                                    <img src="images/news-8/3.png">
                                </figure>
                                <div class="media-body">
                                    <h3>الأردن يبحث إمكانية تفعيل السياحة العلاجية في ظل كورونا</h3>
                                </div>
                            </a>
                        </article>
                        <article class="news-item-8">
                            <a href="" class="media">
                                <figure>
                                    <img src="images/news-8/4.png">
                                </figure>
                                <div class="media-body">
                                    <h3>إدارة النفايات في نابلس في ظل جاحة كرونا</h3>
                                </div>
                            </a>
                        </article>
                    </div>
                    <div class="item">
                        <article class="news-item-8">
                            <a href="" class="media">
                                <figure>
                                    <img src="images/news-8/3.png">
                                </figure>
                                <div class="media-body">
                                    <h3>الأردن يبحث إمكانية تفعيل السياحة العلاجية في ظل كورونا</h3>
                                </div>
                            </a>
                        </article>
                        <article class="news-item-8">
                            <a href="" class="media">
                                <figure>
                                    <img src="images/news-8/4.png">
                                </figure>
                                <div class="media-body">
                                    <h3>إدارة النفايات في نابلس في ظل جاحة كرونا</h3>
                                </div>
                            </a>
                        </article>
                    </div>
                </div>
            </section>
            <!-- news-section-8 -->

            <!-- news-section-9 -->
            <section class="news-section-9">
                <header class="sec-header wow fadeInUp" data-wow-duration="1.5s">
                    <h2>منوعات</h2>
                </header>
                <div class="news-slider-9 owl-carousel wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <div class="item">
                        <article class="news-item-9">
                            <a href="">
                                <figure>
                                    <img src="images/news-9/1.png">
                                </figure>
                                <h3>بيض  البط له فوائد  صحية كثيرة لكنه لا يخلوا من الاضرار ايضا</h3>
                            </a>
                        </article>
                    </div>
                    <div class="item">
                        <article class="news-item-9">
                            <a href="">
                                <figure>
                                    <img src="images/news-9/2.png">
                                </figure>
                                <h3>عادات تمنعك من الحصول علي القوام المثالي عليك التحرر منها</h3>
                            </a>
                        </article>
                    </div>
                    <div class="item">
                        <article class="news-item-9">
                            <a href="">
                                <figure>
                                    <img src="images/news-9/3.png">
                                </figure>
                                <h3>فوائد البطيخ في فضل الصيف </h3>
                            </a>
                        </article>
                    </div>
                    <div class="item">
                        <article class="news-item-9">
                            <a href="">
                                <figure>
                                    <img src="images/news-9/4.png">
                                </figure>
                                <h3>فوائد البطيخ في فضل الصيف </h3>
                            </a>
                        </article>
                    </div>
                </div>
            </section>
            <!-- news-section-9 -->

            <!-- news-section-7 ( art )--> 
            <section class="news-section-7">
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
                                <div class="meta">                                        
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
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="item">
                        <article class="news-item-4 style2">
                            <figure>
                                <img src="images/news-7/7.png" class="img-fluid">
                            </figure>
                            <div class="caption">
                                <h3>
                                    <a href="">استعراض التراثا الفلسطيني من خلال فعاليات في رام الله </a>
                                </h3>
                                <div class="meta">                                        
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
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="item">
                        <article class="news-item-4 style2">
                            <figure>
                                <img src="images/news-7/8.png" class="img-fluid">
                            </figure>
                            <div class="caption">
                                <h3>
                                    <a href="">استعراض التراثا الفلسطيني من خلال فعاليات في رام الله </a>
                                </h3>
                                <div class="meta">                                        
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
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="item">
                        <article class="news-item-4 style2">
                            <figure>
                                <img src="images/news-7/9.png" class="img-fluid">
                            </figure>
                            <div class="caption">
                                <h3>
                                    <a href="">استعراض التراثا الفلسطيني من خلال فعاليات في رام الله </a>
                                </h3>
                                <div class="meta">                                        
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
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="item">
                        <article class="news-item-4 style2">
                            <figure>
                                <img src="images/news-7/10.png" class="img-fluid">
                            </figure>
                            <div class="caption">
                                <h3>
                                    <a href="">استعراض التراثا الفلسطيني من خلال فعاليات في رام الله </a>
                                </h3>
                                <div class="meta">                                        
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
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
            <!-- news-section-7 -->

            <!-- news-section-10 -->
            <section class="news-section-10">
                <header class="sec-header wow fadeInUp" data-wow-duration="1.5s">
                    <h2>اقتصاد</h2>
                </header>
                <div class="news-slider-10 owl-carousel wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <div class="item">
                        <article class="news-item-10">
                            <a href="">
                                <figure>
                                    <img src="images/news-10/1.png">
                                </figure>
                                <h3>الاقتصادي الفلسطيني وتطورات الوضع في ظل كرونا</h3>
                            </a>
                        </article>                       
                    </div>
                    <div class="item">
                         <article class="news-item-10">
                            <a href="">
                                <figure>
                                    <img src="images/news-10/2.png">
                                </figure>
                                <h3>انهيار الأسهم العالمية بسبب كرونا</h3>
                            </a>
                        </article>                        
                    </div>
                    <div class="item">
                        <article class="news-item-10">
                            <a href="">
                                <figure>
                                    <img src="images/news-10/3.png">
                                </figure>
                                <h3>وزارة العمل انخفاض نسبة أجور العمال في قطاع غزة </h3>
                            </a>
                        </article>                        
                    </div>
                    <div class="item">
                        <article class="news-item-10">
                            <a href="">
                                <figure>
                                    <img src="images/news-10/4.png">
                                </figure>
                                <h3>الاحتلال يحتجز الحافلات المتوجهة إلى مهرجان أريحا</h3>
                            </a>
                        </article>                        
                    </div>
                    <div class="item">
                        <article class="news-item-10">
                            <a href="">
                                <figure>
                                    <img src="images/news-10/5.png">
                                </figure>
                                <h3>الاحتلال يحتجز الحافلات المتوجهة إلى مهرجان أريحا</h3>
                            </a>
                        </article>
                    </div>

                </div>
            </section>
            <!-- news-section-9 -->

            <!-- advr-full-section -->
            <div class="advr-full-section text-center wow fadeInUp">
                <div class="container">
                    <a href="">
                        <img src="images/advr-full.png">
                    </a>
                </div>
            </div>
            <!-- advr-full-section -->

        </div>

        

        <!-- main-footer -->
        <footer class="main-footer">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="f-logo">
                            <a href="">
                                <img src="images/logo.svg">
                            </a>
                        </div>
                        <div class="f-quick-links">
                            <div class="d-flex">
                                <ul class="list-unstyled flex-grow-1">
                                    <li><a href="">الرئيسية </a></li>
                                    <li><a href="">مجتمع</a></li>
                                    <li><a href="">رياضة</a></li>
                                    <li><a href="">فن وثافة</a></li>
                                </ul>
                                <ul class="list-unstyled flex-grow-1">
                                    <li><a href="">اقتصاد</a></li>
                                    <li><a href="">منوعات</a></li>
                                    <li><a href="">مسؤل بحكي</a></li>
                                    <li><a href="">معرض الصور</a></li>
                                </ul>
                                <ul class="list-unstyled flex-grow-1">
                                    <li><a href="">شباب وجامعة</a></li>
                                    <li><a href="">خدمات دوز</a></li>
                                    <li><a href="">من نحن</a></li>
                                    <li><a href="">اتصل بنا</a></li>
                                </ul>                            
                            </div>
                        </div>
                        <div class="f-social">
                            <a href="" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="" target="_blank"><i class="fab fa-youtube"></i></a>
                            <a href="" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="" target="_blank"><i class="fab fa-facebook"></i></a>
                        </div>
                        <div class="copyright">
                          جميع الحقوق محفوظة اجيال  © 2020
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

        <script src="{{asset('assets/js/wow.min.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
        <!-- <script type='text/javascript' src='https://cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js'></script> -->
        <script src="https://cdn.jsdelivr.net/npm/jquery.marquee@1.5.0/jquery.marquee.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script type="text/javascript">
            $('.marquee-news-list').marquee();

            // $('.datepicker').datepicker({
            //     language: "ar"
            // });
          
            var daysArray = [
                            {
                              "date": "2020-8-09",
                              "content": '<a href="https://www.dooz.ps/p/149549">وقفة احتجاجية لأصحاب قطاع المناسبات </a>'
                            },
                            {
                              "date": "2020-8-10",
                              "content": '<a href="https://www.dooz.ps/p/149660">نابلس.. وقفة تضامنية صامتة مع لبنان</a>'
                            },
                            {
                              "date": "2020-8-11",
                              "content": '<a href="https://www.dooz.ps/p/149668">يوم طبي مجاني في فرعون</a>'
                            }
                        ];
           
            $('#where-is-go-datepiker').datepicker({
              templates:{
                  leftArrow: '<i class="fas fa-angle-double-right"></i>',
                  rightArrow: '<i class="fas fa-angle-double-left"></i>',
              },
              todayHighlight: true,
              beforeShowDay: function(date){
                calender_date = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+('0'+date.getDate()).slice(-2);

                
                var search_index = $.grep(daysArray, function(e){ return e.date == calender_date; });
               
                if (search_index.length > 0) {
                    return {
                        classes: 'has-content', 
                        content: '<span>'+date.getDate()+'</span><div class="content">'+search_index[0].content+'</div><span class="date">'+calender_date+'</span>'
                    };
                }else{
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
        </script>

	</body>
</html>