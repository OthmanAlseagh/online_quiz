@extends('layout.top_menu')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                    <div class="panel-heading">Students List</div>
                    <div class="panel-body">
                      <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Level</th>
                                <th>Role</th>
                                <th>Activation</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($role_users as $role)
                            @if($role->role_id  ===3)
                       
                         
                            @foreach($users as $user)
                             @if($user->id==$role->user_id)
                          <tr>
                              <th scope="row">{{ $user->id }}</th>
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->email }}</td>
                              <td>
                                @foreach($level as $levels)
                                  @if($levels->user_id === $user->id)
                                    @if($levels->level_id==1)
                                      <div>Ethen</div>
                                    @endif
                                    @if($levels->level_id==2)
                                      <div>Seventh</div>
                                    @endif
                                    @if($levels->level_id==3)
                                      <div>Ninth</div>
                                    @endif
                                  @endif 
                                @endforeach
                             </td>
                             <td>
                              @foreach($role_users as $user_role)
                                @if($user_role->user_id === $user->id)        
                                <div class="form-group" style="margin-bottom:0px;">
                                    {{csrf_field()}}
                                         
                                      @if($user_role->role_id==1)
                                        <div>Admin</div>
                                      @endif
                                      @if($user_role->role_id==2)
                                        <div>Tetchr</div>
                                      @endif
                                      @if($user_role->role_id==3)
                                        <div>Student</div>
                                      @endif
                                    
                                </div>
                             </td>   
                             <td>
                                @foreach($activate as $activation)
                                  @if($activation->user_id === $user->id)
                                  
                                    <div class="form-group" style="margin-bottom:0px;">
                                        {{csrf_field()}}             @if($activation->completed==0)
                                          <div>Not activate</div>
                                        @endif
                                        @if($activation->completed==1)
                                          <div>activate</div>
                                        @endif
                                    </div>
                                   
                              </td>
                            <div class="col-md-4">
                              <td> 
                                <a href="delete\{{$user->id}}\delete"   class="btn btn-danger    pull-right">حذف</a>
                              </td>
                              <td>
                                <a href="/admin/{{$user->id}}/{{$activation->id}}/edit"   class="btn btn-primary    pull-right">تعديل</a>
                                      
                              </td>
                                  @endif
                                @endforeach
                                @endif
                              @endforeach
                            @endif
                          @endforeach
                          @endif
                        @endforeach
                            </div>
                                      
                              <td>
                                <a href="/addSudent" class="btn btn-success pull-right" >اضافة طالب</a>
                              </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection