<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;

class UserController extends Controller
{
    public function signup(Request $request)
    {
        try {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));

        $user->save();
        Auth::login($user);
       
        return redirect()->route('home')->with('success', 'Signup successful');

        


    }catch (\Exception $e) {
        $errorMessage = $e->getMessage();
        return view('signup', compact('errorMessage'));
    }

}

public function showLoginForm()
{
    return view('login');
}

public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        return redirect()->route('home');
    } else {
        $errorMessage = 'Invalid username or password.';
        return view('login', compact('errorMessage'));
    }
}


// public function loginApi(Request $request)
//     {
//         $http = new Client();

//         try {
            
//             $response = $http->post('http://localhost/api/login', [
//                 'form_params' => [
//                     'email' => $request->input('email'),
//                     'password' => $request->input('password'),
//                 ],
//             ]);
           
           
//             $data = json_decode((string) $response->getBody(), true);

            
//             if (isset($data['access_token'])) {
               
//                 session()->put('token.access_token', $data['access_token']);

                
//                 return redirect()->route('home')->with('success', 'Login successful');
//             } else {
                
//                 return redirect()->back()->with('error', 'Invalid username or password.');
//             }
//         } catch (\Exception $e) {
            
//             return redirect()->back()->with('error', $e);
//         }
//     }

}
