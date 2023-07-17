@extends('frontEnd.master')
@section('content')

    <!----- Banner Part Start ----->
    @foreach($welcome as $item)
    <section id="banner">
        <div class="banner-main-wrapper">
            <div class="container">
                <div class="row">

                    <div class="col-lg-7 col-12 col-md-6">
                        <div class="ban-left">
                            <div class="content">
                                <span class="subtitle">Welcome to my world</span>
                                <h1>Hi, I’m <span>{{$item->name}}</span></h1>
                                <div class="typing"><p class="a"> a <span class="banner_typing"></span></p></div>
                                <p class="ban-text">{{$item->description}}</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-12 col-sm-6 col-md-12">
                                    @foreach($settings as $item)
                                    <div class="socila-left">
                                        <span class="subtitle">FIND WITH ME</span>
                                        <ul class="social-icon d-flex">
                                            <li class="facebook"><a href="{{$item->facebook_link}}"><i class="fa-brands fa-facebook" aria-hidden="true"></i></a></li>
                                            <li class="instagram"><a href="{{$item->twitter_link}}"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a></li>
                                            <li class="linkedin"><a href="{{$item->insta_link}}"> <i class="fa-brands fa-square-instagram" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="col-lg-6 col-12 col-sm-6 col-md-12">
                                    <div class="socila-right">
                                        <span class="subtitle">BEST SKILL ON</span>
                                        <ul class="social-img d-flex">
                                            <li><img src="{{asset('/')}}front/images/icon1.png" alt="icon1" class="img-fluid w-100"></li>
                                            <li><img src="{{asset('/')}}front/images/icon2.png" alt="icon2" class="img-fluid w-100"></li>
                                            <li><img src="{{asset('/')}}front/images/icon3.png" alt="icon3" class="img-fluid w-100"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12 col-md-6">
                        <div class="ban-right">
                            <div class="ban-right-img">
                                <img src="{{asset($item->image)}}" alt="baner-side-img" class="img-fluid w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

        <!----- Demos Part Start ----->
        <div id="demo">
            <div class="demo">
                <a href="https://www.facebook.com/natasa.islam.934551" target="-blank">
                    <span>Demos</span>
                </a>
            </div>
        </div>
        <!----- Demos Part End ----->
    </section>
    <!----- Banner Part End ----->

    <!----- Features Part Start ----->
    <section id="feature">
        <div class="feature-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" data-aos="fade-up" data-aos-offset="200" data-aos-delay="400" data-aos-duration="500"data-aos-once="true">
                        <div class="feature-head">
                            <span class="subtitle">Features</span>
                            <h2>What I Do</h2>
                        </div>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="row">
                        @foreach($features as $features)
                        <div class="col-lg-4 col-12 col-md-6 mb-5" data-aos="fade-up" data-aos-offset="200" data-aos-delay="400" data-aos-duration="500"data-aos-once="true">
                            <div class="feature-content">
                                <div class="feature-text">
                                    <div class="icon">
                                        <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="f-text">
                                        <h4>{{$features->name}}</h4>
                                        <p>{{$features->description}}</p>
                                        <a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!----- Features Part End ----->

    <!----- Portfolio Part Start ----->
    <section id="portfolio">
        <div class="portfolio-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="portfolio-head">
                            <span class="subtitle">Visit my portfolio and keep your feedback</span>
                            <h2>My Portfolio</h2>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item">

                    <div class="row">
                        @foreach($portfolio as $item)
                        <div class="col-lg-4 col-12 col-md-6 mb-5" data-aos="fade-up" data-aos-offset="200" data-aos-delay="400" data-aos-duration="500"data-aos-once="true">
                            <div class="portfolio-main">
                                <div class="portfolio-content">
                                    <div class="portfolio-img">
                                        <img src="{{asset($item->image)}}" alt="portfolio1" class="w-100 img-fluid">
                                    </div>
                                    <div class="portfolio-text">
                                        <div class="category-info">
                                            <div class="category-list">
                                                <a href="#">{{$item->name}}</a>
                                            </div>
                                            <div class="category-icon">
                          <span><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                          600</span>
                                            </div>
                                        </div>
                                        <h4><a href="#">{{$item->description}}<i class="fa fa-arrow-right" aria-hidden="true"></i></a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!----- Portfolio Part End ----->

    <!----- Resume Part Start ----->
    <section id="resume">
        <div class="resume-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="resume-head">
{{--                            <span class="subtitle">7+ Years of Experience</span>--}}
                            <h2>My Resume</h2>
                        </div>
                    </div>
                </div>

                <div class="resume-main-wrap">
                    <div class="row">
                        @foreach($settings as $item)
                        <div class="col-lg-12 col-12  ">
                            <div class="resume-button">
                                <button class="active-mixit" type="button" class="control" data-filter=".one">Education</button>
{{--                                <button type="button" class="control" data-filter=".two">professional Skills</button>--}}
                                <button type="button" class="control" data-filter=".three">experience</button>
                                <button type="button" class="control" data-filter=".four">interview</button>
                                <button type="button" class="control" data-filter=".five" ><a href="{{$item->resume}}" target="_blank">Resume</a></button>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="mixit-up">

                    <div class="education-wrapper mix one">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="edu-content">
                                            <span class="subtitle">2017 - 2021</span>
                                            <h4>Education Quality</h4>
                                        </div>
                                    </div>
                                    @foreach($education as $item)
                                        <div class="col-lg-6 col-12">
                                            <div class="experience-list">
                                                <div class="single-list">
                                                    <div class="edu-text">
                                                        <div class="edu-head">
                                                            <div class="edu-title">
                                                                <h4>{{$item->title}}</h4>
                                                                <span>{{$item->name}}</span>
                                                                <span>{{$item->duration_time}}</span>
                                                            </div>
                                                            <div class="date">
                                                                <span>4.30/5</span>
                                                            </div>
                                                        </div>
                                                        <p>{{$item->description}}</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="row">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="education-wrapper mix three">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="edu-content">
                                            <span class="subtitle">2022 - {{date('Y')}}</span>
                                            <h4>Experience</h4>
                                        </div>
                                    </div>
                                    @foreach($experience as $item)
                                        <div class="col-lg-6 col-12">
                                            <div class="experience-list">
                                                <div class="single-list">
                                                    <div class="edu-text">
                                                        <div class="edu-head">
                                                            <div class="edu-title">
                                                                <h4>{{$item->name}}</h4>
                                                                <span>{{$item->designation}}</span>
                                                                <span>{{$item->duration_time}}</span>
                                                            </div>
{{--                                                            <div class="date">--}}
{{--                                                                <span>4.30/5</span>--}}
{{--                                                            </div>--}}
                                                        </div>
                                                        <p>{{$item->description}}</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="row">

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!----- Resume Part End ----->

    <!----- Testimonial Part Start ----->
    <section id="testimonial">
        <div class="testimonial-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="testimonial-head">
                            <span class="subtitle">WHAT CLIENTS SAY</span>
                            <h2>Testimonial</h2>
                        </div>
                    </div>
                </div>
                <div class="testimonial-main">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <div class="testimonial-main-wrapper">
                                <div class="sliader-main">
                                    @foreach($testimonial as $item)
                                    <div class="slider-item">
                                        <div class="testimonial-content">
                                            <div class="row">
                                                <div class="col-lg-5 col-12">
                                                    <div class="card-info">
                                                        <div class="card-img">
                                                            <img src="{{asset($item->image)}}" alt="testimonial1" class="w-100 img-fluid">
                                                        </div>
                                                        <div class="card-content">
                                                            <span class="subtitle">Rainbow-Themes</span>
                                                            <h3>{{$item->client_name}}</h3>
                                                            <span class="dwntitle">{{$item->testimonial_designation}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-12">
                                                    <div class="test-top">

                                                        <div class="quote-img">
                                                            <img src="{{asset('/')}}front/images/quote.png" alt="quote">
                                                        </div>
                                                        <div class="button">
                                                            <div class="btn">
                                                                <i class="fa fa-arrow-left rr" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="btn">
                                                                <i class="fa fa-arrow-right ll" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-description">
                                                        <div class="card-information">
                                                            <div class="card-text">


                                                                <div class="ratting">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </div>
                                                                <h3>{{$item->work_name}}</h3>
                                                                <span class="date">{{$item->delivery_date}}</span>
                                                            </div>
                                                            <p>{{$item->description}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----- Testimonial Part End ----->

    <!----- Blog Part Start ----->
    <section id="blog">
        <div class="blog-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-head">
                            <span class="subtitle">Visit my blog and keep your feedback</span>
                            <h2>My Blog</h2>
                        </div>
                    </div>
                </div>

                <div class="blog-item">
                    <div class="row">
                    @foreach($blog as $item )
                        <div class="col-lg-4 mb-5" data-aos="fade-up" data-aos-offset="200" data-aos-delay="400" data-aos-duration="500"data-aos-once="true">
                            <div class="blog-main">
                                <div class="blog-content">
                                    <div class="blog-img">
                                        <img src="{{asset($item->image)}}" alt="blog-01" class="w-100 img-fluid">
                                    </div>
                                    <div class="blog-text">
                                        <div class="blog-category-info">
                                            <div class="blog-category-list">
                                                <a href="#">{{$item->name}}</a>
                                            </div>
                                            <div class="blog-category-icon">
                          <span><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i></a>
                             2 min read</span>
                                            </div>
                                        </div>
                                        <h4><a href="#">{{$item->description}}<i class="fa fa-arrow-right" aria-hidden="true"></i></a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!----- Blog Part End ----->
@endsection
