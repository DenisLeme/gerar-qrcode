<?php
@extends('layouts.app')

@section('content')
    <h1>Gerar QR Code</h1>
    <form action="/gerar-qr" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" class="form-control" id="nome">
            <div>
            <label for="linkedin">Linkedin:</label>
            <input type="text" name="lindekin" class="form-control" id="linkedin">
            </div>
            <div>
            <label for="github">GitHub:</label>
        </div>
        <button type="submit" class="btn btn-primary">Gerar QR Code</button>
    </form>
    @if(isset($qrCode))
        <div class="mt-5">
            {!! QrCode::size(300)->generate($qrCode); !!}
        </div>
    @endif
@endsection