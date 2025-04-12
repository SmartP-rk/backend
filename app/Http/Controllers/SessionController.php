<?php

namespace App\Http\Controllers;

use App\Http\Requests\Session\SendResetLinkEmailRequest;
use Illuminate\Support\Facades\Password;

class SessionController extends Controller
{

    public function sendResetLinkEmail(SendResetLinkEmailRequest $request)
    {
        try {
            Password::sendResetLink($request->only('email'));
            return response()->json(['message' => 'Email enviado com sucesso'], 200);
        } catch (\Exception $exception) {
            info("Exception in send reset link email session controller: {$exception}");
            return response()->json(['error' => 'Ocorreu um erro inesperado. Por favor contato a equipe de desenvolvimento!']);
        }
    }
}
