<?php

use Illuminate\Support\Facades\Input;

Route::get('/', "NoticiaController@index")->name("index");

Route::get('/sobre', "NoticiaController@about")->name("about");

Route::get('/contato', "NoticiaController@contact")->name('contact');

Route::post('/contato/enviar', "HomeController@email")->name('contato');

Auth::routes();

Route::get('/logout', "HomeController@logout")->name('logout');

// ONLY IF IS LOGGED


Route::get('/noticias/lista', 'NoticiaController@list')->name('lista')->middleware('auth');

Route::get('/noticias/nova', 'NoticiaController@nova')->name('nova')->middleware('auth');

Route::post('/noticias/salvar', 'NoticiaController@salvar')->name('salvar')->middleware('auth');

Route::delete('noticias/{id}', "NoticiaController@delete")->name('deletar')->middleware('auth');

Route::get('/noticias/{id}/editar', "NoticiaController@editar")->name('editar')->middleware('auth');

Route::post('/noticias/{id}', 'NoticiaController@atualizar')->name('atualizar')->middleware('auth');


Route::any('/search', function(){
    $q = Input::get ('pesquisa');
    $noticia = App\Noticia::where('titulo','LIKE','%'.$q.'%')->get();
    if(count($noticia) > 0)
        return view('search')->withDetails($noticia)->withQuery ($q);
    else return view ('search')->withMessage('No Details found. Try to search again !');
});


// 

Route::get('/noticias/visualizar/{id}', 'NoticiaController@visualizar')->name('visualizar');

