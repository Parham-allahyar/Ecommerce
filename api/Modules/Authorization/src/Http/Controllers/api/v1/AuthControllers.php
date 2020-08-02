<?php

namespace Authorization\Http\Controllers\api\v1;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class AuthController extends Controller
{

    public function login(Request $request)
    {
      //GET User Phone Number
      $phoneNumber = $request->input('phone');

      //Validation Phone Number

      //Find User

    }
    public function auth()
    {

    }

}
