<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>TeatcherPage</title>
	<link rel="stylesheet" href='css1/bootstrap.min.css'>
	<link rel="stylesheet" href='css1/Teacher.css'>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/responod.min.js"></script>
	</head>
	<body>
		<header>
			
		</header>
		
			<ul class="nav nav-pills">
		  	   <li> 
		  	   		<form action="/logout" method="POST" id="logout-form">
		                        {{ csrf_field() }}
		                 <a  class="btn btn-primary" href="#" role="button" onclick="document.getElementById('logout-form').submit()"><i class="fa fa-btn fa-sign-out">تسجيل الخروج</a>
		            </form>
		        </li>
		                      
		  	   <li><a class="btn btn-primary" href="{{ url('/marktetcherQ') }}" role="button">الصفحة الشخصية</a></li>
		  	   <li><a class="btn btn-primary" href="{{ url('/teacher') }}" role="button">الرئيسية</a></li>
			</ul>
		

        @yield('contento')
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>

	