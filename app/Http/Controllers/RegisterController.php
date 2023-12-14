<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('admin.register');
    }

    public function register(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return redirect('register')
                ->withErrors($validator)
                ->withInput();
        }

        $user = $this->create($request->all());



        return redirect('/login')->with('status', 'registration-successful');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
