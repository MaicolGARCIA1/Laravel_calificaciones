<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User; // Asegúrate de importar el modelo User si aún no lo has hecho
use Auth;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(Request $request)
    {
        try {
            $user = Socialite::driver('google')->user();
        }catch (\Laravel\Socialite\Two\InvalidStateException $e) {
            return redirect()->route('error')->with('message', 'Hubo un problema con la autenticación de Google. Por favor, intenta nuevamente.');
        }
        

        // Verificar si el usuario ya existe en la base de datos
        $existingUser = user::where('email', $user->email)->first();

        if ($existingUser) {
            // Si el usuario ya existe, iniciar sesión en la aplicación
            Auth::login($existingUser);
        } else {
            // Si el usuario no existe, crear uno nuevo en la base de datos
            $newUser = new user();
            $newUser->name = $user->name;
            $newUser->email = $user->email;
            $newUser->save();

            // Iniciar sesión con el nuevo usuario
            Auth::login($newUser);
        }

        // Redirigir a la página de inicio después de iniciar sesión
        return redirect()->route('home');
    }
}
