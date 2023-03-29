<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/gerar-qr', function () {
    return view('gerar-qr');
});

Route::get('/{nome}', function ($nome) {
    return redirect("/john/{$nome}");
});
Route::get('/john/{nome}', function ($nome) {
    $contato = App\Models\Contato::where('nome', $nome)->firstOrFail();
    return view('john', compact('contato'));
});