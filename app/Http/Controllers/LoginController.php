<?php

namespace App\Http\Controllers;

use App\Http\Requests\Login\SocialRequest;
use App\Services\SocialLoginService;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('login');
    }

    /**
     * @param SocialRequest $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function social(SocialRequest $request)
    {
        return Socialite::driver($request->get('driver'))->redirect();
    }

    /**
     * @param string $driver
     * @return \Illuminate\Http\RedirectResponse
     */
    public function callback(string $driver)
    {
        try {
            $socialUser = Socialite::driver($driver)->user();

        } catch (\Exception $exception) {
            return redirect()
                ->route('login')
                ->with('error', $exception->getMessage());
        }

        $user = (new SocialLoginService($socialUser, $driver))->persistData();

        Auth::login($user);

        return redirect()->route('home');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();

        return redirect()->route('home');
    }
}
