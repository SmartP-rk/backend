<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\User\{StoreUserRequest, UpdateUserRequest};
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    protected $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function driverIndex()
    {
        try {
            $drivers = $this->user->where('user_type', '=', 3)->with('vehicles')->paginate(10);
            if ($drivers->isEmpty()) {
                return response()->json(['msg' => 'Nenhum motorista encontrado'], 404);
            }
            return response()->json(['drivers' => $drivers], 200);
        } catch (\Exception $exception) {
            info('Exception in index method user controller: ' . $exception);
            return response()->json(['error' => 'Ocorreu um erro inesperado. Por favor contato a equipe de desenvolvimento!'], 500);
        }
    }

    public function store(StoreUserRequest $request)
    {
        try {
            $user = $this->user->create($request->validated());
            $user->sendEmailVerificationNotification();
            switch ($user->user_type) {
                case 1:
                    $message = 'Proprietário cadastrado com sucesso';
                    break;
                case 2:
                    $message = 'Operador cadastrado com sucesso';
                    break;
                case 3:
                    $message = 'Motorista cadastrado com sucesso';
                    break;
                default:
                    $message = 'Usuário cadastrado com sucesso';
            }
            return response()->json(['msg' => $message, 'user' => $user], 201);
        } catch (\Exception $exception) {
            info('Exception in store method user controller: ' . $exception);
            return response()->json(['error' => 'Ocorreu um erro inesperado. Por favor contato a equipe de desenvolvimento!'], 500);
        }
    }

    public function show(User $user)
    {
        try {
            return response()->json(['user' => $user->load('park')], 200);
        } catch (\Exception $exception) {
            info('Exception in show method user controller: ' . $exception);
            return response()->json(['error' => 'Ocorreu um erro inesperado. Por favor contato a equipe de desenvolvimento!']);
        }
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        try {
            $user->fill($request->validated());
            $user->save();
            if ($request->hasFile('image')) {
                if ($user->image != null) {
                    Storage::disk('public')->delete($user->image);
                }
                $user->image = $request->file('image')->store('images/users', 'public');
                $user->save();
            }
            switch ($user->user_type) {
                case 1:
                    $message = 'Proprietário atualizado com sucesso';
                    break;
                case 2:
                    $message = 'Operador atualizado com sucesso';
                    break;
                case 3:
                    $message = 'Motorista atualizado com sucesso';
                    break;
                default:
                    $message = 'Usuário atualizado com sucesso';
            }
            return response()->json(['msg' => $message, 'user' => $user], 200);
        } catch (\Exception $exception) {
            info('Exception in update method user controller: ' . $exception);
            return response()->json(['error' => 'Ocorreu um erro inesperado. Por favor contato a equipe de desenvolvimento!'], 500);
        }
    }

    public function destroy(User $user)
    {
        try {
            if ($user->image != null) {
                Storage::disk('public')->delete($user->image);
            }
            $user->delete();
            return response()->json(['msg' => 'Usuário excluído com sucesso'], 200);
        } catch (\Exception $exception) {
            info('Exception in destroy method user controller: ' . $exception);
            return response()->json(['error' => 'Ocorreu um erro inesperado. Por favor contato a equipe de desenvolvimento!'], 500);
        }
    }

    public function login(LoginRequest $loginRequest)
    {
        try {
            if (Auth::attempt($loginRequest->only('email', 'password'))) {
                $user = $loginRequest->user();
                $user->load('park');
                if (!$user->hasVerifiedEmail()) {
                    Auth::logout();
                    return response()->json(['error' => 'Você precisa verificar seu e-mail para fazer login.'], 403);
                }
                //(Dentro dos parenteses vai o nome do token)
                $token = $loginRequest->user()->createToken($loginRequest->email)->plainTextToken;
                return response()->json([
                    'msg' => 'Usuário autenticado com sucesso',
                    'user' => $user,
                    'token' => $token
                ], 200);
            }
            return response()->json(['msg' => 'Email ou senha incorretos!'], 401);
        } catch (\Exception $exception) {
            info('Exception in login method user controller: ' . $exception);
            return response()->json(['error' => 'Ocorreu um erro inesperado. Por favor contato a equipe de desenvolvimento!'], 500);
        }
    }

    public function refreshToken(Request $request)
    {
        try {
            // Invalida o token antigo
            $request->user()->tokens()->where('id', $request->user()->currentAccessToken()->id)->delete();
            // Gera um novo token
            $newToken = $request->user()->createToken('authToken')->plainTextToken;
            return response()->json(['msg' => 'Token renovado com sucesso', 'token' => $newToken], 200);
        } catch (\Exception $exception) {
            info('Exception in refreshToken method user controller: ' . $exception);
            return response()->json(['error' => 'Ocorreu um erro inesperado. Por favor contato a equipe de desenvolvimento!'], 500);
        }
    }

    public function logout(Request $request)
    {
        try {
            $request->user()->currentAccessToken()->delete();
            return response()->json(['msg' => 'Usuário deslogado com sucesso'], 200);
        } catch (\Exception $exception) {
            info('Exception in logout method user controller: ' . $exception);
            return response()->json(['error' => 'Ocorreu um erro inesperado. Por favor contato a equipe de desenvolvimento!'], 500);
        }
    }

    public function destructAllTokens(Request $request)
    {
        try {
            $request->user()->tokens()->delete();
            return response()->json(['msg' => 'Tokens destruídos com sucesso'], 200);
        } catch (\Exception $exception) {
            info('Exception in destructAllTokens method user controller: ' . $exception);
            return response()->json(['error' => 'Ocorreu um erro inesperado. Por favor contato a equipe de desenvolvimento!'], 500);
        }
    }
}
