@extends('layout.v_template')
@section('title','Laravel Ku')

@section('content')
<div class="highlight-phone" style="background: #560bad;height: 426px;">
    <div class="container">
        <div class="row">
            <div class="col-md-8" style="height: 328px;">
                <div class="intro" style="height: 275px;">
                    <h2 style="color: rgb(254,254,254);">Selamat Datang di NNN</h2>
                    <p style="color: rgb(214,214,214);margin: 2px;margin-bottom: 11px;margin-top: 14px;">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. Aliqua sed justo ligula.</p><a class="btn btn-primary" role="button" href="#" style="padding: 15px;margin: 30px;margin-left: 0px;">Start Tour</a></div>
            </div>
            <div class="col-sm-4">
                <div class="d-none d-md-block phone-mockup"><img class="device" src="assets/img/phone.svg">
                    <div class="screen"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
        <div class="owl-carousel owl-theme">
            <div class="item"><img src="{{asset('assets/img/slider1.jpg')}}"></div>
            <div class="item"><img src="{{asset('assets/img/slider1.jpg')}}"></div>
            <div class="item"><img src="{{asset('assets/img/slider1.jpg')}}"></div>
        </div>
        
</div>
<div class="article-list">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">Latest Articles</h2>
            <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
        </div>
        <div class="row articles">
            <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="{{ asset('assets/img/desk.jpg') }}"></a>
                <h3 class="name">Article Title</h3>
                <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a></div>
            <div
                class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="{{ asset('assets/img/building.jpg') }}"></a>
                <h3 class="name">Article Title</h3>
                <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a></div>
        <div
            class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="{{ asset('assets/img/loft.jpg') }}"></a>
            <h3 class="name">Article Title</h3>
            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a></div>
</div>
</div>
</div>
<div class="features-boxed" style="background: linear-gradient(180deg, #4cc9f0, #4361ee 100%), #4cc9f0;margin-top: 16px;">
    <div class="container">
        <div class="intro">
            <h2 class="text-center" style="color: rgb(255,255,255);">Features </h2>
            <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.</p>
        </div>
        <div class="row justify-content-center features">
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-map-marker icon"></i>
                    <h3 class="name">Works everywhere</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a class="learn-more" href="#">Learn more »</a></div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-clock-o icon"></i>
                    <h3 class="name">Always available</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a class="learn-more" href="#">Learn more »</a></div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-list-alt icon"></i>
                    <h3 class="name">Customizable </h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a class="learn-more" href="#">Learn more »</a></div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-leaf icon"></i>
                    <h3 class="name">Organic </h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a class="learn-more" href="#">Learn more »</a></div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-plane icon"></i>
                    <h3 class="name">Fast </h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a class="learn-more" href="#">Learn more »</a></div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-phone icon"></i>
                    <h3 class="name">Mobile-first</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a class="learn-more" href="#">Learn more »</a></div>
            </div>
        </div>
    </div>
</div>
<div class="footer-basic" style="background: #4361ee;">
    <footer>
        <div class="social"><a href="#"><i class="icon ion-social-instagram" style="color: rgb(255,255,255);"></i></a><a href="#"><i class="icon ion-social-snapchat" style="color: rgb(255,255,255);"></i></a><a href="#"><i class="icon ion-social-twitter" style="color: rgb(255,255,255);"></i></a>
            <a
                href="#" style="color: rgb(255,255,255);"><i class="icon ion-social-facebook"></i></a>
        </div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#" style="color: rgb(255,255,255);">Home</a></li>
            <li class="list-inline-item"><a href="#" style="color: rgb(255,255,255);">Article</a></li>
            <li class="list-inline-item"><a href="#" style="color: rgb(255,255,255);">About</a></li>
            <li class="list-inline-item"><a href="#" style="color: rgb(255,255,255);">Terms</a></li>
            <li class="list-inline-item"><a href="#" style="color: rgb(255,255,255);">Privacy Policy</a></li>
        </ul>
        <p class="copyright">Laravel © 2021</p>
    </footer>
</div>
<div></div>
<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
    items:1,
    loop:true,
    margin:10,
    autoHeight:true,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[5000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})
</script>
@endsection