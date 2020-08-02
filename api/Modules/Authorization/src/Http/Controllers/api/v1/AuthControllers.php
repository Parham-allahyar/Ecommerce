<?php

namespace Authorization\Http\Controllers\api\v1;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Authorization\Facades\userProviderFacade;
use Illuminate\Http\Request;
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

    }
    public function auth()
    {

    }

}
