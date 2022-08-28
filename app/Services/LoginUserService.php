<?php 

namespace App\Services;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

/**
 * 
 * Login user
 * 
 */
class LoginUserService {

    /**
     * Login in user
     * 
     * @param App\Http\Requests\LoginRequest $request
     * @return string  $token
     */
    public function doLogin(LoginRequest $request){
        return Auth::attempt($request->only(['username', 'password']))
            
                ?

                $request->user()->createToken(time())->plainTextToken

                :

                '';
    }
}