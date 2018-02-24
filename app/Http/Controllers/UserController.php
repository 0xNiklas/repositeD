<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;

class UserController extends Controller
{
    public function login(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);
        if($validator->fails()) {
            $url = URL::route('login', array("#login"));
            return redirect()->to($url)->withErrors($validator);
        }

        $data = $request->all();
        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']], $data['remember'])) {
            return redirect()->to(route('packages'));
        } else {
            return redirect()->back();
        }
    }

    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
        if($validator->fails()) {
            $url = URL::route('login', array("#register"));
            return redirect()->to($url)->withErrors($validator);
        }

        $data = $request->all();
        $user = User::create([
            'name' => $data['name'],
            'password' => Hash::make($data['password']),
            'email' => $data['email'],
            'uuid' => Uuid::uuid4()->toString(),
        ]);
        Auth::login($user);
        return redirect()->to(route('packages'));
    }
}
