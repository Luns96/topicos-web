@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center mt-1">
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
                                        <input type="text" class="form-control" name="ci" value="{{ $personal->ci }}">
                                        {{-- <small name="passwordHelpBlock" class="form-text text-muted">
                                            Enter your CI
                                        </small> --}}
                                    </div>
                                    <label for="nickname" class="col-sm-2 col-form-label">Nickname</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="nickname" value="{{ $usuario->name }}">
                                    </div>
                                </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="name" value="{{ $personal->name }}">
                                </div>
                                <label for="surname" class="col-sm-2 col-form-label">Surname</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="surname" value="{{ $personal->surname }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                    <label for="age" class="col-sm-2 col-form-label">Age</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" name="age" value="{{ $personal->age }}">
                                    </div>
                                    <label for="number" class="col-sm-2 col-form-label">Cell number</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="number" value="{{ $personal->number }}">
                                    </div>
                                </div>
                            <div class="form-group row">
                                <label for="address" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <input type="address" class="form-control" name="address" value="{{ $personal->address }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="email" value="{{ $usuario->email }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password" placeholder="Never show">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="rol" class="col-sm-2 col-form-label">Occupation</label>
                                <div class="col-sm-10">
                                    <select name="rol" class="form-control">
                                            @foreach ($roles as $item => $value)
                                            @if ($usuario->hasRole($value))
                                                <option value="{{ $value }}" selected>{{ $value }}</option>
                                            @else
                                                <option value="{{ $value }}">{{ $value }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="justify-content-end">
                                <input type="button" value="Send" class="btn btn-success" data-toggle="modal" data-target="#Modal">
                                <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="ModalLabel">Confirm</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          Are you sure?
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                          <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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
            </div>
        </div>
    </div>
@endsection