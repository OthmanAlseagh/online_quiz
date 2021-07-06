
@extends('lyout.top_menu')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Teachers List</div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>E-mail</th>
                                    <th>Level</th>
                                    <th>Subject</th>
                                    <th>Role</th>
                                    <th>Activation</th>
                                    
                                </tr>
                            </thead>
                         
                            <tbody>
                      
                               @foreach($role_users as $role)
                                    @if($role->role_id  ===2)
                               
                                 
                                        @foreach($users as $user)
                                            @if($user->id==$role->user_id)
                                                <tr>
                                                    <th scope="row">{{ $user->id }}</th>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>
                                

                                                        @foreach($level as $levels)
                                                            @if($levels->user_id  === $user->id)
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
                                                        @foreach($level_subject as $levels_subjects)
                                                            @if($levels_subjects->subject_id === $levels->id) 
                                                                    @if($levels_subjects->subject_id==1)
                                                                        <div>Admin</div>
                                                                    @endif
                                                                    @if($levels_subjects->subject_id==2)
                                                                        <div>Tetchr</div>
                                                                    @endif
                                                                    @if($levels_subjects->subject_id==3)
                                                                        <div>Student</div>
                                                                    @endif
                                                            @endif
                                                        @endforeach         
                                                    </td>

                                                    <td>
                                                       
                                                        @foreach($role_users as $user_role)
                                                            @if($user_role->user_id === $user->id)        
                                                                            @if($user_role->role_id==1)
                                                                            <div>Admin</div>
                                                                            @endif
                                                                            @if($user_role->role_id==2)
                                                                            <div>Tetchr</div>
                                                                            @endif
                                                                            @if($user_role->role_id==3)
                                                                            <div>Student</div>
                                                                            @endif
                                                                    </form>
                                                    </td>  
                                        
                                                    <td>
                                                        @foreach($activate as $activation)
                                                            @if($activation->user_id === $user->id)
                                                                        @if($activation->completed==0)
                                                                            <div>Not activate</div>
                                                                        @endif
                                                                        @if($activation->completed==1)
                                                                            <div>activate</div>
                                                                        @endif
                                                    </td>

                                                    <td> <a href="delete\{{$user->id}}\delete"   class="btn btn-danger    pull-right">حذف</a>
                                                    </td>

                                                    <td> <a href="/admin/{{$user->id}}/{{$activation->id}}/edit"   class="btn btn-primary    pull-right">تعديل</a>
                                           
                                              
                                             

                                                            @endif
                                                        @endforeach
                                                            
                                                            @endif
                                                        @endforeach
                                            @endif
                                        @endforeach
                                    
                               
                                    @endif
                                @endforeach
                                                    </td>
                                                    <td>
                                                       <a href="/addTeatcher" class="btn btn-success pull-right" >اضافة مدرس</a>
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