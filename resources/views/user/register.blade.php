@extends('template.base')

@section('title', 'Cadastro de Usuário')

@section('content')
<form action="{{ route('save') }}" method="post">
    {{ csrf_field() }}

    <div class="field">
        <label for="cracha">Crachá:</label>
        <input type="text" name="cracha" id="cracha" />

        @if($errors->has('cracha'))
            @foreach($errors->get('cracha') as $error)
                <strong class="error">{{ $error }}</strong>
            @endforeach
        @endif
    </div>
    <div class="field">
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" />

        @if($errors->has('name'))
            @foreach($errors->get('name') as $error)
                <strong class="error">{{ $error }}</strong>
            @endforeach
        @endif
    </div>
    <div class="field">
        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" />

        @if($errors->has('password'))
            @foreach($errors->get('password') as $error)
                <strong class="error">{{ $error }}</strong>
            @endforeach
        @endif
    </div>
    <div class="field">
        <label for="sector">Setor:</label>
        <input type="text" name="sector" id="sector" />

        @if($errors->has('sector'))
            @foreach($errors->get('sector') as $error)
                <strong class="error">{{ $error }}</strong>
            @endforeach
        @endif
    </div>
    <div class="field">
        <button type="submit">Salvar</button>
    </div>
</form>
@endsection