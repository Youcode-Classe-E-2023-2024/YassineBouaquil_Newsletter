<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use http\Env\Request;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;
use Mockery\Generator\StringManipulation\Pass\Pass;

class ForgotPasswordController extends Controller
{
    public function forgotPassword(Request $request){

        $request->validate(['email' => 'required|email']);
        $status =Password::sendResentLink(
            $request->only('email')
        );
        return $status === Password::RESET_LINK_SENT
            ? response()->json(['message' => __($status)], 200)
            : response()->json(['message' => __($status)], 400);

    }

    use SendsPasswordResetEmails;
}
