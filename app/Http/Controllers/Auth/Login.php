<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class Login extends Controller
{
    public function index()
    {   
        
        if(Cookie::has('api_token')){
            return Redirect::route('dashboard.index');
        }
        //return the view login
        return view('auth.login');
    }


    public function login(Request $request)
    {
        // Validate the request data
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:6',
    ]);

    // Send a request to the API to verify the user's credentials
    $response = Http::post('http://192.168.15.6:8000/api/auth/login', [
        'email' => $request->input('email'),
        'password' => $request->input('password'),
    ]);
    
    // If the login was successful, redirect the user to the dashboard
    if ($response->getStatusCode() == 200) {

        Cookie::queue(Cookie::make('api_token', json_encode($response->json()), 3000));
        return Redirect::route('dashboard.index');
    }

    // Otherwise, redirect the user back to the login form with an error message
    return redirect()->back()->withErrors([
        'error' => 'Email ou senha errado',
    ]);
    }


    public function logout(Request $request)
    {

     $response = Http::withToken($request->input('api_token'))->post('http://192.168.15.6:8000/api/auth/logout');
  
     if ($response->getStatusCode() == 200) {

        Cookie::queue(Cookie::forget('api_token'));
        return Redirect::route('welcome');
    }
    else {
        // Return an error response
        return response()->json([
            'error' => 'An error occurred while trying to log out.'
        ], $response->getStatusCode());
    }
    
    
    


    }
}
