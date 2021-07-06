@extends('lyout.page_master')


@section('content')

<form action="/English" method="post">
		{{csrf_field()}}
		<br>
			<span><label class="subject">{{ ($english->subject_name) }}</label></span>
        
@foreach($english_quiz as $en_quiz)
	@if($en_quiz->end_time>$en_quiz->start_time)
		
					<label class="quiz">{{($en_quiz->quiz_name)}}</label>
			
		

	        <div class="contener">
	            @foreach($english_question as $en_qes)
			@if($en_qes->quizzes_id === $en_quiz->id)
              <div class="row">
                <div class="col-lg-8 col-md-6 col-sm-12 col-xs-6">
                  <div class="input input-group-lg">
                  <textarea  class="form-control" name="questions" value="{{ ($en_qes->id) }}" rows="3">{{ ($en_qes->question) }}</textarea>
                  <input type="hidden" name="q_id" value="{{ $en_qes->id }}">
                  

                  </div>
                </div>
              </div>
            </div>

              <br>
            <div class="contener1">
            @foreach($english_choice1 as $en_cho)
            @if($en_cho->questions_id==$en_qes->id)
              <div class="row">
          <div class="input-group">
                <div class="col-lg-3 ">
                  <div class="input-group input-group-lg">
                    <span class="lableans" name="correct_answer">
  <label for="corcho" >{{ ($en_qes->correct_choice) }}</label><input type="radio" id="corcho" name="choices" value="{{ ($en_qes->correct_choice) }}">
                @if($en_qes->correct_choice)
      
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

  <label for="cho1" >{{ ($en_cho->choice1)}}</label><input type="radio" id="cho1" name="choices" value="{{ ($en_cho->choice1)}}">


                      </span>
                    </div>
                </div>
                <div class="col-lg-3 ">
                  <div class="input-group input-group-lg">
                    <span class="lableans" name="correct_answer">

  <label for="cho2" >{{ ($en_cho->choice2)}}</label><input type="radio" id="cho2" name="choices" value="{{ ($en_cho->choice2)}}">

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