<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Contato;


Route::get('/contatos', function () {
    $contatos = Contato::all();
    return response()->json($contatos);
});

Route::get('/contatos/{id}', function ($id) {
    $contato = Contato::findOrFail($id);
    return response()->json($contato);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
