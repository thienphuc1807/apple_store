<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginUserController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ], [
            'username' => 'Tên đăng nhập không được để trống',
            'password' => 'Mật khẩu không được để trống',
        ]);

        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'username' => 'Tên đăng nhập không đúng. Vui lòng thử lại.',
                'password' => 'Mật khẩu không đúng. Vui lòng thử lại.'
            ]);
        }

        $request->session()->regenerate();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
