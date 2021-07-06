@extends('lyout.top_menu')

@section('content')

	
	<div class="modal-dialog modal-sm">
		<form action="/register" method="post">
			{{csrf_field()}}
				<div class="modal-content1">
					<h3> إنشاء حساب جديد </h3>
					<br>
					<div class="modal-header1"> 
						<input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder=" الاسم الرباعي" required>
					</div>
					<br>
					<div class="modal-header1"> 
						<input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder=" الإيميل" required>
					</div>
				    <br>
					<div class="modal-header1">
						<select class="form-control" name="level" value="{{old('form-control')}}" >
							@foreach($levels as $level)
								<option value="{{($level->id)}}" >{{($level->level_name)}}</option> 
							@endforeach 

                        </select> 
					</div>
					<br>
					<div class="modal-header1">
						<input type="password" name="password" class="form-control" placeholder=" كلمة المرور" required>     		  
					</div>
					<br>
					<div class="modal-header1">
						<input type="password" name="password_confirmation" class="form-control" placeholder=" إعادة كلمة المرور" required>
					</div>
				</div>
				
				<div class="modal-footer1">
					<span id="btn">
					<input type="submit" value="إنشاء" class="btn btn-success pull-right">
					</span>   
				</div>

			@if(count($errors))
				<ul>
					@foreach($errors->all() as $error)
						<li>
							{{$error}}
					@endforeach
						</li>
				</ul>
			@endif
						    
		</form>
	</div>
					
                             	
								                                   

@endsection
