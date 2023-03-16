@extends('layouts.app-master')

@section('content')

    <div class="bg-light p-4 rounded">
    <h2>Categoria</h2>
    <div class="lead">
        Manage your posts here.
        <a href="{{ route('libro.create') }}" class="btn btn-primary btn-sm float-right">Add Libro</a>
    </div>

    <div class="mt-2">
        @include('layouts.partials.messages')
    </div>

    <table class="table table-bordered">
        <tr>
            <th width="1%">No</th>
            <th>Name</th>
            <th>Categoria</th>
            <th width="3%" colspan="3">Action</th>
        </tr>
        @foreach ($libros as $key => $libro)
            <tr>
                <td>{{ $libro->id }}</td>
                <td>{{ $libro->name }}</td>
                <td>{{$libro->nombre_categorias}}</td>

                <td>

                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('libro.show', $libro->id) }}">Show</a>
                </td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('libro.edit', $libro->id) }}">Edit</a>
                </td>
                <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['libro.destroy', $libro->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>

    <div class="d-flex">
        {!! $libros->links() !!}
    </div>


    </div>
@endsection
