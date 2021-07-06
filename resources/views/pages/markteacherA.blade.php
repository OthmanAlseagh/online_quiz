<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>SepcialTeatcher</title>
		<link rel="stylesheet" href='css/bootstrap.min.css'>
		<link rel="stylesheet" href='css1/Teacher.css'>
		<script src="js/html5shiv.min.js"></script>
		<script src="js/responod.min.js"></script>
		<script type="text/javascript">
	  		function printlayer(layer){
	  			var generator=window.open(",'name,");
	  			var layertext=document.getElementById(layer);
	  			generator.document.write(layertext.innerHTML.replace("Print Me"));
	  			generator.document.close();
	  			generator.print();
	  			generator.close();
	  		}
			

		</script>
	</head>
	<body>
		<header>
			
		</header>
			<ul class="nav nav-pills">

		  		<li><a id="print" onclick="javascript:printlayer('div-id-name')" class="btn btn-primary" href="#" role="button">طباعة</a></li>
		  		<li><a class="btn btn-primary" href="{{ url('/teacher') }}" role="button">الرئيسية</a></li>
			</ul>
			<br>
			<div class="container" id="div-id-name">
			<h3>علامات الطلاب لمادة اللغة العربية</h3>
			<table class="table">
			  <thead class="thead-default">
			    <tr>
			      
			      <th scope="row">علامة السؤال </th>
			      <th scope="row">رقم الواجب</th>
			      <th scope="row">اسم الطالب</th>
			      <th scope="row">الرقم</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			    @foreach($role_users as $role)
                            @if($role->role_id  ===3)
                            @foreach($users as $user)
                             @foreach($levels_users as $level)
                             @foreach($subjects as $subj)
                             @foreach($levels_subjects as $subjlev)
                             @if($user->id==$role->user_id && $user->id==$level->user_id && $subjlev->level_id==$subj->id)
                             <td></td>
                             <td></td>
                              <td>{{ $user->name }}</td>
                              <td scope="row">{{ $user->id }}</td>
                              
                       
			    </tr>
                            @endif
                                @endforeach
                                @endforeach
                                @endforeach
                          @endforeach
                          @endif
                        @endforeach
			</tbody>
		</table>
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		</div>
		<footer>
			
		<p> حقوق الملكية محفوظة لدى فريق العمل @Copyright </p>

		</footer>


	</body>
</html>