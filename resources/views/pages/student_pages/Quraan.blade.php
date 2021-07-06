@extends('lyout.page_master')


@section('content')
<form action="/Quraan" method="post">
		{{csrf_field()}}
		<br>
			<span><label class="subject">{{ ($quraan->subject_name) }}</label></span>
        
@foreach($quraan_quiz as $ar_quiz)
	@if($qr_quiz->end_time>$qr_quiz->start_time)
		
					<label class="quiz">{{($qr_quiz->quiz_name)}}</label>
			
		

	        <div class="contener">
	            @foreach($quraan_question as $qr_qes)
			@if($qr_qes->quizzes_id === $qr_quiz->id)
              <div class="row">
                <div class="col-lg-8 col-md-6 col-sm-12 col-xs-6">
                  <div class="input input-group-lg">
                  <textarea  class="form-control" name="questions" value="{{ ($qr_qes->id) }}" rows="3">{{ ($qr_qes->question) }}</textarea>
                  <input type="hidden" name="q_id" value="{{ $qr_qes->id }}">
                  

                  </div>
                </div>
              </div>
            </div>

              <br>
            <div class="contener1">
            @foreach($quraan_choice1 as $qr_cho)
            @if($qr_cho->questions_id==$qr_qes->id)
              <div class="row">
          <div class="input-group">
                <div class="col-lg-3 ">
                  <div class="input-group input-group-lg">
                    <span class="lableans" name="correct_answer">
  <label for="corcho" >{{ ($qr_qes->correct_choice) }}</label><input type="radio" id="corcho" name="choices" value="{{ ($qr_qes->correct_choice) }}">
                @if($qr_qes->correct_choice)
      
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

  <label for="cho1" >{{ ($qr_cho->choice1)}}</label><input type="radio" id="cho1" name="choices" value="{{ ($qr_cho->choice1)}}">


                      </span>
                    </div>
                </div>
                <div class="col-lg-3 ">
                  <div class="input-group input-group-lg">
                    <span class="lableans" name="correct_answer">

  <label for="cho2" >{{ ($qr_cho->choice2)}}</label><input type="radio" id="cho2" name="choices" value="{{ ($qr_cho->choice2)}}">

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