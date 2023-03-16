@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Categoria</h2>
        <div class="lead">

        </div>

        <div class="container mt-4">
        @foreach ($libros as $key => $libro)
            <div>
                Nombre: {{ $libro->name }}
            </div>
            <div>
                Categoria: {{ $libro->nombre_categorias}}
            </div>
            <div>
                Autor: {{ $libro->autor }}
            </div>
            <div>
                editorial: {{ $libro->editorial }}
            </div>
            <div>
                isvn: {{ $libro->isvn }}
            </div>
            <div>
                tema: {{ $libro->tema }}
            </div>
            <div>
                total: {{ $libro->total }}
            </div>
            <div>
                foto: {{ $libro->foto }}
            </div>
            <div>
                pdf: {{ $libro->pdf }}
            </div>
            @endforeach
            <div>
            </div>

        </div>

    </div>
    <div class="mt-4">
        <a href="{{ route('libro.edit', $libro->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('libro.index') }}" class="btn btn-default">Back</a>
    </div>
@endsection
