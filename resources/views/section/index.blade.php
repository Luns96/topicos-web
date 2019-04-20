@extends('layouts.app')

@section('content')
    <div class="card ml-3 mr-3">
        <div class="card-header"><h1>Section List</h1></div>
        <div class="card-body">
            @can('create-user')
            <div class="mb-1">
                @include('section.create')
            </div>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @endcan
            <table class="table table-striped table-responsive-lg table-responsive-xl">
                <thead class="thead-dark">
                    <th>section</th>
                    @can('read-user')
                    <th>Acciones</th>
                    @endcan
                </thead>
                <tbody>
                    @foreach ($section as $item)
                        <tr>
                        <td>{{ $item->name }}</td>
                        <td>
                            @can('read-user')
                                <a href="{{ route('section.show', $item->id)}}" class="btn btn-blue-grey">Ver</a>
                            @endcan
                            @can('create-user')
                                <a href="{{ route('class.store', $item->id )}}" class="btn btn-primary">Edit</a>
                            @endcan
                            @can('delete-user')
                                @include('section.delete',['item' => $item])
                            @endcan
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $section->links() }}
        </div>
    </div>
@endsection