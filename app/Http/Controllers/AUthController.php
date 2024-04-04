<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation;

use App\Models\User;
use App\Models\package;
use App\Models\feedback;
use App\Models\book;



class AUthController extends Controller
{

    function Landing()
    {
        $packages = package::take(3)->get();


        return view('home', ['package' => $packages]);
    }

    function about()
    {
        $feedacks = feedback::take(3)->get();
        return view('about', ['feedbacks' => $feedacks]);
    }
    function book()
    {
        return view('book');
    }
    function booking(request $request)
    {

        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'location' => 'required',
                'address' => 'required',
                'guests' => 'required'
            ]
        );
        $booking = book::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'location' => $request->location,
            'address' => $request->address,
            'Guests' => $request->guests
        ]);
        if (!$booking) {
            return redirect(route('book.index'))->with('error', 'Data not valid');
        }
        return redirect(route('Landing.index'))->with('Success');
    }

    function package()
    {
        $packages = package::all();


        return view('package', ['packages' => $packages]);
    }

    function Login()
    {
        return view('Login');
    }
    function LoginPost(Request $request)
    {
        $request->validate(
            [
                'password' => 'required',
                'Email' => 'required'
            ]
        );

        $credentials = $request->only('Email', 'password');
        if (Auth::attempt($credentials)) {
            return Redirect()->intended(route('Landing.index'));
        } {
            return redirect(route('Login.index'))->with('error', 'Login details not valid');
        }
    }
    function Signup()
    {
        return view('Signup');
    }
    function SignupPost(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'email' => 'required|email|unique:users',
            'name' => 'required',
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);


        if (!$user) {
            return redirect(route('Signup.index'))->with('error', 'not valid');
        }
        return redirect(route('Login.index'))->with('Success', 'please login');
    }
    function logout()
    {
        session::flush();
        Auth::logout();
        return redirect(route('Login.index'));
    }
}
