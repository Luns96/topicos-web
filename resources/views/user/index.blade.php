@extends('layouts.app')

@section('content')

<div class="card ml-3 mr-3 mt-1 mb-1">
    <div class="card-header"><h1>Search</h1></div>
    <div class="card-body">
        <form class="active-cyan-4" action="{{ route('user.index') }}" method="get">
            @csrf
            <input class="form-control form-control-sm mr-3 w-75" type="text" name="find" placeholder="Search" aria-label="Search">
            <button type="submit"><i class="fas fa-search" aria-hidden="true"></i></button>
        </form>
        @if ( $find != null )
        <table class="table table-striped table-responsive-lg table-responsive-xl">
            <thead class="thead-dark">
                <th>Name</th>
                <th>Email</th>
                <th>Rol</th>
                @can('read-user')
                <th>Acciones</th>
                @endcan
            </thead>
            <tbody>
                    @foreach ($find as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->roles->implode('name',',') }}</td>
                            <td>
                                @can('read-user')
                                    <a href="{{ route('user.show', $item->id) }}" class="btn btn-blue-grey">Ver</a>
                                @endcan
                                @can('update-user')
                                    <a href="{{ route('user.edit', $item->id) }}" class="btn btn-primary">Editar</a>
                                @endcan
                                @can('delete-user')
                                    @include('user.delete',['item' => $item])
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>

    <div class="card ml-3 mr-3">
        <div class="card-header"><h1>Accounts List</h1></div>
        <div class="card-body">
            @can('create-user')
            <div class="mb-1">
                <a href="{{ route('user.create') }}" class="btn btn-success">Add accounts</a>
            </div>
            @endcan
            <table class="table table-striped table-responsive-lg table-responsive-xl">
                <thead class="thead-dark">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Rol</th>
                    @can('read-user')
                    <th>Acciones</th>
                    @endcan
                </thead>
                <tbody>
                    @foreach ($users as $item)
                        <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->roles->implode('name',',') }}</td>
                        <td>
                            @can('read-user')
                                <a href="{{ route('user.show', $item->id) }}" class="btn btn-blue-grey">Ver</a>
                            @endcan
                            @can('update-user')
                                <a href="{{ route('user.edit', $item->id) }}" class="btn btn-primary">Editar</a>
                            @endcan
                            @can('delete-user')
                                @include('user.delete',['item' => $item])
                            @endcan
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>
@endsection