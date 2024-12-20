<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Publicar;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index()
    {

        $userId = auth()->id();
        //dd($userId);

        $data['publicacaos'] = Publicar::join('users', 'publicars.id_user', '=', 'users.id')
            ->select(
                'publicars.*',
                'users.name as nome_user'
            )
            ->where('publicars.id_user', $userId) // Especifique a tabela
            ->orderBy('publicars.id', 'desc')
            ->get();

        //dd($data['publicacaos']);


        return view('admin.perfil.index', $data);
    }
}
