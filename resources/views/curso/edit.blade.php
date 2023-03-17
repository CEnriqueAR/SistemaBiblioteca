@extends('layouts.app-master')

@section('content')
 
<div class="page-wrapper">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row align-items-center">
              <div class="col">
                <h2 class="page-title">
                Curso
                </h2>
                <a href="{{ route('curso.create') }}" class="btn btn-primary">Agregar Nuevo Curso</a>

              </div>
            </div>
          </div>
        <div class="container mt-4">

            <form method="POST" action="{{ route('curso.update', $curso->id) }}">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">Title</label>
                    <input value="{{ $curso->nombre }}"
                           type="text"
                           class="form-control"
                           name="nombre"
                           placeholder="Nombre" required>

                    @if ($errors->has('nombre'))
                        <span class="text-danger text-left">{{ $errors->first('nombre') }}</span>
                    @endif
                </div>




                <button type="submit" class="btn btn-primary">Save changes</button>
                <a href="{{ route('curso.index') }}" class="btn btn-default">Back</a>
            </form>
        </div>

        </div>
</div>
    </div>
@endsection
