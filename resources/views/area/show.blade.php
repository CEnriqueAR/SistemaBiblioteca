@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Areas</h2>
        <div class="lead">

        </div>

        <div class="container mt-4">
            <div>
                Nombre: {{ $area->nombre }}
            </div>
            <div>
                Description: {{ $area->description }}
            </div>

        </div>

    </div>
    <div class="mt-4">
        <a href="{{ route('area.edit', $area->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('area.index') }}" class="btn btn-default">Back</a>
    </div>
@endsection
