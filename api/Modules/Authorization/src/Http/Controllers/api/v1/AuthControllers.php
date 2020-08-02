<?php

namespace Authorization\Http\Controllers\api\v1;

use Authorization\Facades\userProviderFacade;
use Authorization\Facades\storeCodeFacade;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        //GET User Phone Number
        $phoneNumber = $request->input('phone');

        //Validation Phone Number

        //Find User
        $user = userProviderFacade::getUserByPhoneNumber($phoneNumber);
        if ($user == null) {
            userProviderFacade::createUser($phoneNumber);
            $user = userProviderFacade::getUserByPhoneNumber($phoneNumber);
        }

        //Generate Verification Code
        $code = random_int(100000, 999999);
       // Cache Verification Code
       storeCodeFacade::saveCode($code, $user->id);


    }
    public function auth()
    {

    }

}
