<?php
@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-sm-6">
            <img src="/img/john.png" alt="John" class="img-fluid">
        </div>
        <div class="col-sm-6">
            <h1>{{ $contato->nome }}</h1>
            <p>{{ $contato->telefone }}</p>
            <p>{{ $contato->email }}</p>
            <p>{{ $contato->endereco }}</p>
        </div>
    </div>
@endsection