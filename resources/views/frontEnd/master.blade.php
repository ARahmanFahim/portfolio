<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAHIM</title>
    <!----- favicon Part ----->
    <link rel="icon" href="{{asset('/')}}front/images/Fahimfooter_pic.jpg" style=" border-radius: 70px">
    {{--    <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/')}}front/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}front/css/jquery.rprogessbar.min.css">
    <link rel="stylesheet" href="{{asset('/')}}front/css/slick.css">
    <link rel="stylesheet" href="../../unpkg.com/aos%403.0.0-beta.6/dist/aos.css" />
    <link rel="stylesheet" href="{{asset('/')}}front/css/style.css">
    <link rel="stylesheet" href="{{asset('/')}}front/css/media.css">
</head>
<body>
<!----- Navbar Part Start ----->
@include('frontEnd.include.header')
<!----- Navbar Part End ----->

@yield('content')

<!----- Contact Part Start ----->
<section id="contact">
    <div class="contact-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-head">
                        <span class="subtitle">CONTACT</span>
                        <h2>Contact With Me</h2>
                    </div>
                </div>
            </div>
            <div class="contact-item">
                <div class="row">
                    <div class="col-lg-6">
                        @foreach($settings as $item)
                        <div class="contact-main">
                            <div class="contact-content">
                                <div class="contact-img">
                                    <img src="{{asset($item->image)}}" alt="contact1" class="w-100 img-fluid">
                                </div>
                                <div class="contact-text">
                                    <div class="contact-category-info">
                                        <div class="contact-category-list">
                                            <h4></h4>
                                            <span>{{$item->name}}</span>
                                            <!-- <p>I am available for freelance work. Connect with me via and call in to my account.</p> -->
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>{{$item->designation}}</p>
                                        <div class="con-tact">
                                            <span class="phone">Phone: <a href="#">{{$item->number}}</a></span>
                                        </div>
                                        <div class="con-tact">
                                            <span class="mail">Email: <a href="#">{{$item->email}}</a></span>
                                        </div>
                                    </div>

                                    <div class="contact-socila">
                                        <span class="subtitle">FIND WITH ME</span>
                                        <ul class="contact-social-icon d-flex">
                                            <li class="facebook"><a href="{{$item->facebook_link}}"><i class="fa-brands fa-facebook" aria-hidden="true"></i></a></li>
                                            <li class="instagram"><a href="{{$item->twitter_link}}"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a></li>
                                            <li class="linkedin"><a href="{{$item->insta_link}}"> <i class="fa-brands fa-square-instagram" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="col-lg-6">
                        <div class="contact-main-form">
                            <form class="needs-validation" action="{{route('create-contact')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="contact-main-f">
                                            <label for="name">Your Name</label>
                                            <input type="text" name="name"  id="name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-main-f">
                                            <label for="name">PHONE NUMBER</label>
                                            <input type="text" name="number"  id="number" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contact-main-f">
                                            <label for="email">
                                                EMAIL</label>
                                            <input type="email" name="email"  id="email" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contact-main-f">
                                            <label for="subject">
                                                subject</label>
                                            <input type="text" name="subject"  id="subject" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contact-main-f">
                                            <label for="message">
                                                Your Message</label>
                                            <textarea type="text" name="message"  id="message" cols="30" row="10" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button  type="submit" id="submit">
                                            <span>SEND MESSAGE</span>
                                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
</section>
<!----- Contact Part End ----->


<!---------TOP-UP   Part Start --------->
<div class="top-up-button">
    <i class="fa fa-arrow-up" aria-hidden="true"></i>
</div>
<!---------TOP-UP  Part End --------->

@include('frontEnd.include.footer')
<!----- Script link start ----->
<script src="{{asset('/')}}front/js/jquery-1.12.4.min.js"></script>
<script src="{{asset('/')}}front/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}front/js/typed.min.js"></script>
<script src="{{asset('/')}}front/js/slick.min.js"></script>
<script src="{{asset('/')}}front/js/jQuery.rProgressbar.min.js"></script>
<script src="{{asset('/')}}front/js/jquery.waypoints.min.js"></script>
<script src="{{asset('/')}}front/js/mixitup.min.js"></script>
<script src="../../unpkg.com/aos%403.0.0-beta.6/dist/aos.js"></script>
<script src="{{asset('/')}}front/js/jbvalidator.min.js"></script>
<script src="{{asset('/')}}front/js/script.js"></script>
</body>

</html>
