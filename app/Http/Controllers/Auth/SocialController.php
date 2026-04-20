<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\SocialService;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    protected $socialService;

    public function __construct(SocialService $socialService)
    {
        $this->socialService = $socialService;
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider) ->redirect();
    }

    public function handleProviderCallback($provider)
    {
        try {
            $socialUser = Socialite::driver($provider)->stateless()->user();
        } catch (\Exception $e) {
            return redirect('/')->with('error', 'Đăng nhập thất bại hoặc người dùng từ chối.');
        }

        $this->socialService->createOrLogin($socialUser, $provider);

        return redirect('/dashboard'); 
    }

    // Chức năng Đăng xuất
    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
