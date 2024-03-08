<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VerificationController extends Controller
{
    public function notice(Request $request)
    {
        return $request->user()->hasVerifiedEmail()
            ? to_route('dashboard') : view('pages.auth.verify-notice');
    }

    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();
        return to_route('dashboard')->with('swal_s', 'Berhasil memverifikasi email');

        Response::HTTP_FORBIDDEN;
    }

    public function resend(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('resent', true);
    }
}
