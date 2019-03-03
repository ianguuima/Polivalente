<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('noticias/lista');
    }


    public function logout(){
        if (Auth::check()){
        Auth::logout();
        return \Redirect::to('/');
        }
    }

    public function email(Request $request){


        $data = array(
            'email' => $request->email,
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'mensagem' => $request->conteudo
        );

        Mail::send('layouts.contato', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('ianguuima@gmail.com');
            $message->subject('Contato Polivalente');
        });

         \Session::flash('mensagem_sucesso', 'Email enviado com sucesso!');
         return \Redirect::to('/contato');
    }
}
