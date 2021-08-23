@extends('layout.top_menu')

@section('content')
<link rel="stylesheet" type="text/css" href="css/login.css">

<div class="modal-dialog modal-sm">
			<form action="/login" method="post">
						{{csrf_field()}}
						@if(session('error'))
						<div class="alert alert-danger">
							{{session('error')}}

						</div>
						@endif
				<div class="modal-content">
					<h3> الدخول الى الحساب </h3>		
					<div class="modal-header">
					    <input type="email" name="email" class="form-control" placeholder="البريد الالكتروني" required>
					</div>
					<div class="modal-header">
					    <input type="password" name="password" class="form-control" placeholder="كلمة المرور" required>
					</div>	
						
					<div class="modal-footer">
                                 تذكرني
					   	<input type="checkbox" name="remmber_me" >
					
						<div id="fr"><a href="/forgot-password">هل نسيت كلمة المرور</div>
						
						<span id="btn" ><input type="submit" class="btn btn-success "  value="تسجيل الدخول" >
						</span>
			    	</div>
			    </div>
			</form>
</div>
@endsection


