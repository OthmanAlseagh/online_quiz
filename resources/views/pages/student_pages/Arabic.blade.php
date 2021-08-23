@extends('layout.page_master')


@section('content')
<form action="/Arabic" method="post">
		{{csrf_field()}}
		<br>
			<span><label class="subject">{{ ($arabic->subject_name) }}</label></span>
        
@foreach($arabic_quiz as $ar_quiz)
	@if($ar_quiz->end_time>$ar_quiz->start_time)
		
					<label class="quiz">{{($ar_quiz->quiz_name)}}</label>
			
		

              @foreach($arabic_question as $ar_qes)
      @if($ar_qes->quizzes_id === $ar_quiz->id)
	        <div class="contener">
              <div class="row">
                <div class="col-lg-8 col-md-6 col-sm-12 col-xs-6">
                  <div class="input input-group-lg">
                  <textarea  class="form-control" name="questions" value="{{ ($ar_qes->id) }}" rows="3">{{ ($ar_qes->question) }}</textarea>
                  <input type="hidden" name="q_id" value="{{ $ar_qes->id }}">
                  

                  </div>
                </div>
              </div>
            </div>

              <br>
            <div class="contener1">
            @foreach($arabic_choice1 as $ar_cho)
            @if($ar_cho->questions_id==$ar_qes->id)
              <div class="row">
          <div class="input-group">
                <div class="col-lg-3 ">
                  <div class="input-group input-group-lg">
                    <span class="lableans" name="correct_answer">
  <label for="corcho" >{{ ($ar_qes->correct_choice) }}</label><input type="radio" id="corcho" name="choices" value="{{ ($ar_qes->correct_choice) }}">
      
                  <input type="hidden" name="correct" value="1">
                  
                      </span>
                  </div>
                 </div> 

                <div class="col-lg-3 ">
                    <div class="input-group input-group-lg">
                      <span class="lableans" name="correct_answer">

  <label for="cho1" >{{ ($ar_cho->choice1)}}</label><input type="radio" id="cho1" name="choices" value="{{ ($ar_cho->choice1)}}">


                      </span>
                    </div>
                </div>
                <div class="col-lg-3 ">
                  <div class="input-group input-group-lg">
                    <span class="lableans" name="correct_answer">

  <label for="cho2" >{{ ($ar_cho->choice2)}}</label><input type="radio" id="cho2" name="choices" value="{{ ($ar_cho->choice2)}}">

                      </span>
                  </div>
                </div>
                 
                <button class="btn btn-primary" type="submit">حفظ</button>
              </div>
              <br>
            </div>
            </div>
  
        @endif
        @endforeach
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