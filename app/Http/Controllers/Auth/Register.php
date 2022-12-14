<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Nette\Utils\Json;

class Register extends Controller
{
    public function index(Request $request)
    {
        /**
         * check if has token in cokie if have return the dashbord view or auth view
         */

        if(Cookie::has('api_token')){
            return Redirect::route('dashboard.index');
        }

        return view('auth.register');
    }

    /**
     * Do post in API http://192.168.15.6:8000/api/auth/register and create an user in database API
     * end return view dashboard if 201 status
     * @param request get data from form auth.register 
     * @return view dashboard if status is 200 and back if erro as status
      */
    public function register(Request $request)
    {
        
        // CURL erro 7 when i try to use the localhost i have to change to ipv4 for work in windows possible solution
        // is the use virtual host for local developement
        $response = Http::asForm()->post('http://192.168.15.6:8000/api/auth/register', [
            
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password')
            
        ]);

        if ($response->getStatusCode() == 200) {
            // Request was successful save the token in a cookie 
            Cookie::queue(Cookie::make('api_token', json_encode($response->json()), 300));
            return Redirect::route('dashboard.index');

        } else {

            return Redirect::back()->withErrors(['msg' => $response->failed()]);
        }

        
    }
}
