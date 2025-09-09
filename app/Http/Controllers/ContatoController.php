<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function enviar(Request $request)
    {
        // Apenas para teste, vamos redirecionar de volta com mensagem
        return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');
    }
}
