<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignInRequest;
use App\Models\User;

class AuthController extends Controller
{
    
    /**
     * This method accepts both a user name and password and then validates the data after that it creates an account for the user 
     * and in the case of any issue that would make a user account not to be created it shows them a fail message
     * 
     */
    public function signUp(SignInRequest $request) {
        
        $data = $request->validated();
        $user = new User();
        $user->name = $data['username'];
        $user->email = $data['email'];

        $save = $user->save();

        if ($save) {
            return redirect()->back(201)->with("success", "Congratulation You have successfully created an account with us");
        }else {
            return redirect()->back(400)->with("fail", "An issue occured please try again later");
        }
    }

}
