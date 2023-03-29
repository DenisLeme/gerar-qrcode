<?php
public function up()
{
    Schema::create('contatos', function (Blueprint $table) {
        $table->id();
        $table->string('nome');
        $table->string('telefone');
        $table->string('email');
        $table->string('endereco');
        $table->timestamps();
    });
}