<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
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
    } catch (\Laravel\Socialite\Two\InvalidStateException $e) {
        // Manejar la excepción, por ejemplo, redirigir al usuario a una página de error.
        return redirect()->route('error')->with('message', 'Hubo un problema con la autenticación. Por favor, intenta nuevamente.');
    }

    // Resto de tu lógica aquí...
}


}
