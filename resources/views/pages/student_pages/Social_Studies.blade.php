@extends('lyout.page_master')


@section('content')
<form action="/Social_Studies" method="post">
		{{csrf_field()}}
		<br>
			<span><label class="subject">{{ ($social_studies->subject_name) }}</label></span>
        
@foreach($social_studies_quiz as $ss_quiz)
	@if($ss_quiz->end_time>$ss_quiz->start_time)
		
					<label class="quiz">{{($ss_quiz->quiz_name)}}</label>
			
		

	        <div class="contener">
	            @foreach($social_studies_question as $ss_qes)
			@if($ss_qes->quizzes_id === $ss_quiz->id)
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
                  <div class="input input-group-lg">
                  <textarea  class="form-control" name="questions" value="{{ ($ss_qes->id) }}" rows="3">{{ ($ss_qes->question) }}</textarea>
                  <input type="hidden" name="q_id" value="{{ $ss_qes->id }}">
                  

                  </div>
                </div>
              </div>
            </div>

              <br>
            <div class="contener1">
            @foreach($social_studies_choice1 as $ss_cho)
            @if($ss_cho->questions_id==$ss_qes->id)
              <div class="row">
          <div class="input-group">
                <div class="col-lg-3 ">
                  <div class="input-group input-group-lg">
                    <span class="lableans" name="correct_answer">
  <label for="corcho" >{{ ($ss_qes->correct_choice) }}</label><input type="radio" id="corcho" name="choices" value="{{ ($ss_qes->correct_choice) }}">
                @if($ss_qes->correct_choice)
      
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

  <label for="cho1" >{{ ($ss_cho->choice1)}}</label><input type="radio" id="cho1" name="choices" value="{{ ($ss_cho->choice1)}}">


                      </span>
                    </div>
                </div>
                <div class="col-lg-3 ">
                  <div class="input-group input-group-lg">
                    <span class="lableans" name="correct_answer">

  <label for="cho2" >{{ ($ss_cho->choice2)}}</label><input type="radio" id="cho2" name="choices" value="{{ ($ss_cho->choice2)}}">

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