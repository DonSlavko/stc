@extends('layout.app')

@section('content')
<div class="section section-header" id="header">
    <div class="parallax pattern-image">
        <div id="particles-js" class="responsive-background"></div>
        <div class="container">
            <div class="content">
                <img class="logo-responsive" src="{{ asset('img/logo.png') }}" alt="ST Logo">
                <h3>ST COMPANY</h3>
                <div class="separator-container">
                    <div class="separator line-separator">✻</div>
                </div>
                <h5>It's not just about ideas, it's about making ideas.</h5>
            </div>
        </div>
    </div>
    <a href="" data-toggle="tooltip" title="More about us" data-scroll="true" data-id="#whoWeAre" class="scroll-arrow hidden-xs hidden-sm">
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
                    <p class="large">ST is a dedicated group of developers whose purpose is to bring you a better web application experience. We have the simplest policy in the world, a satisfied customer is the best business strategy of all.</p>
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
                            <p>Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card add-animation animation-2">
                            <div class="icon">
                                <i class="fab fa-vuejs"></i>
                            </div>
                            <h3>Vue.js</h3>
                            <p>Vue.js features an incrementally adoptable architecture that focuses on declarative rendering and component composition.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card add-animation animation-3">
                            <div class="icon">
                                <i class="fab fa-react"></i>
                            </div>
                            <h3>React</h3>
                            <p>React makes it painless to create interactive UIs. Design simple views for each state in your application, and React will efficiently update and render just the right components when your data change.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card add-animation animation-4">
                            <div class="icon">
                                <i class="fab fa-aws"></i>
                            </div>
                            <h3>Amazon web service</h3>
                            <p>Whether you're looking for compute power, database storage, content delivery, or other functionality.</p>
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
                <p>If you think we can help you, feel free to contact us.</p>
            </div>
        </div>
        <div class="contact-form">
            <form action="{{ route('form') }}" method="POST">
                {{ csrf_field() }}
                <div class="row">
                <div class="col-md-4">
                    <div class="form-group add-animation animation-1">
                        <label for="name">Your Full Name</label>
                        <input id="name" type="text" name="full_name" value="" placeholder="John Doe" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group add-animation animation-2">
                        <label for="email">Your Email</label>
                        <input id="email" type="text" name="email" value="" placeholder="john.doe@gmail.com" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group add-animation animation-3">
                        <label for="subject">Subject</label>
                        <input id="subject" type="text" name="subject" value="" placeholder="Say hi" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group add-animation animation-1">
                        <label for="content">Message</label>
                        <textarea id="content" name="content" class="form-control" placeholder="Here you can write your text" rows="8" required></textarea>
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
