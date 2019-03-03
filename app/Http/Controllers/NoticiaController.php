<?php

namespace App\Http\Controllers;

use App\Noticia;
use Illuminate\Http\Request;
use DB;
use App\Quotation;
use Illuminate\Support\Facades\Storage;

class NoticiaController extends Controller
{

    public function index(){
        $list = DB::table('noticias')->latest()->paginate(10);

        return view('index', ['posts' => $list]);
    }

    public function about(){
        return view('about');
    }


    public function contact(){
        return view('contact');
    }

    public function list(){
        $posts = Noticia::get();
        return view('noticias/lista', ['posts' => $posts]);
    }

    public function nova(){
        return view('noticias/nova');
    }


    public function visualizar($id){
        $noticia = Noticia::findOrFail($id);
        return view('noticias.visualizar', ['noticia' => $noticia]);
    }

    public function salvar(Request $request){
        $noticia = new Noticia();

        $path = $request->file('arquivo')->store('news-images', 'public');

        $titulo = $request->titulo;
        $mensagem = $request->mensagem;

        $noticia = $noticia->create(['titulo' => $titulo, 'mensagem' => $mensagem, 'arquivo' => $path]);

       \Session::flash('mensagem_sucesso', 'Noticia criada com sucesso!');
       return \Redirect::to('noticias/nova');
    }

    public function delete($id){
        $noticia = Noticia::findOrFail($id);
        Storage::delete('public/'.$noticia->arquivo);
        $noticia->delete();
    
       \Session::flash('mensagem_sucesso', 'Notícia ' . $noticia->nome . ' deletada com sucesso!');
       return \Redirect::to('noticias/lista');
    }


    public function editar($id){
        $noticia = Noticia::findOrFail($id);
        return view('noticias/nova', ['noticia' => $noticia]);
    }

    public function atualizar($id, Request $request){
        $noticia = Noticia::findOrFail($id);

        $titulo = $request->titulo;
        $mensagem = $request->mensagem;

        if (isset($request->arquivo)) { 
            Storage::delete('public/'.$noticia->arquivo);
            $path = $request->file('arquivo')->store('news-images', 'public');
            $noticia->update(['titulo' => $titulo, 'mensagem' => $mensagem, 'arquivo' => $path]);
        } else {
            $noticia->update(['titulo' => $titulo, 'mensagem' => $mensagem]);
        }

       \Session::flash('mensagem_sucesso', 'Notícia atualizada com sucesso!');

       return \Redirect::to('noticias/'.$noticia->id.'/editar');
    }



}
