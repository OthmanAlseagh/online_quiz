@extends('lyout.page_master')


@section('content')
<form action="/Islamic" method="post">
		{{csrf_field()}}
		<br>
			<span><label class="subject">{{ ($islamic->subject_name) }}</label></span>
        
@foreach($islamic_quiz as $is_quiz)
	@if($is_quiz->end_time>$is_quiz->start_time)
		
					<label class="quiz">{{($is_quiz->quiz_name)}}</label>
			
		

	        <div class="contener">
	            @foreach($islamic_question as $is_qes)
			@if($is_qes->quizzes_id === $is_quiz->id)
              <div class="row">
                <div class="col-lg-8 col-md-6 col-sm-12 col-xs-6">
                  <div class="input input-group-lg">
                  <textarea  class="form-control" name="questions" value="{{ ($is_qes->id) }}" rows="3">{{ ($is_qes->question) }}</textarea>
                  <input type="hidden" name="q_id" value="{{ $is_qes->id }}">
                  

                  </div>
                </div>
              </div>
            </div>

              <br>
            <div class="contener1">
            @foreach($islamic_choice1 as $is_cho)
            @if($is_cho->questions_id==$is_qes->id)
              <div class="row">
          <div class="input-group">
                <div class="col-lg-3 ">
                  <div class="input-group input-group-lg">
                    <span class="lableans" name="correct_answer">
  <label for="corcho" >{{ ($is_qes->correct_choice) }}</label><input type="radio" id="corcho" name="choices" value="{{ ($is_qes->correct_choice) }}">
                @if($ar_qes->correct_choice)
      
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

  <label for="cho1" >{{ ($is_cho->choice1)}}</label><input type="radio" id="cho1" name="choices" value="{{ ($is_cho->choice1)}}">


                      </span>
                    </div>
                </div>
                <div class="col-lg-3 ">
                  <div class="input-group input-group-lg">
                    <span class="lableans" name="correct_answer">

  <label for="cho2" >{{ ($is_cho->choice2)}}</label><input type="radio" id="cho2" name="choices" value="{{ ($is_cho->choice2)}}">

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