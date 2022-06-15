<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::paginate(3);
        return view("admin.cursos.index",compact("cursos"));
    }

    public function adicionar()
    {
        return view("admin.cursos.adicionar");
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();
        //dd($dados);

        //Verificando se imagem existe(hasFile)
        if($request->hasFile('imagem')){
            $imagem = $request->file('imagem');             //Traz o arquivo para do formulario
            $num = rand(1111,9999);                         // gerando número randomico para o nome do arquivo
            $dir = "img/cursos/";                           // diretorio de imagem
            $exte = $imagem->guessClientExtension();        // pegando extensão do arquivo
            $nomeImagem = "imagem_" . $num . "." . $exte;   // criando nome da imagem
            $imagem->move($dir, $nomeImagem);               // movendo para diretorio
            $caminhoImagem =  $dir . "/" . $nomeImagem;

            $dados['imagem'] = $caminhoImagem;
        }

        if(isset($dados['publicado']) == 1){
            $dados['publicado'] = "sim";
        }else{
            $dados['publicado'] = "nao";
        }     

            Curso::create($dados);

            return redirect()->route("admin.cursos");

    }

    public function editar($id)
    {
        $registros = Curso::find($id);
        return view("admin.cursos.editar", compact("registros"));
    }

    public function atualizar(Request $request, $id)
    {
        $dados = $request->all();
        //dd($dados);

        //Verificando se imagem existe(hasFile)
        if($request->hasFile('imagem')){
            $imagem = $request->file('imagem');             //Traz o arquivo para do formulario
            $num = rand(1111,9999);                         // gerand número randomico para o nome do arquivo
            $dir = "img/cursos/";                           // diretorio de imagem
            $exte = $imagem->guessClientExtension();        // pegando extensão do arquivo
            $nomeImagem = "imagem_" . $num . "." . $exte;   // criando nome da imagem
            $imagem->move($dir, $nomeImagem);               // movendo para diretorio
            $caminhoImagem =  $dir . "/" . $nomeImagem;

            $dados['imagem'] = $caminhoImagem;
        }



        if(isset($dados['publicado']) == 1){
            $dados['publicado'] = "sim";
        }else{
            $dados['publicado'] = "nao";
        }        

            Curso::find($id)->update($dados);

            return redirect()->route("admin.cursos");
    }

    public function deletar($id)
    {

        Curso::find($id)->delete();

        return redirect()->route("admin.cursos");
    }



}
