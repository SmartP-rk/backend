<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $user;
    public function __construct(User $user){
        $this->user = $user;
    }

    public function store(StoreUserRequest $request){
        $user = $this->user->create($request->all());
        return response()->json(['msg' => 'Usuário cadastrado com sucesso', 'user' => $user], 201);
    }

    public function show(User $user){
        return response()->json(['user' => $user], 200);
    }

    public function update(UpdateUserRequest $request, User $user){
        $user->fill($request->all());
        $user->save();
        return response()->json(['msg' => 'Usuário atualizado com sucesso', 'user' => $user], 200);
    }

    public function destroy(User $user){
        $user->delete();
        return response()->json(['msg' => 'Usuário excluído com sucesso'], 200);
    }

    public function login(LoginRequest $loginRequest){
        if(Auth::attempt($loginRequest->only('email', 'password'))){
            //(Dentro dos parenteses vai o nome do token)
            $token = $loginRequest->user()->createToken($loginRequest->email)->plainTextToken;
            return response()->json([
                'msg' => 'Usuário autenticado com sucesso',
                'user' => $loginRequest->user(), 'token' => $token
            ], 200);
        }
        return response()->json(['msg' => 'Email ou senha incorretos!'], 401);
    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        return response()->json(['msg' => 'Usuário deslogado com sucesso'], 200);
    }
}
