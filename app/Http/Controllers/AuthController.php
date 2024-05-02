<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function storeUser(Request $request)
    {
        // Валидация данных
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // Создание пользователя
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Перенаправление на страницу входа
        return redirect()->route('login');
    }

    public function login()
    {
        // Вернуть представление входа
        return view('login');
    }

    public function authenticate(Request $request)
    {
        // Попытка аутентификации
        if (Auth::attempt($request->only('email', 'password'))) {
            // Если успешно, перенаправить на главную страницу
            return redirect()->route('home');
        }

        // Если неудачно, вернуться обратно с сообщением об ошибке
        return back()->withErrors([
            'email' => 'Предоставленные учетные данные не соответствуют нашим записям.',
        ]);
    }
}
