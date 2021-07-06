@extends('lyout.page_master')


@section('content')
<form action="/Mathematics" method="post">
		{{csrf_field()}}
		<br>
			<span><label class="subject">{{ ($mathematics->subject_name) }}</label></span>
        
@foreach($mathematics_quiz as $ma_quiz)
	@if($ma_quiz->end_time>$ma_quiz->start_time)
		
					<label class="quiz">{{($ma_quiz->quiz_name)}}</label>
			
		

	        <div class="contener">
	            @foreach($mathematics_question as $ma_qes)
			@if($ma_qes->quizzes_id === $ma_quiz->id)
              <div class="row">
                <div class="col-lg-8 col-md-6 col-sm-12 col-xs-6">
                  <div class="input input-group-lg">
                  <textarea  class="form-control" name="questions" value="{{ ($ma_qes->id) }}" rows="3">{{ ($ma_qes->question) }}</textarea>
                  <input type="hidden" name="q_id" value="{{ $ma_qes->id }}">
                  

                  </div>
                </div>
              </div>
            </div>

              <br>
            <div class="contener1">
            @foreach($mathematics_choice1 as $ma_cho)
            @if($ma_cho->questions_id==$ma_qes->id)
              <div class="row">
          <div class="input-group">
                <div class="col-lg-3 ">
                  <div class="input-group input-group-lg">
                    <span class="lableans" name="correct_answer">
  <label for="corcho" >{{ ($ma_qes->correct_choice) }}</label><input type="radio" id="corcho" name="choices" value="{{ ($ma_qes->correct_choice) }}">
                @if($ma_qes->correct_choice)
      
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

  <label for="cho1" >{{ ($ma_cho->choice1)}}</label><input type="radio" id="cho1" name="choices" value="{{ ($ma_cho->choice1)}}">


                      </span>
                    </div>
                </div>
                <div class="col-lg-3 ">
                  <div class="input-group input-group-lg">
                    <span class="lableans" name="correct_answer">

  <label for="cho2" >{{ ($ma_cho->choice2)}}</label><input type="radio" id="cho2" name="choices" value="{{ ($ma_cho->choice2)}}">

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