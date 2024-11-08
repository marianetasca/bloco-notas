@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Minhas Notas</h1>
    <a href="{{ route('notas.create') }}" class="btn btn-primary">Criar Nova Nota</a>
    <ul>
        @foreach($notas as $nota)
            <li>
                <a href="{{ route('notas.show', $nota) }}">{{ $nota->titulo }}</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
