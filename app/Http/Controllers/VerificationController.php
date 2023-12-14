<?php

// app/Http/Controllers/VerificationController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Verified;

class VerificationController extends Controller
{
    public function show()
    {
        // Hiển thị trang thông báo xác nhận email
        return view('emails.verify-email');
    }

    public function verify(Request $request, $id, $hash)
    {
        // Xác nhận email và đăng nhập người dùng
        $user = \App\Models\User::find($id);

        if ($user && !$user->hasVerifiedEmail() && hash_equals((string) $hash, sha1($user->getEmailForVerification()))) {
            $user->markEmailAsVerified();
            event(new Verified($user));
        }

        return redirect('/');
    }

    public function resend(Request $request)
    {
        // Gửi lại email xác nhận
        $request->user()->sendEmailVerificationNotification();

        return back()->with('resent', true);
    }
}
