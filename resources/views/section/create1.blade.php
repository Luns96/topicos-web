@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-1">
                    <div class="card-header"><h1>New class</h1></div>
                    <form action="{{ route('user.store') }}" method="post">
                        <div class="card-body">
                            @csrf
                            <div class="form-group col row">
                                <label for="name" class="col-form-label">Name</label>
                                <div class="col">
                                    <input type="name" class="form-control" name="name" placeholder="name">
                                </div>
                            </div>
                            <div class="form-group row col">
                                <label for="id" class="col-form-label">Teacher</label>
                                <div class="col">
                                    <select name="id" class="form-control">
                                        @foreach ($teacher as $item => $value)
                                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group  col row">
                                <label class="input-group-text" for="day">day</label>
                                <select class="custom-select col-sm-5" id="day">
                                <option selected>Select Day</option>
                                <option value="1">Monday</option>
                                <option value="2">Tuesday</option>
                                <option value="3">Wednesday</option>
                                <option value="4">Thrusday</option>
                                <option value="5">Friday</option>
                                </select>
                                <label class="input-group-text" for="day">time</label>
                                <select class="custom-select col-sm-5" id="day">
                                <option selected>Select Time</option>
                                <option value="1">6:00-8:00 AM</option>
                                <option value="2">8:00-10:00 AM</option>
                                <option value="3">10:00-12:00 AM</option>
                                </select>
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
                                            <button type="submit" class="btn btn-primary">Create</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection