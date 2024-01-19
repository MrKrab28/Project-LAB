<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PasswordResetToken;

use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class VerificationController extends Controller
{
    public function notice()
    {
        return redirect()->route('login')->with('success', 'Berhasil membuat Akun, Silahkan Melakukan Verifikasi Email');
    }

    public function verify(Request $request)
    {
        // $request->fulfill();
        $user = User::find($request->route('id'));

        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
        }

        return redirect()->route('login')->with('success', 'Email Berhasil diverifikasi');
    }

    public function forgotPassword(){
        return view('auth.forgot-password');
    }

    public function submitForgetPasswordForm(Request $request)
    {


    $request->validate([
        'email' => 'required|email|exists:users'
    ]);

    $token = Str::random(100);
    $reset = PasswordResetToken::where('email', $request->email)->first();

    if($reset){
        $reset->delete();
    }

    $reset = new PasswordResetToken();
    $reset->email = $request->email;
    $reset->token = $token;
    $reset->created_at = now();
    $reset->save();

    Mail::send('email.reset-password',['token' => $token, 'email' => $request->email] , function ($message) use ($request) {
        $message->to($request->email);
        $message->subject('Reset Password');

    });

    return redirect()->back()->with('message', ' Cek Email Untuk Reset Password ');


    }



    public function showResetPasswordForm(Request $request)
    {
        $reset = PasswordResetToken::where('email', $request->email)->where('token', $request->token)->first();

        if($reset)
        {

            return view('auth.reset-password');
        }

        return 'token tidak valid';
    }

    public function submitResetPasswordForm(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $user->password = Hash::make($request->password);
        $user->update();

        $reset = PasswordResetToken::where('email', $user->email)->first();
        $reset->delete();

        return redirect()->route('login');
    }

}
