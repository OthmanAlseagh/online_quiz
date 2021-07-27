<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use Cartalyst\Sentinel\Roles\EloquentRole;
use Cartalyst\Sentinel\Users\EloquentUser;
use Cartalyst\Sentinel\Activations\EloquentActivation;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\User;
use App\Level;
use Sentinel;

class AdminController extends Controller
{

    public function admin()
    {

        $users = DB::table('users')->get();
        $role_users = DB::table('role_users')->get();
        $role = DB::table('roles')->get();
        $activate = DB::table('activations')->get();
        $level = DB::table('levels_users')->get();
        $level_subject = DB::table('levels_subjects')->get();
        $subject = DB::table('subjects')->get();


        return view('pages.admin', compact('users', 'role_users', 'activate', 'role', 'level', 'level_subject', 'subject'));
    }

    public function users()
    {

        $users = DB::table('users')->get();
        $role_users = DB::table('role_users')->get();
        $role = DB::table('roles')->get();
        $activate = DB::table('activations')->get();
        $level = DB::table('levels_users')->get();


        return view('pages.users', compact('users', 'role_users', 'activate', 'role', 'level'));

    }

    public function delete(User $id, Activations $role_id)
    {
        $id->delete();
        $role_id->delete();
        return back();
    }

    public function edit(Request $request, User $uedit, EloquentActivation $activedit)

    {


        return view('pages.edit', compact('uedit', 'activedit'));
    }

    public function update(Request $request, User $uid, EloquentActivation $id)
    {

        $uid->update($request->all());
        $id->update($request->all());

        //$level=User::find($request->level_id);
        // $level->levels()->update($id);
        //EloquentRole::find($role_id )->users()->updateExistingPivot($id,['role_id'=>$role_id]);
        return redirect('/admin');
    }

}
