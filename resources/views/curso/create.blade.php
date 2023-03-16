@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Add new Curso</h2>
        <div class="lead">
            Add new Curso.
        </div>

        <div class="container mt-4">

            <form method="POST" action="{{ route('curso.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">Title</label>
                    <input value="{{ old('nombre') }}"
                           type="text"
                           class="form-control"
                           name="nombre"
                           placeholder="Nombre" required>

                    @if ($errors->has('nombre'))
                        <span class="text-danger text-left">{{ $errors->first('nombre') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Save role</button>
                <a href="{{ route('curso.index') }}" class="btn btn-default">Back</a>
            </form>
        </div>

    </div>
@endsection
