<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Nerds Academy</title>

    <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
     <link href="/css/style.css" rel="stylesheet"> 

        
</head>
<body>

  <style> 
        


        
        .logoimg{
          cursor: pointer;
          float: left ;
          margin: 7px;
          width:60px
          
        }
        
        .websiteName{
            float: left ;
            font-family: Nunito,sans-serif;
            cursor: pointer;     
            font-size: 17px;
            display: inline-block;
            margin: 14px 0px;
            color: #000;
        }

        .closeuser,.closeuser>a{
            display:none;
        }
        .openuser{
            cursor: pointer;
        }
        .openuser:hover .closeuser>a {
            display: block;
        }       
        .openuser:hover .closeuser{
            display:flex;
            align-items: center;
            justify-content: center;
        }

        .blk{
            color: #000;
        }
        .navmajors{
            display: inline-block;
            padding:5px;
        }

        .navlogout{
            background-color: #fff;
            position:absolute;
            top:0px;
            right:0px;
            height:100%;
            width:100%
        }

        @media (min-width: 1px) and (max-width: 850px){
            .websiteName{
                display: none;
            }

            .navhide{
                display: none;
            }
        }

 </style>
        
        
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




                        
                        



        <main>
            @yield('content')
        </main>


        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>




</body>
</html>
