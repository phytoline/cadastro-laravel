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
            "usuarioId",
            "usuarioCracha",
            "usuarioNome",
            "usuarioSenha",
            "usuarioSetor",
            "usuarioStatus"
        ])->limit($limit)->get();

        return $sql;
    }

    public static function register(Request $request)
    {
        $sql = self::insert([
            "usuarioCracha" => $request->input('cracha'),
            "usuarioNome" => $request->input('name'),
            "usuarioSenha" => Hash::make($request->input('password')),
            "usuarioSetor" => $request->input('sector'),
            "usuarioStatus" => 0
        ]);
    }
}
