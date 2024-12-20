<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Publicar;
use Illuminate\Http\Request;

class PublicarController extends Controller
{
    public function index()
    {

        $data['publicacaos'] = Publicar::all();

        return view('admin.publicar.index', $data);
    }

    public function create(Request $request)
    {
        // Validação do arquivo
        $request->validate([
            'vc_file' => 'file|mimes:jpeg,jpg,png,mp4,mov,avi|max:10240', // 10MB max
        ]);

        $file = $request->file('vc_file');
        

        // Variáveis para armazenar o nome do arquivo e formato
        $nomeArquivo = $file->getClientOriginalName(); // Nome do arquivo
        $estencaoArquivo = $file->extension();
        $formato = ''; // Formato do arquivo
        $filePath = ''; // Caminho onde o arquivo será salvo

        if (in_array($estencaoArquivo, ['jpeg', 'png', 'jpg'])) {
            //dd('imagem');
            $formato = 'imagem';
            $caminho='Arquivo/'.$formato;
            $filePath = $file->move($caminho,$nomeArquivo);
            //dd($filePath);
        } elseif (in_array($estencaoArquivo, ['mp4', 'mov', 'avi'])) {
            //dd('video');
            $formato = 'video';
            $caminho='Arquivo/'.$formato;
            $filePath = $file->move($caminho,$nomeArquivo);
            //dd($filePath);
        } else {
            dd('nao deu');
        }

        // Salva os dados no banco
        $publicacao = new Publicar();
        $publicacao->lt_conteudo = $request->lt_conteudo;
        $publicacao->vc_file = $filePath; // Salva o caminho do arquivo
        $publicacao->vc_formato = $formato; // Salva o tipo do arquivo
        $publicacao->id_user = auth()->id(); // Usa o ID do usuário autenticado
        $publicacao->save();

        return redirect()->back()->with('success', 'Publicação criada com sucesso!');
    }
}
