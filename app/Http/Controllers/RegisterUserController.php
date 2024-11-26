<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate
        $userAttributes = $request->validate([
            'name' => ['required'],
            'gender' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'username' => ['required', 'min:8'],
            'phoneNumber' => ['required'],
            'password' => ['required', 'confirmed', Password::min(6)],
        ], [
            'name.required' => 'Tên, Họ không được để trống.',
            'email.required' => 'Email không được để trống.',
            'email.unique' => 'Email đã tồn tại',
            'username.required' => 'Username không được để trống.',
            'username.min' => 'Username phải có ít nhất 8 ký tự.',
            'phoneNumber.required' => 'Số điện thoại không được để trống.',
            'password.required' => 'Mật khẩu không được để trống.',
            'password.confirmed' => 'Mật khẩu không trùng khớp.',
        ]);
        // create User
        $user = User::create($userAttributes);

        Auth::login($user);

        return redirect('/user/login');
    }
}
