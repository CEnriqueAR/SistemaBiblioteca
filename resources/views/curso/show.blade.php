@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Curso</h2>
        <div class="lead">

        </div>

        <div class="container mt-4">
            <div>
                Nombre: {{ $curso->nombre }}
            </div>


        </div>

    </div>
    <div class="mt-4">
        <a href="{{ route('curso.edit', $curso->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('curso.index') }}" class="btn btn-default">Back</a>
    </div>
@endsection
