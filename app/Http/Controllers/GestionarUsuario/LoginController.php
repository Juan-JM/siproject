<?php

namespace App\Http\Controllers\GestionarUsuario;

use App\Http\Requests\LoginRequest;
use Illuminate\Auth\Events\Login;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __invoke(LoginRequest $request)
    {
        $dataValidated = $request->validated();
        $remember = $request->filled('remember_token');
        if (Auth::attempt($dataValidated, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        
        return back()->withErrors([
            'nombre' => 'Las credenciales no coinciden con nuestros registros.',
        ]);
    }
}
