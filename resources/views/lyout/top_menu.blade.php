<DOCTYPE html>
<html lang="ar">

    <head>
        

        <title>Online Quiz</title>

        <link rel="stylesheet" type="text/css" href="css/login.css">
        <!-- Fonts -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/font.css">

        <!-- Styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>

        <style>
            body {
                font-family: 'Lato';
            }

            .fa-btn {
                margin-right: 6px;
            }
        </style>
    </head>
    <body id="app-layout">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">  
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    @if(Sentinel::check())
                    <ul class="nav navbar-nav navbar-right">
                      @if(Sentinel::getUser()->roles()->first()->slug=='admin')
                        <li role="presentation"><a href="{{ url('/users') }}">صفحة الطلاب</a></li>
                        <a class="navbar-brand" href="{{ url('/admin') }}">صفحة المدرسين</a>
                      @endif

                      @if(Sentinel::getUser()->roles()->first()->slug=='teacher')
                        <li role="presentation"><a href="{{ url('/teacher') }}">Teacher</a></li>
                      @endif
                    
                      @if(Sentinel::getUser()->roles()->first()->slug=='student')
                        <li role="presentation"><a href="{{ url('/student') }}">Student</a></li>
                      @endif
                    </ul>
                    @endif
                    @if(Sentinel::check())           
                    <ul class="nav navbar-nav ">
                         <li role="presentation">
                             <form action="/logout" method="POST" id="logout-form">
                               {{ csrf_field() }}  
                             <a  href="#" onclick="document.getElementById('logout-form').submit()"><i class="fa fa-btn fa-sign-out"></i>تسجيل الخروج</a>
                             </form>
                        </li>
                    </ul>
                    
                    @else    
                    <a class="navbar-brand navbar-right" href="{{ url('/home') }}">Home</a>
                        <ul class="nav navbar-nav ">
                            
                            <li role="presentation"><a href="{{ url('/register') }}">إنشاء حساب جديد</a></li>
                            <li role="presentation"><a href="{{ url('/login') }}">تسجيل الدخول</a></li>
                        </ul>
                   @endif
                </div>
            </div>
        </nav>

        @yield('content')

        <!-- JavaScripts -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    </body>
</html>
