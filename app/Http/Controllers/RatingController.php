<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;

class RatingController extends Controller
{
    public function store(Request $request)
    {
        // Validar la solicitud
        $request->validate([
            'rating' => 'required|integer|between:1,5',
        ]);

        // Obtener el ID del usuario actualmente autenticado
        // $userId = auth()->id();
       

        // Crear una nueva calificación en la base de datos
        $rating = Rating::create([
            'user_id' => $request->user_id,
            
            'rating' => $request->rating,
        ]);

        // Devolver la calificación guardada como JSON
        return response()->json(['success' => true, 'rating' => $rating]);
    }
}
