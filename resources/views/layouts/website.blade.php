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

        @yield('content')

        

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
                          جميع الحقوق محفوظة dooz  © 2020
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