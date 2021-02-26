<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\API\User as UserModel;

class User extends Controller
{
    public function register()
    {
        return view('user.register');
    }

    public function save(Request $request)
    {
        $request->validate([
            'cracha' => "required|int|unique:usuario,cracha",
            'name' => "required",
            'password' => "required|min:6",
            'sector' => "required"
        ]);

        if (!UserModel::register($request)) {
            return view('user.success', [
                "fulano" => $request->input('name')
            ]);
        } else {
            echo 'ERROR';
        }
    }
}
