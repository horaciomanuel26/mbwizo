<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Publicar;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $data['publicacaos'] = Publicar::join('users', 'publicars.id_user', '=', 'users.id')
            ->select(
                'publicars.*',
                'users.name as nome_user',
            )
            ->orderBy('publicars.id', 'desc')
            ->get();
        //dd($data['publicacaos']);


        return view('index', $data);
    }
}
