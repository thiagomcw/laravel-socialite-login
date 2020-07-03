<?php

namespace App\Services;

use App\User;
use Laravel\Socialite\Two\User as SocialUser;

class SocialLoginService
{
    /**
     * @var SocialUser
     */
    private $socialUser;

    /**
     * @var string
     */
    private $driver;

    /**
     * SocialLoginService constructor.
     * @param SocialUser $socialUser
     * @param string $driver
     */
    public function __construct(SocialUser $socialUser, string $driver)
    {
        $this->socialUser = $socialUser;
        $this->driver = $driver;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model
     */
    public function persistData()
    {
        return User::query()
            ->updateOrCreate(
                ['email' => $this->socialUser->email],
                $this->defineUserData()
            );
    }

    /**
     * @return array
     */
    private function defineUserData()
    {
        return [
            'name'                => $this->socialUser->name,
            'avatar'              => $this->socialUser->avatar,
            'email'               => $this->socialUser->email,
            $this->driver . '_id' => $this->socialUser->id,
        ];
    }
}
