<?php 
    //  $user_logged = Session::has('user_logged') ? json_decode(Session::get('user_logged'),true) : null;
    // var_dump(Auth::user());
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Anime | Template</title>
    <base href="{{asset(' ')}}"/> 
    <!-- Google Font -->
    
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Css Styles -->
    <script src="source/js/jquery-3.3.1.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script> --}}
    <link rel="stylesheet" href="source/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="source/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="source/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="source/css/plyr.css" type="text/css">
    <link rel="stylesheet" href="source/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="source/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="source/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="source/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html">
                            <img src="source/img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="/">TRANG CHỦ</a></li>
                                <li><a href="#">PHIM<span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        @foreach ($data3 as $dt)
                                        <li><a href="type_loai/{{$dt->ID}}">{{$dt->Loai}}</a></li>
                                        @endforeach                                        
                                    </ul>
                                </li>
                                <li><a href="./blog.html">KHUYẾN MÃI</a></li>
                                <li><a href="#">GIỚI THIỆU</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <div class="btn-group">
                            <a href="#" class="search-switch"><span class="icon_search"></span></a>
                            
                            @if (Auth::check())
                            <button  type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{Auth::user()->email}}
                            </button>
                                <ul class="dropdown-menu" >
                                    <li><a class="dropdown-item" href="{{url('logout')}}" style="color: black">LogOut</a></li>
                                </ul>
                            @else
                            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                TaiKhoan
                            </button>
                                <ul class="dropdown-menu" >
                                    <li><a class="dropdown-item" href="{{url('login')}}" style="color: black">Login</a></li>
                                    <li><a class="dropdown-item" href="{{url('signup')}}"style="color: black">Register</a></li>
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                <div class="hero__items set-bg" data-setbg="source/img/hero/hero-1.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Adventure</div>
                                <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                                <p>After 30 days of travel across the world...</p>
                                <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="source/img/hero/hero-1.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Adventure</div>
                                <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                                <p>After 30 days of travel across the world...</p>
                                <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="source/img/hero/hero-1.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Adventure</div>
                                <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                                <p>After 30 days of travel across the world...</p>
                                <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->