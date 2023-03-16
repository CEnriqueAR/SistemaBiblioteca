@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Update libro</h2>
        <div class="lead">
            Edit libro
        </div>

        <div class="container mt-4">
        @foreach ($libros as $key => $libro)
            <form method="POST" action="{{ route('libro.update', $libro->id) }}">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input value="{{ $libro->name }}"
                           type="text"
                           class="form-control"
                           name="name"
                           placeholder="Nombre" required>

                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="autor" class="form-label">Autor</label>
                    <input value="{{ $libro->autor }}"
                           type="text"
                           class="form-control"
                           name="autor"
                           placeholder="autor" required>

                    @if ($errors->has('autor'))
                        <span class="text-danger text-left">{{ $errors->first('autor') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="tema" class="form-label">Tema</label>
                    <input value="{{ $libro->tema }}"
                           type="text"
                           class="form-control"
                           name="tema"
                           placeholder="tema" required>

                    @if ($errors->has('tema'))
                        <span class="text-danger text-left">{{ $errors->first('tema') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="editorial" class="form-label">Editorial</label>
                    <input value="{{ $libro->editorial }}"
                           type="text"
                           class="form-control"
                           name="editorial"
                           placeholder="editorial" required>

                    @if ($errors->has('editorial'))
                        <span class="text-danger text-left">{{ $errors->first('editorial') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="isvn" class="form-label">ISVN</label>
                    <input value="{{ $libro->isvn }}"
                           type="text"
                           class="form-control"
                           name="isvn"
                           placeholder="isvn" required>

                    @if ($errors->has('isvn'))
                        <span class="text-danger text-left">{{ $errors->first('isvn') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="total" class="form-label">Total</label>
                    <input value="{{ $libro->total }}"
                           type="text"
                           class="form-control"
                           name="total"
                           placeholder="total" required>

                    @if ($errors->has('total'))
                        <span class="text-danger text-left">{{ $errors->first('total') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input value="{{ $libro->foto }}"
                           type="text"
                           class="form-control"
                           name="foto"
                           placeholder="foto" required>

                    @if ($errors->has('foto'))
                        <span class="text-danger text-left">{{ $errors->first('foto') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="pdf" class="form-label">PDF</label>
                    <input value="{{ $libro->pdf }}"
                           type="text"
                           class="form-control"
                           name="pdf"
                           placeholder="pdf" required>

                    @if ($errors->has('pdf'))
                        <span class="text-danger text-left">{{ $errors->first('pdf') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Save changes</button>
                <a href="{{ route('libro.index') }}" class="btn btn-default">Back</a>
            </form>
            @endforeach
        </div>

    </div>
@endsection
