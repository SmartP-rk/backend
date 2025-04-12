<?php

namespace App\Http\Controllers;

use App\Http\Requests\Session\ResetPasswordRequest;
use App\Http\Requests\Session\SendResetLinkEmailRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

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

    public function resetPassword(ResetPasswordRequest $request)
    {
        try {
            $response = Password::reset(
                $request->only('email', 'password', 'password_confirmation', 'token'),
                function (User $user, string $password) {
                    $user->forceFill([
                        'password' => Hash::make($password)
                    ])->setRememberToken(Str::random(60));
                    $user->save();
                }
            );
            if ($response !== Password::PASSWORD_RESET) {
                return response()->json(['error' => 'Token inválido ou usuário não encontrado'], 422);
            }
            return response()->json(['message' => 'Senha alterada com sucesso!'], 200);
        } catch (\Exception $exception) {
            info("Exception in reset password method session controller: {$exception}");
            return response()->json(['error' => 'Ocorreu um erro inesperado. Por favor contato a equipe de desenvolvimento!']);
        }
    }
}
