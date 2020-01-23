<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Nerds Academy</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/navbar.css" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  

    
    <div style="background-color:#fff;overflow:hidden">
    
    
    <a href="{{ url('/') }}">
        <div><img class="logoimg" src="/images/layouts/nerds.png" ></div>
        <div class="websiteName"> Nerds Academy </div>
    </a>

    
<div  style="display:flex;justify-content :center;align-items:center;height:56px;float:right;">        

@guest



<div class="navmajors"><a class="blk" href="/facilities">{{ __('Facilities') }}</a></div>
<div class="navmajors navhide"><a class="blk" href="/majors">{{ __('Majors') }}</a></div>
<div class="navmajors"><a class="blk" href="/courses">{{ __('Courses') }}</a></div>
@can('create', App\Majors::class)  
<div class="navmajors"><a class="blk" href="/users">{{ __('Users') }}</a></div>
<div class="navmajors navhide"><a class="blk" href="/comments">{{ __('Comments') }}</a></div>
@endcan
<div class="navmajors"><a class="blk" href="{{ route('login') }}">{{ __('Login') }}</a></div>
<div class="navmajors" style="padding:5px 10px">
    @if (Route::has('register'))
            <a class="blk" href="{{ route('register') }}">{{ __('Register') }}</a>
    @endif
</div>

@else
<div class="navmajors openuser " style="position:relative;text-align: center"><a class="blk"> {{ Auth::user()->username }}</a>
<div class='closeuser navlogout' >
    <a class="blk" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
</div>
</div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
    </form>

<div class="navmajors "><a class="blk" href="/facilities">{{ __('Facilities') }}</a></div>
<div class="navmajors navhide"><a class="blk" href="/majors">{{ __('Majors') }}</a></div>
<div class="navmajors"><a class="blk" href="/courses">{{ __('Courses') }}</a></div>
@can('create', App\Majors::class)  
<div class="navmajors"><a class="blk" href="/users">{{ __('Users') }}</a></div>
<div class="navmajors navhide"><a class="blk" href="/comments">{{ __('Comments') }}</a></div>
@endcan

@endguest
</div>


</div>

<div class="clearfix"></div>

    <div class="theme-container"  style="position:relative">
        <div  class="mytheme">
            <h1>The Sky Is The Limit</h1>
        </div>
    </div>
    
    <div class="what jumbotron">What are you looking for?</div>
    
    
    <div class="container">
        <div class="row">
    
          <div class="col-xs-12 col-md-4 col-lg-4">
      <a href="/coaching">
                <div>
                    <img src="/images/welcome/Coaching.png" width="100%" alt="">
                    <p class="text-center looking-at">Private Coaching  </p>
                </div>
              </a>
            </div>
    
    
          <div class="col-xs-12 col-md-4 col-lg-4">
      <a href="">
              <div>
                  <img src="/images/welcome/Lectures.png" width="100%" alt="">
                  <p class="text-center looking-at"> Study Groups</p>
              </div>
            </a>
          </div>
    

    
      <div class="col-xs-12 col-md-4 col-lg-4">
        <a href="/generalcourses">
                <div>
                    <img src="/images/welcome/Courses.png" width="100%" alt="">
                    <p class="text-center looking-at">Courses & Tutorials</p>
                </div>
              </a>
            </div>
    
        </div>
    </div>
    
    
    <div class="what jumbotron">Jordan's Universities</div>
    
    
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>                  
                      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner">
    
    
                      <div class="carousel-item ourcarousl-con active">
                        <img class="d-block w-100" width="200px" src="/images/welcome/blanck.png" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Hashemite University</h5>
                        </div>
                        <div class="ourcarousl ourcarousl1"></div>
                      </div>
                      <div class="carousel-item ourcarousl-con">
                        <img class="d-block w-100" width="100%" src="/images/welcome/blanck.png" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>German Jordanian University</h5>
                        </div>
                        <div class="ourcarousl ourcarousl2"></div>
                      </div>
                      <div class="carousel-item ourcarousl-con">
                        <img class="d-block w-100" width="100%" src="/images/welcome/blanck.png" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>University of Jordan</h5>
                        </div>
                        <div class="ourcarousl ourcarousl3"></div>
                      </div>
                      <div class="carousel-item ourcarousl-con">
                        <img class="d-block w-100" width="100%" src="/images/welcome/blanck.png" alt="Forth slide">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Philadelphia University</h5>
                        </div>
                        <div class="ourcarousl ourcarousl4"></div>
                      </div>
                      <div class="carousel-item ourcarousl-con">
                        <img class="d-block w-100" width="100%" src="/images/welcome/blanck.png" alt="Fifth slide">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>University of Jordan</h5>
                        </div>
                        <div class="ourcarousl ourcarousl5"></div>
                      </div>
                      <div class="carousel-item ourcarousl-con">
                        <img class="d-block w-100" width="100%" src="/images/welcome/blanck.png" alt="Sixth slide">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Princess Sumaya University</h5>
                        </div>
                        <div class="ourcarousl ourcarousl6"></div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
    
    
    
            <div class="col-xs-12 col-md-4">
                <div style="width:100%">
                <a href="https://hu.edu.jo/" class="one-uni" target="_blank">Hashemite University</a>
                <a href="http://www.gju.edu.jo/" class="one-uni" target="_blank">German Jordanian University</a>
                <a href="http://www.just.edu.jo" class="one-uni" target="_blank">Jordanian University for Science and Technology</a>
                <a href="http://www.philadelphia.edu.jo/" class="one-uni" target="_blank">Philadelphia University</a>
                <a href="http://ju.edu.jo" class="one-uni" target="_blank">University of Jordan</a>
                <a href="https://www.psut.edu.jo" class="one-uni" target="_blank">Princess Sumaya University</a>
            </div>
        </div>
        </div>
    </div>

</body>
</html>
