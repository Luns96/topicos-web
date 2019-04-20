@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Account</div>
                        <form action="{{ route('user.update', $usuario->id)}}" method="post">
                            <div class="card-body">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label for="ci" class="col-sm-2 col-form-label">Cedula</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" readonly name="ci" value="{{ $personal->ci }}">
                                        {{-- <small name="passwordHelpBlock" class="form-text text-muted">
                                            Enter your CI
                                        </small> --}}
                                    </div>
                                    <label for="nickname" class="col-sm-2 col-form-label">Nickname</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" readonly name="nickname" value="{{ $usuario->name }}">
                                    </div>
                                </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" readonly name="name" value="{{ $personal->name }}">
                                </div>
                                <label for="surname" class="col-sm-2 col-form-label">Surname</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" readonly name="surname" value="{{ $personal->surname }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                    <label for="age" class="col-sm-2 col-form-label">Age</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" readonly name="age" value="{{ $personal->age }}">
                                    </div>
                                    <label for="number" class="col-sm-2 col-form-label">Cell number</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" readonly name="number" value="{{ $personal->number }}">
                                    </div>
                                </div>
                            <div class="form-group row">
                                <label for="address" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <input type="address" class="form-control" readonly name="address" value="{{ $personal->address }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" readonly name="email" value="{{ $usuario->email }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="rol" class="col-sm-2 col-form-label">Occupation</label>
                                <div class="col-sm-10">
                                    @foreach ($roles as $item => $value)
                                        @if ($usuario->hasRole($value))
                                            <input type="text" class="form-control" readonly name="rol" value="{{ $value }}">
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Create at</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" readonly name="email" value="{{ $usuario->created_at }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Update at</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" readonly name="email" value="{{ $usuario->updated_at }}">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection