@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Update Categoria</h2>
        <div class="lead">
            Edit Categoria.
        </div>

        <div class="container mt-4">

            <form method="POST" action="{{ route('categoria.update', $categoria->id) }}">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">Title</label>
                    <input value="{{ $categoria->nombre }}"
                           type="text"
                           class="form-control"
                           name="nombre"
                           placeholder="Nombre" required>

                    @if ($errors->has('nombre'))
                        <span class="text-danger text-left">{{ $errors->first('nombre') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Save changes</button>
                <a href="{{ route('categoria.index') }}" class="btn btn-default">Back</a>
            </form>
        </div>

    </div>
@endsection
