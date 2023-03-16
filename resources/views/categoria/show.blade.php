@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Categoria</h2>
        <div class="lead">

        </div>

        <div class="container mt-4">
            <div>
                Nombre: {{ $categoria->nombre }}
            </div>
            <div>
            </div>

        </div>

    </div>
    <div class="mt-4">
        <a href="{{ route('categoria.edit', $categoria->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('categoria.index') }}" class="btn btn-default">Back</a>
    </div>
@endsection
