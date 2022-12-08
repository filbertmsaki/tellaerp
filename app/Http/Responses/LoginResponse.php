<?php

namespace App\Http\Responses;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {

        // below is the existing response
        // replace this with your own code
        // the user can be located with Auth facade
        return redirect(url()->previous());
        if(auth()->user()->hasPermission("admin-role")){
            return  to_route("admin.dashboard");
        }
       return  to_route("web.dashboard");
    }
}
