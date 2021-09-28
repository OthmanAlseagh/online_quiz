<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use App\Http\Resources\RegistrationResource;
use App\Models\Level;
use Illuminate\Http\Request;

//use App\Http\Requests;
use App\Models\User;
use Spatie\Permission\Models\Role;

class RegistrationController extends Controller
{

    public function register(RegistrationRequest $request)
    {

        $user_input = $request->only((new User())->getFillable());
        $user = User::create($user_input);

        $role = Role::findByName($request->type,'api');
        $user->assignRole($role);

        return sendResponse('success', RegistrationResource::make($user));
    }

    public function addTeatcher(Request $request)
    {
        $levels = DB::table('levels')->get();
        $subjects = DB::table('subjects')->get();
        return view('pages.addTeatcher', compact('levels', 'subjects'));
    }

    public function postaddTeatcher(Request $request)
    {
        $user = Sentinel::registerAndActivate($request->all());
        $role = Sentinel::findRoleBySlug('teacher');
        $role->users()->attach($user);

        $level = Level::find($request->level);
        $level->users()->attach($user);

        $subject = Subject::find($request->subject);
        $subject->levels()->attach($level);
        return redirect('/tetcher');
    }

    public function addSudent(Request $request)

    {
        $levels = DB::table('levels')->get();
        return view('pages.addSudent', compact('levels'));
    }

    public function postaddSudent(Request $request)
    {
        $user = Sentinel::registerAndActivate($request->all());
        $role = Sentinel::findRoleBySlug('student');
        $role->users()->attach($user);

        $level = Level::find($request->level);
        $level->users()->attach($user);
        return redirect('/users');
    }
}







