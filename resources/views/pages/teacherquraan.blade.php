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
  	   <input type="hidden" name="sub_id" value="{{ $quraan->id }}">
  	   <li>
  	   		<form action="/logout" method="POST" id="logout-form">
                        {{ csrf_field() }}
                <a  class="btn btn-primary" href="#"  onclick="document.getElementById('logout-form').submit()">تسجيل الخروج</a>
            </form>
        </li>
  	   
  	   <li><a class="btn btn-primary" href="{{ url('/markteacherA') }}" role="button">الصفحة الشخصية</a></li>
  	   <li><a class="btn btn-primary" href="#" role="button">الرئيسية</a></li>
	</ul>
	<br>
<form action="/teacher" method="post">
     {{csrf_field()}}
	<label class="subjectname"><h4>{{$quraan->subject_name}}</h4></label>
    <input type="hidden" name="sub_id" value="{{ $quraan->id }}">
	<div class="row">
			<div class="input">
				<input type="text" name="quiz_name" class="numberQ" placeholder="رقم الواجب" required>
			</div>
			<div class="input">
				<input type="text" class="timeEnd" name="end_time" placeholder="0000-00-00" aria-describedby="sizing-addon1" required>
			</div>
			<div class="label1">
				 <span class="label label-default">وقت البداية</span>
			</div>
			<div class="input">
				<input type="text" class="timeStar" name="start_time" placeholder="0000-00-00" aria-describedby="sizing-addon1" required>
			</div>
			<div class="label2">
				 <span class="label label-default" >وقت النهاية</span>
			</div>
			<div class="button1">
				<button type="submit" class="btn btn-outline-info">حفظ</button>
			</div>

		</div>
	</form>
	<form method="post" action="/teacher1" >
		{{csrf_field()}}
		<select class="selectpicker" name="quiz" value="{{old('form-control')}}"  data-style="btn-info">
		@foreach($quiz as $quizze)
		  <option value="{{($quizze->id)}}" >{{($quizze->quiz_name)}}</option> 
	      <input type="hidden" name="q_id" value="{{ $quizze->id }}">
		  @endforeach 
		</select>
	

	<div class="contener">
		<br>
		<div class="row">
			<div class="col-lg-8 col-md-6 col-sm-12 col-xs-6">
				<div class="input input-group-lg">
				    <textarea class="form-control" name="question" rows="3" required ></textarea>
				</div>
			</div>
			<div class="btn-group btn-group-sm" role="group" aria-label="...">
				  	
				  	<button class="btn btn-primary" type="submit">إضافة السؤال</button>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-lg-3 ">
				<div class="input-group input-group-lg">
					<input type="text" class="form-control" name="correct_choice" placeholder="ألاجابة الصحيحة" aria-describedby="sizing-addon1" required>
				</div>
			</div>  
			<div class="col-lg-3 ">
				<div class="input-group input-group-lg">
					<input type="text" name="choice1" class="form-control" placeholder="ألاجابة" aria-describedby="sizing-addon1" required>
				</div>
			</div>  

			<div class="col-lg-3 ">
				<div class="input-group input-group-lg">
					<input type="text" name="choice2" class="form-control" placeholder="ألاجابة" aria-describedby="sizing-addon1" required>
				</div>
			</div>  
		</div>
	</div>
	</form>
	<table class="table">
	  <thead class="thead-default">
	    <tr>
	      <th scope="row">الاجابة</th>
	      <th scope="row">الاجابة</th>
	      <th scope="row">الاجابة الصحيحة</th>
	      <th scope="row">السؤال</th>
	      <th scope="row">الرقم</th>
	      <th></th>
	    </tr>
	  </thead>
	  <tbody>
	   @foreach($question as $questions)
	    @foreach($quiz as $quizzes)
	     @foreach($choice as $choices)
	     @if($questions->quizzes_id===$quizzes->id)
	     @if($choices->questions_id===$questions->id)
	    <tr>
	      <td>{{$questions->correct_choice}}</td>
	      <td>{{$choices->choice1}}</td>
	      <td>{{$choices->choice2}}</td>
	      <td>{{$questions->question}}</td>
	      <td>{{$quizzes->quiz_name}}</td>
	      <td>
	      	<a href="delete\{{$questions->id}}\delete" class="btn btn-danger">حدف</a>
	      </td>
	    </tr>
	   @endif
	   @endif
       @endforeach
	   @endforeach
	   @endforeach
	     
	</tbody>
</table>

<footer>
	
<p> حقوق الملكية محفوظة لدى فريق العمل @Copyright </p>

</footer>

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>