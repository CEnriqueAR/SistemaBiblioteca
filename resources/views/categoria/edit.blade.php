@extends('layouts.app-master')

@section('content')
<div class="page-wrapper">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row align-items-center">
              <div class="col">
              <h1>CAtegoria</h1>

              </div>
            </div>
          </div>
        <div class="container mt-4">

            <form method="POST" action="{{ route('categoria.update', $categoria->id) }}">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input value="{{ $categoria->nombre }}"
                           type="text"
                           class="form-control"
                           name="nombre"
                           placeholder="Nombre" required>

                    @if ($errors->has('nombre'))
                        <span class="text-danger text-left">{{ $errors->first('nombre') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Guardar </button>
                <a href="{{ route('categoria.index') }}" class="btn btn-default">Regresar</a>
            </form>
        </div>
        </div>
</div>
    </div>
@endsection
