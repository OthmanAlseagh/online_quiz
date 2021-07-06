@extends('lyout.top_menu')
 
@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Regiester</h3>
				</div>
				<div class="panel-body">
					<form action="/addSudent" method="post">
						{{csrf_field()}}
						<div class="form-group ">
							<div class="input-group">

								<span class="input-group-addon"><i class= "fa fa-user"></i></span>
								<input type="text" name="name" class="form-control" placeholder="full_name">
							</div>
						</div> 

						<div class="form-group ">
							<div class="input-group">

								<span class="input-group-addon"><i class= "fa fa-envelope"></i></span>
								<input type="email" name="email" class="form-control" placeholder="example@example.com">
							</div>
						</div>
						<div class="form-group" >
                            <div class="input-group">
                              <span  class="input-group-addon"><i class="fa-user"></i></span>
                                <select class="form-control" name="level">
									@foreach($levels as $level)
										<option value="{{($level->id)}}">{{($level->level_name)}}</option> 
									@endforeach 
                                </select>
                             </div>
                                        
                        </div>					  
						<div class="form-group ">
							<div class="input-group">

								<span class="input-group-addon"><i class= "fa fa-lock"></i></span>
								<input type="password" name="password" class="form-control" placeholder="password">
							</div>
						</div>  
						
						<div class="form-group ">
							
							<input type="submit" value="Regiester" class="btn btn-success pull-right">

								
						</div>
						    
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection
