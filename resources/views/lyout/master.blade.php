<!DOCTYPE html>
<html>
      <head>
             <meta charset="utf-8" http-equiv="X-UA-Compatible" content="IE=edge">
             <meta name="description" content="website description" />
             <meta http-equiv="X-UA-Compatible" content="IE=edge">
             <meta name="viewport" content="width=device-width,initial-scale=1">
             <title>StudentPage</title>
             <link rel="stylesheet" href='css/bootstrap.css'>
             <link rel="stylesheet" href='css1/Student.css'>
             <script src="js/html5shiv.min.js"></script>
             <script src="js/responod.min.js"></script>
             <meta name="keywords" content="website keywords, website keywords" />
             <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
      </head>
  <body>
      <header>
      </header>
    <ul class="nav nav-pills">
       <li>
        <form action="/logout" method="POST" id="logout-form">
            {{ csrf_field() }}
            <a  class="btn btn-primary" href="#" onclick="document.getElementById('logout-form').submit()"><i class="fa fa-btn fa-sign-out">تسجيل الخروج</a>
        </form>
       <li><a class="btn btn-primary" href="{{ url('/StudentResulte') }}" role="button">النتائج</a></li>
       <li><a class="btn btn-primary" href="{{ url('/student') }}" role="button">الرئيسية</a></li>

    </ul>
                
                      
        @yield('content')
      
          <script src="js/jquery-1.11.1.min.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script type="text/javascript" src="js/jquery.js"></script>
          <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
          <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
          <script type="text/javascript" src="js/jquery.kwicks-1.5.1.js"></script>
          <script type="text/javascript">
            $(document).ready(function() {
              $('#images').kwicks({
                max : 600,
                spacing : 2
              });
              $('ul.sf-menu').sooperfish();
            });
          </script>
  </body>
</html>
