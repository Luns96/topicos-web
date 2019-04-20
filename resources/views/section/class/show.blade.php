@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Class List</div>
                        <div class="card-body">
                            <div class="form-group row">
                                <div>
                                    <h1>Teacher</h1>
                                    <hr>
                                    @foreach ($teacher as $item)
                                        @if ($id == $item->time)
                                            <h3>{{ $item->name }}</h3>        
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group row">
                                <div>
                                    <h1>Student</h1>        
                                    @foreach ($student as $item)
                                        <div>
                                            @if ($id == $item->time)
                                                <div class="col">
                                                    {{ $item->name }}
                                                    @include('section.class.deleteestudent')
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection