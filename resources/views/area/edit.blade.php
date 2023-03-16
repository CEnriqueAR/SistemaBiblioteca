@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Update Area</h2>
        <div class="lead">
            Edit Area.
        </div>

        <div class="container mt-4">

            <form method="POST" action="{{ route('area.update', $area->id) }}">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">Title</label>
                    <input value="{{ $area->nombre }}"
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
                    <input value="{{ $area->description }}"
                           type="text"
                           class="form-control"
                           name="description"
                           placeholder="Description" required>

                    @if ($errors->has('description'))
                        <span class="text-danger text-left">{{ $errors->first('description') }}</span>
                    @endif
                </div>




                <button type="submit" class="btn btn-primary">Save changes</button>
                <a href="{{ route('area.index') }}" class="btn btn-default">Back</a>
            </form>
        </div>

    </div>
@endsection
