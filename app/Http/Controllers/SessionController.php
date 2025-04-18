<?php

namespace App\Http\Controllers;

use App\Http\Requests\Session\ResendEmailVerifyRequest;
use App\Http\Requests\Session\ResetPasswordRequest;
use App\Http\Requests\Session\SendResetLinkEmailRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;

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

    public function emailVerify(Request $request)
    {
        try {
            if (!URL::hasValidSignature($request)) {
                return response()->json(['message' => 'URL de verificação inválida ou expirada.'], 403);
            }
            $user = User::findOrFail($request->get('id'));
            if (!hash_equals(sha1($user->getEmailForVerification()), $request->get('hash'))) {
                return response()->json(['message' => 'Hash inválido.'], 403);
            }
            if (!$user->hasVerifiedEmail()) {
                $user->markEmailAsVerified();
                return response()->json(['message' => 'E-mail verificado com sucesso.']);
            }
            return response()->json(['message' => 'O e-mail já foi verificado!']);
        } catch (\Exception $exception) {
            info('Exception in emailVerify method user controller: ' . $exception);
            return response()->json(['error' => 'Ocorreu um erro inesperado. Tente novamente ou contate a equipe de desenvolvimento!'], 500);
        }
    }

    public function resendEmailVerify(ResendEmailVerifyRequest $request)
    {
        $user = User::where('email', $request->get('email'))->first();
        if (!$user) return response()->json(['message' => 'Usuário não encontrado.'], 404);
        if ($user->hasVerifiedEmail()) return response()->json(['message' => 'Este e-mail já foi verificado.'], 400);
        $user->sendEmailVerificationNotification();
        return response()->json(['message' => 'E-mail de verificação reenviado com sucesso!']);
    }
}
