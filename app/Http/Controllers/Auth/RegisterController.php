<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\UserTypes;

class RegisterController extends Controller
{

  /**
     * Show the registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegisterForm()
    {
        return view('auth.register');
    }
    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $user = $this->create($request->all());

        // Additional logic after registration, like sending emails, etc.

        return redirect()->route('login')->with('success', 'Регистрация успешна! Теперь вы можете войти.');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'tel' => ['required', 'string', 'max:255', 'unique:users', 'regex:/^([0-9\s\-\+\(\)]*)$/'],
            'fullname' => ['required', 'string', 'max:255'],
            'age' => ['required', 'integer', 'max:255'],
            'email' => ['required', 'email', 'string', 'max:255', 'unique:users'],
            'pass' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'in:1,2'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

      // dd($data);
        return User::create([
            'tel' => $data['tel'],
            'fullname' => $data['fullname'],
            'age' => $data['age'],
            'email' => $data['email'],
            'password' => Hash::make($data['pass']),
            'user_type_id' => $data['role'],
        ]);
    }
}
