<?php

namespace App\Models\API;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    use HasFactory;

    protected $table = "usuario";

    public static function list(int $limit)
    {
        $sql = self::select([
            "id",
            "cracha",
            "nome",
            "senha",
            "setor",
            "status"
        ])->limit($limit)->get();

        return $sql;
    }

    public static function register(Request $request)
    {
        $sql = self::insert([
            "cracha" => $request->input('cracha'),
            "nome" => $request->input('name'),
            "senha" => Hash::make($request->input('password')),
            "setor" => $request->input('sector'),
            "status" => 0
        ]);
    }
}
