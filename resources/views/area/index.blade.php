@extends('layouts.app-master')

@section('content')


    <div class="bg-light p-4 rounded">
        <h2>Areas</h2>
        <div class="lead">
            Manage your posts here.
            <a href="{{ route('area.create') }}" class="btn btn-primary btn-sm float-right">Add post</a>
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
            @foreach ($area as $key => $areas)
                <tr>
                    <td>{{ $areas->id }}</td>
                    <td>{{ $areas->nombre }}</td>
                    <td>
                        <a class="btn btn-info btn-sm" href="{{ route('area.show', $areas->id) }}">Show</a>
                    </td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="{{ route('area.edit', $areas->id) }}">Edit</a>
                    </td>
                    <td>
                        {!! Form::open(['method' => 'DELETE','route' => ['area.destroy', $areas->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>

        <div class="d-flex">
            {!! $area->links() !!}
        </div>

    </div>
@endsection
