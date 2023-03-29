<?php
Schema::create('contatos', function (Blueprint $table) {
    $table->id();
    $table->string('nome');
    $table->string('telefone');
    $table->string('email');
    $table->string('endereco');
    $table->timestamps();
});
@yield('layouts.app') 
@section('content')

    <h1>Gerar QR Code</h1>
    <form action="/gerar-qr" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" class="form-control" id="nome">
        </div>
        <button type="submit" class="btn btn-primary">Gerar QR Code</button>
    </form>
@endsection