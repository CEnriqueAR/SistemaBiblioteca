@extends('layouts.app-master')

@section('content')


    <div class="bg-light p-4 rounded">
        <h2>Categoria</h2>
        <div class="lead">
            Manage your posts here.
            <a href="{{ route('categoria.create') }}" class="btn btn-primary btn-sm float-right">Add Categoria</a>
        </div>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-bordered">
            <tr>
                <th width="1%">No</th>
                <th>Name</th>
                <th width="3%" colspan="3">Action</th>
            </tr>
            @foreach ($categoria as $key => $categorias)
                <tr>
                    <td>{{ $categorias->id }}</td>
                    <td>{{ $categorias->nombre }}</td>
                    <td>
                        <a class="btn btn-info btn-sm" href="{{ route('categoria.show', $categorias->id) }}">Show</a>
                    </td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="{{ route('categoria.edit', $categorias->id) }}">Edit</a>
                    </td>
                    <td>
                        {!! Form::open(['method' => 'DELETE','route' => ['categoria.destroy', $categorias->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>

        <div class="d-flex">
            {!! $categoria->links() !!}
        </div>

    </div>
@endsection
