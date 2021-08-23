<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Resources\LoginResource;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login(Requests\LoginRequest $request)
    {

        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {

            $user = Auth::user();

            if (!$user->hasVerifiedEmail()) {

                return sendError(__('auth.verify_email'), null, 403);

            }

            $tokenResult = $user->createToken('online');
            $token = $tokenResult->token;

            if ($request->remember_me) {
                $token->expires_at = Carbon::now()->addWeeks(1);
            }

            $token->save();

            $user['tokenResult'] = $tokenResult;

            return sendResponse('success', LoginResource::make($user));
        }

        return sendError(__('auth.failed'), null, 401);

    }


    public function logout()
    {
        $token = auth()->guard('api')->user()->token();
        $token->revoke();

        return sendResponse(__('auth.logout'), null, 204);
    }
}
