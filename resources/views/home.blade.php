@extends('layout.app')

@section('content')
<div class="section section-header" id="header">
    <div class="parallax pattern-image filter filter-color-black" data-color="black">

{{--
        <div id="particles-js" style='background-image: url("assets/img/rubik_background.jpg"); background-size: inherit'></div>
--}}
        <img alt="..." src="assets/img/rubik_background.jpg">
        <div class="container">
            <div class="content">
                <img height="120px" src="assets/img/logo.png" alt="">
                <h3>ST COMPANY</h3>
                <div class="separator-container">
                    <div class="separator line-separator">✻</div>
                </div>
                <h5>Where ideas get committed and dreams become git.</h5>
            </div>
        </div>
    </div>
    <a href="" data-scroll="true" data-id="#whoWeAre" class="scroll-arrow hidden-xs hidden-sm">
        <i class="fa fa-angle-down"></i>
    </a>
</div>

<div class="section section-we-are-1" id="whoWeAre">
    <div class="text-area">
        <div class="container">
            <div class="row">
                <div class="title add-animation">
                    <h5 class="text-gray">Little about us</h5>
                    <h2>Who we are</h2>
                    <div class="separator-container">
                        <div class="separator line-separator">✻</div>
                    </div>
                    <p class="large">ST Company is dedicated group of programmers who's purpose is to bring you better experience with web applications.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="carousel">
        <div id="section-we-are-1" class="carousel slide add-animation-stopped-1" data-interval="20000">
            <div class="carousel-inner pattern-image animate">
                <div class="item active">
                    <img alt="..." class="full-image" src="assets/img/rubik_background2.jpg">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section-we-do-2" id="workflow">
    <div class="container">
        <div class="row">
            <div class="title add-animation">
                <h5 class="text-gray">Our skills</h5>
                <h2>What we do</h2>
                <div class="separator-container">
                    <div class="separator line-separator">✻</div>
                </div>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card add-animation animation-1">
                            <div class="icon">
                                <i class="fab fa-laravel"></i>
                            </div>
                            <h3>Laravel</h3>
                            <p>We're a digital agency with our roots in graphic design.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card add-animation animation-2">
                            <div class="icon">
                                <i class="fab fa-vuejs"></i>
                            </div>
                            <h3>Vue.js</h3>
                            <p>We love making the web a better place and we love good reasons for adding to it.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card add-animation animation-3">
                            <div class="icon">
                                <i class="fab fa-react"></i>
                            </div>
                            <h3>React</h3>
                            <p>We love to create awesome products and we do everything to make them outstanding.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card add-animation animation-4">
                            <div class="icon">
                                <i class="fab fa-aws"></i>
                            </div>
                            <h3>Amazon web service</h3>
                            <p>We love to create awesome products and we do everything to make them outstanding.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section-contact-2" id="contact">
    <div class="container">
        <div class="text-area">
            <div class="title add-animation">
                <h2>Get in Touch</h2>
                <div class="separator-container">
                    <div class="separator line-separator">✻</div>
                </div>
                <p>Would you want to talk about something? Just send me your message and I will happily chat</p>
            </div>
        </div>
        <div class="contact-form">
            <form action="{{ route('form') }}" method="POST">
                {{ csrf_field() }}
                <div class="row">
                <div class="col-md-4">
                    <div class="form-group add-animation animation-1">
                        <label>Your Full Name</label>
                        <input type="text" name="full_name" value="" placeholder="John Doe" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group add-animation animation-2">
                        <label>Your Email</label>
                        <input type="text" name="email" value="" placeholder="john.doe@gmail.com" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group add-animation animation-3">
                        <label>Subject</label>
                        <input type="text" name="subject" value="" placeholder="Say hi" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group add-animation animation-1">
                        <textarea name="content" class="form-control" placeholder="Here you can write your text" rows="8"></textarea>
                    </div>
                    <div>
                        <div class="col-md-2 col-md-offset-5 col-sm-2 col-sm-offset-5">
                            <button  class="btn btn-lg btn-black btn-contact">
                                SEND
                                <i class="fa fa-paper-plane"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
