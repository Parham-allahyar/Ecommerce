<?php

namespace Authorization\Repositories;

use App\User;

class UserRepository
{

    public function getUserByUserId($id)
    {
        return User::where('user_id', $id)
            ->get();
    }

    public function getUserByPhoneNumber($phoneNumber)
    {
        return User::where('phone_Number', $phoneNumber)
            ->first();
    }

    public function createUser($userPhone)
    {
        $data = [
            'phone_Number'  => $userPhone
        ];
        User::create($data);
    }

}
