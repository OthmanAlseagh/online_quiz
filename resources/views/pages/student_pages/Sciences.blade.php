@extends('lyout.page_master')


@section('content')
<form action="/Sciences" method="post">
		{{csrf_field()}}
		<br>
			<span><label class="subject">{{ ($sciences->subject_name) }}</label></span>
        
@foreach($sciences_quiz as $sc_quiz)
	@if($sc_quiz->end_time>$sc_quiz->start_time)
		
					<label class="quiz">{{($sc_quiz->quiz_name)}}</label>
			
		

	        <div class="contener">
	            @foreach($sciences_question as $sc_qes)
			@if($sc_qes->quizzes_id === $sc_quiz->id)
              <div class="row">
                <div class="col-lg-8 col-md-6 col-sm-12 col-xs-6">
                  <div class="input input-group-lg">
                  <textarea  class="form-control" name="questions" value="{{ ($sc_qes->id) }}" rows="3">{{ ($sc_qes->question) }}</textarea>
                  <input type="hidden" name="q_id" value="{{ $sc_qes->id }}">
                  

                  </div>
                </div>
              </div>
            </div>

              <br>
            <div class="contener1">
            @foreach($sciences_choice1 as $sc_cho)
            @if($sc_cho->questions_id==$sc_qes->id)
              <div class="row">
          <div class="input-group">
                <div class="col-lg-3 ">
                  <div class="input-group input-group-lg">
                    <span class="lableans" name="correct_answer">
  <label for="corcho" >{{ ($sc_qes->correct_choice) }}</label><input type="radio" id="corcho" name="choices" value="{{ ($sc_qes->correct_choice) }}">
                @if($sc_qes->correct_choice)
      
                  <input type="hidden" name="correct" value="1">
                  @else
                  <input type="hidden" name="correct" value="0">
                  @endif
                      </span>
                  </div>
                 </div> 

                <div class="col-lg-3 ">
                    <div class="input-group input-group-lg">
                      <span class="lableans" name="correct_answer">

  <label for="cho1" >{{ ($sc_cho->choice1)}}</label><input type="radio" id="cho1" name="choices" value="{{ ($sc_cho->choice1)}}">


                      </span>
                    </div>
                </div>
                <div class="col-lg-3 ">
                  <div class="input-group input-group-lg">
                    <span class="lableans" name="correct_answer">

  <label for="cho2" >{{ ($sc_cho->choice2)}}</label><input type="radio" id="cho2" name="choices" value="{{ ($sc_cho->choice2)}}">

                      </span>
                  </div>
                </div>
                 
                <button class="btn btn-primary" type="submit">حفظ</button>
              </div>
              <br>
        @endif
        @endforeach
            </div>
            </div>
  
    @endif
  @endforeach
                <br>

	
	@endif
@endforeach
</form>
	   
	<footer>
    <p> حقوق الملكية محفوظة لدى فريق العلمل@Copyrithe</p>
  </footer>


      


@endsection