<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('titlepage')</title>
        <base href="{{asset('/')}}">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        {{-- <link rel="apple-touch-icon" href="apple-touch-icon.png"> --}}
        <!-- Place favicon.ico in the root directory -->
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic|Noto+Serif:400,700,400italic|Montserrat:400,700"> -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/featherlight.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/responsive.css">
        <script src="js/modernizr-2.8.3.min.js"></script>
        
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->


        <header>
            {{-- <div class="top-news">
                   <div class="container-fluid">
                        <div class="row">
                           <div class="col-md-3 dark-gray-bg text-right">
                               <h5 class="text-uppercase white text-bold">BREAKING NEWS</h5>
                           </div>
                           <div class="col-md-9 light-gray-bg">
                                <div class="top-news-slide">
                                    <div class="item">
                                       <p class="e-light-gray text-uppercase">Apple boosts iMac screen resolution, lowers price of top-end 27-in. machine by 8%</p>
                                   </div>
                                   <div class="item">
                                       <p class="e-light-gray text-uppercase">Apple boosts iMac screen resolution, lowers price of top-end 27-in. machine by 8%</p>
                                   </div>
                                   <div class="item">
                                       <p class="e-light-gray text-uppercase">Apple boosts iMac screen resolution, lowers price of top-end 27-in. machine by 8%</p>
                                   </div>
                                </div>
                           </div>
                       </div>
                   </div>
               </div> --}}

               <div class="main-head">
                   <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3 text-right">
                               <h1 class="logo"><span class="hidden">NEWS</span><img src="img/logo.png" alt=""></h1>
                           </div>
                           <div class="col-md-9 dark-gray-bg no-padding">
                               <div class="add-area text-center">
                                   <img class="img-responsive" src="" alt="">
                               </div>
                                   <nav class="navbar navbar-default no-mb">
                                          <div class="navbar-header">
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                              <span class="sr-only">Toggle navigation</span>
                                              <span class="icon-bar"></span>
                                              <span class="icon-bar"></span>
                                              <span class="icon-bar"></span>
                                            </button>
                                          </div>
                                          @include ("menu")
                                          <!--/.nav-collapse -->
                                  </nav>
                           </div>
                        </div>
                   </div>
               </div>
        </header>
        
        @yield('noidungchinh')
        
        <footer>
            <div class="upperfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">  
                            <div class="fbt">   
                                <h3 class="white text-uppercase text-bold hr-b mt-30"> Về Chúng Tôi</h3>
                                <p class="mt-40 f-gray">Tin tức luôn được cập nhật mới nhất, hot nhất.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">  
                            @include("baiganday")
                        </div>
                        <div class="col-md-4 col-sm-6">  
                            <div class="fbt">   
                                <h3 class="white text-uppercase text-bold hr-b mt-30"> Nguồn Cung Cấp Dữ Liệu</h3>
                                <div class="twitter-feed mt-50">
                                    <div class="col-md-1 col-xs-2">
                                        <i class="fa fa-twitter"></i>
                                    </div>
                                    <div class="col-md-11 col-xs-10">
                                        <h4 class="text-uppercase white">Có một giấc mơ và chúng tôi chỉ biết bây giờ chúng tôi sẽ <span> @ JAMES ANderson</span></h4>
                                        <h6 class="title text-uppercase white mt-10">1 Giờ</h6>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="twitter-feed mt-20">
                                    <div class="col-md-1 col-xs-2">
                                        <i class="fa fa-twitter"></i>
                                    </div>
                                    <div class="col-md-11 col-xs-10">
                                        <h4 class="text-uppercase white">Có một giấc mơ và chúng tôi chỉ biết bây giờ chúng tôi sẽ <span> @ Micheal hosting</span></h4>
                                        <h6 class="title text-uppercase white mt-10">1 Giờ</h6>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="twitter-feed mt-20">
                                    <div class="col-md-1 col-xs-2">
                                        <i class="fa fa-twitter"></i>
                                    </div>
                                    <div class="col-md-11 col-xs-10">
                                        <h4 class="text-uppercase white">Có một giấc mơ và chúng tôi chỉ biết bây giờ chúng tôi sẽ <span> @ chris evans </span></h4>
                                        <h6 class="title text-uppercase white mt-10">1 Giờ</h6>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-70">
                        <div class="col-md-6 col-sm-6">  
                            <div class="fbt">   
                                <h3 class="white text-uppercase text-bold hr-b mt-30"> Kết Nối Với Chúng Tôi</h3>
                                <p class="mt-40 f-gray">Liên hệ với chúng tôi qua các nền tảng</p>
                                <div class="f-social mt-20">
                                    <a class="mt-10" href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                    <a class="mt-10" href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                    <a class="mt-10" href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                    <a class="mt-10" href="#"><i class="fa fa-instagram fa-lg"></i></a>
                                    <a class="mt-10" href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                    <a class="mt-10" href="#"><i class="fa fa-tumblr fa-lg"></i></a>
                                    <a class="mt-10" href="#"><i class="fa fa-github fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                        @include('tags')
                    </div>
                </div>
            </div>
            <div class="lowerfooter">
                
                <div class="row">
                    <div class="col-md-10 v-d-bg col-md-offset-2">
                        <div class="col-md-8 col-sm-8"><img src="img/logo-f.png" alt=""></div>
                        <div class="col-md-4"><p class="white"> 2021 Laravel Đỗ Xuân Phương - Trần Việt Linh </p></div>
                    </div>
                </div>
            </div>
        </footer>


        
        
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
        <script>window.jQuery || document.write('<script src="js/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="js/featherlight.js"></script>
        <script src="js/jquery.vimeo.api.min.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
