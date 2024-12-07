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
    public function __construct(User $user){
        $this->user = $user;
    }

    public function store(StoreUserRequest $request){
        try {
            $user = $this->user->create($request->validated());
            if($request->hasFile('image')){
                $path = $request->file('image')->store('images/users', 'public');
                $user->image = $path;
                $user->save();
            }
            return response()->json(['msg' => 'Usuário cadastrado com sucesso', 'user' => $user], 201);
        }
        catch(\Exception $exception) {
            info('Exception in store method user controller: ' . $exception);
            return response()->json(['error' => 'Ocorreu um erro inesperado. Por favor contato a equipe de desenvolvimento!']);
        }
    }

    public function show(User $user){
        try {
            return response()->json(['user' => $user->load('park')], 200);
        }
        catch(\Exception $exception) {
            info('Exception in show method user controller: ' . $exception);
            return response()->json(['error' => 'Ocorreu um erro inesperado. Por favor contato a equipe de desenvolvimento!']);
        }
    }

    public function update(UpdateUserRequest $request, User $user){
        try {
            $user->fill($request->validated());
            $user->save();
            if($request->hasFile('image')){
                if($user->image != null){
                    Storage::disk('local')->delete($user->image);
                }
                $user->image = $request->file('image')->store('images/users', 'public');
                $user->save();
            }
            return response()->json(['msg' => 'Usuário atualizado com sucesso', 'user' => $user], 200);
        }
        catch(\Exception $exception) {
            info('Exception in update method user controller: ' . $exception);
            return response()->json(['error' => 'Ocorreu um erro inesperado. Por favor contato a equipe de desenvolvimento!'], 500);
        }
    }

    public function destroy(User $user){
        try {
            if($user->image != null){
                Storage::disk('local')->delete($user->image);
            }
            $user->delete();
            return response()->json(['msg' => 'Usuário excluído com sucesso'], 200);
        }
        catch(\Exception $exception) {
            info('Exception in destroy method user controller: ' . $exception);
            return response()->json(['error' => 'Ocorreu um erro inesperado. Por favor contato a equipe de desenvolvimento!'], 500);
        }
    }

    public function login(LoginRequest $loginRequest){
        try {
            if(Auth::attempt($loginRequest->only('email', 'password'))){
                $user = $loginRequest->user();
                $user->load('park');
                //(Dentro dos parenteses vai o nome do token)
                $token = $loginRequest->user()->createToken($loginRequest->email)->plainTextToken;
                return response()->json([
                    'msg' => 'Usuário autenticado com sucesso',
                    'user' => $user, 'token' => $token
                ], 200);
            }
            return response()->json(['msg' => 'Email ou senha incorretos!'], 401);
        }
        catch(\Exception $exception) {
            info('Exception in login method user controller: ' . $exception);
            return response()->json(['error' => 'Ocorreu um erro inesperado. Por favor contato a equipe de desenvolvimento!'], 500);
        }
    }

    public function refreshToken(Request $request){
        try {
            // Invalida o token antigo
            $request->user()->tokens()->where('id', $request->user()->currentAccessToken()->id)->delete();
            // Gera um novo token
            $newToken = $request->user()->createToken('authToken')->plainTextToken;
            return response()->json(['msg' => 'Token renovado com sucesso', 'token' => $newToken], 200);
        }
        catch(\Exception $exception) {
            info('Exception in refreshToken method user controller: ' . $exception);
            return response()->json(['error' => 'Ocorreu um erro inesperado. Por favor contato a equipe de desenvolvimento!'], 500);
        }
    }

    public function logout(Request $request){
        try {
            $request->user()->currentAccessToken()->delete();
            return response()->json(['msg' => 'Usuário deslogado com sucesso'], 200);
        }
        catch(\Exception $exception) {
            info('Exception in logout method user controller: ' . $exception);
            return response()->json(['error' => 'Ocorreu um erro inesperado. Por favor contato a equipe de desenvolvimento!'], 500);
        }
    }

    public function destructAllTokens(Request $request){
        try {
            $request->user()->tokens()->delete();
            return response()->json(['msg' => 'Tokens destruídos com sucesso'], 200);
        }
        catch(\Exception $exception) {
            info('Exception in destructAllTokens method user controller: ' . $exception);
            return response()->json(['error' => 'Ocorreu um erro inesperado. Por favor contato a equipe de desenvolvimento!'], 500);
        }
    }
}
