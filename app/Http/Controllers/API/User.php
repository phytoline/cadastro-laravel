<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\API\User as UserModel;

class User extends Controller
{
    public function save(Request $request)
    {
        $request->validate([
            'cracha' => "required|int|unique:usuario,cracha",
            'name' => "required",
            'password' => "required|min:6",
            'sector' => "required"
        ]);

        if (!UserModel::register($request)) {
            return response("Cadastrado com sucesso", 201);
        } else {
            return response("ERROR", 409);
        }
    }
}
