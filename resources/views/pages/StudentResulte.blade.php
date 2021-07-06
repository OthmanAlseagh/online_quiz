@extends('lyout.master')


@section('content')
<br>
			<span><label class="subject">{{ ($user->name) }}</label></span>
			
<table class="table">
	  <thead class="thead-default">
	    <tr>
	      <th scope="row">الدرجة</th>
	      <th scope="row">السؤال</th>
	      <th scope="row">اسم الاختبار</th>
	      <th scope="row">اسم المادة</th>
	    </tr>
	  </thead>
	  <tbody>

	  @foreach($subject as $subjects )
	    @foreach($quiz as $quizzes)
	   @foreach($question as $questions)
	     @foreach($answer as $answers)
	  @if($answers->questions_id==$questions->id && $answers->users_id==$user->id && $answers->mark==1 && $questions->quizzes_id==$quizzes->id && $quizzes->subjects_id==$subjects->id)
	     
	  

	    <tr>
	      <td>{{$mark=$answers->mark+9}}</td>
	      <td>{{$questions->question}}</td>
	      <td>{{$quizzes->quiz_name}}</td>
	      <td>{{$subjects->subject_name}}</td>
	    </tr>
	   
	   @endif
       @endforeach
	   @endforeach
	   @endforeach
	   @endforeach
	     
	</tbody>
</table>
@endsection