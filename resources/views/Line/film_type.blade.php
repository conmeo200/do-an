@extends('Line.master')
@section('content')
      <!-- Breadcrumb Begin -->
      <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./categories.html">Categories</a>
                        <span>Romance</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="anime__details__content">
                @foreach ($film_type as $phim )
                <div class="row">
                    <div class="col-lg-3">
                        <div class="anime__details__pic set-bg" data-setbg="source/img/IMG/{{$phim->image}}">
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3>{{$phim->TenPhim}}</h3>
                            </div>
                            <div class="anime__details__rating">
                                <div class="rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                </div>
                                <span>1.029 Votes</span>
                            </div>
                            <p>{{$phim->NoiDung}}</p>
                            <div class="anime__details__title">
                                <h3>xuat chieu</h3>
                            </div>
                            
                            @foreach ($TG as $xc)
                                <div class="product__item__text">
                                    <a href="/type_loai/{{$phim->ID}}/chair/{{$xc->SoPhong}}"><button type="button" class="btn btn-outline-warning">{{$xc->TG}}</button></a><br>
                                </div> 
                            @endforeach 
                                                                                                                                    
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <!-- Anime Section End -->
@endsection