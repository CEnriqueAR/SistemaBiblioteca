@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Add new Area</h2>
        <div class="lead">
            Add new Area.
        </div>

        <div class="container mt-4">

            <form method="POST" action="{{ route('area.store') }}">
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

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input value="{{ old('description') }}"
                           type="text"
                           class="form-control"
                           name="description"
                           placeholder="Description" required>

                    @if ($errors->has('description'))
                        <span class="text-danger text-left">{{ $errors->first('description') }}</span>
                    @endif
                </div>


                <button type="submit" class="btn btn-primary">Save role</button>
                <a href="{{ route('area.index') }}" class="btn btn-default">Back</a>
            </form>
        </div>

    </div>
@endsection
