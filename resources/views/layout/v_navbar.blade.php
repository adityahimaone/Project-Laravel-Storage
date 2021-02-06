<nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="height: 57px;color: rgb(0,0,0);background: linear-gradient(96deg, #480ca8 -8%, #560bad 39%, #7209b7 98%), #e63946;">
    <div class="container"><a class="navbar-brand" href="#" style="color: rgb(255,255,255);">Laravel</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div
            class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link {{request()->is('/') ? 'active' : ''}} " href="/" style="color: rgb(255,255,255);">Home</a></li>
                <li class="nav-item"><a class="nav-link {{request()->is('article') ? 'active' : ''}} " href="/article" style="color: rgb(255,255,255);">Article</a></li>
                <li class="nav-item"><a class="nav-link {{request()->is('about') ? 'active' : ''}} " href="/about" style="color: rgb(255,255,255);">About</a></li>
            </ul><span class="navbar-text actions"> <a class="btn btn-light action-button" role="button" href="#" style="color: rgb(255,255,255);background: #3a0ca3;box-shadow: 0px 0px 6px 1px;">Login</a></span></div>
    </div>
</nav>