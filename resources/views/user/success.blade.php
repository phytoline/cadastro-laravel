@extends('template.base')

<h1 class="success">Olá {{ $fulano }}, seu cadastro foi realizado com sucesso</h1>

<a href="{{ route('home') }}">Voltar</a>