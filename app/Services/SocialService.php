<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SocialService
{
    public function createOrLogin($socialUser, $provider)
    {
        $email = $socialUser->getEmail() ?? $socialUser->getId() . '@facebook.com';

        // 2. Tìm user theo cái email vừa xử lý ở trên
        $user = User::where('email', $email)->first();

        if ($user) {
            $user->update([
                'provider' => $provider,
                'provider_id' => $socialUser->getId(),
                'avatar' => $socialUser->getAvatar(),
            ]);
        } else {
            $user = User::create([
                'name' => $socialUser->getName(),
                'email' => $email, // <--- Dùng biến $email đã kiểm tra
                'provider' => $provider,
                'provider_id' => $socialUser->getId(),
                'avatar' => $socialUser->getAvatar(),
                'student_id' => '23810310156', 
                'password' => bcrypt(Str::random(16)), 
            ]);
        }

        \Illuminate\Support\Facades\Auth::login($user);

        return $user;
    }
}