<!DOCTYPE html>
<html>
      <head>
             <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/font.css">

        <!-- Styles -->
        <link rel="stylesheet" href="css2/bootstrap.min.css">
        {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
        <link rel="stylesheet" type="text/css" href="css2/login.css">
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
      </head>
  <body>
      <header>
      </header>
        
<div class="container">
  
    <div class="row">
        <div class="col-md-4 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">	<h3>تعديل</h3>
	<form action="update" method="POST">
		{{csrf_field()}}
		<div class="input-group">
		<table>
			
				
				
			
				<tr><td>Name<input type="text" name="name" value="{{$uedit->name}}" class="form-control" placeholder="full_name"></td> </tr>
				<tr><td>E-mail<input type="email" name="email" value="{{$uedit->email}}" class="form-control" placeholder="example@example.com"></td></tr>
				<tr><td> Activation<input type="text"  name="completed"  value="{{$activedit->completed}}" class="form-control " placeholder="Edite Activation"></td> </tr>
				
	            
	         
			
			
		</table>	
			<span class="input-group-btn">
			<button class="btn btn-primary" type="sumite">تعديل</button>	
			<a href="/admin" class="btn btn-danger">الغاء</a>	
			</span>
			</form>

		</div>

	     </div>
	  </div>
    </div>
  </div>
</div>

</body>
</html>