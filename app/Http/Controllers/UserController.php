<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
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
}
