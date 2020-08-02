<?php

namespace Authorization\Http\Controllers\api\v1;

use Authorization\Facades\storeCodeFacade;
use Authorization\Facades\userProviderFacade;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Notification\Notification;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        //GET User Phone Number
        $phoneNumber = $request->input('phone');

        //Validation Phone Number

        //Find User
        $user = userProviderFacade::getUserByPhoneNumber($phoneNumber);
        if (is_null($user)) {
            userProviderFacade::createUser($phoneNumber);
            $user = userProviderFacade::getUserByPhoneNumber($phoneNumber);
        }

        //Generate Verification Code
        $code = random_int(100000, 999999);

        // Cache Verification Code
        storeCodeFacade::saveCode($code, $user->id);

        //send Code
        $notification = new Notification;
        $notification->sendsms($user->phone_Number, $code);
        return $code;
    }

    public function auth()
    {
        $receivedCode = request('code');
        $userId = storeCodeFacade::getCode($receivedCode);
        if ($userId !== null) {
            //Send Response
            $token = auth()->setTTL(7200)->tokenById($userId);
            return $token;
        } else {
            return "hi";
        }

    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
        ]);
    }

}
