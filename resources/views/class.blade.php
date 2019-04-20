@extends('layouts.app')

@section('content')
<div class="card mr-1 ml-1">
        <div class="card-header"><h1>Class Time</h1></div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Class</th>
                        <th scope="col">Monday</th>
                        <th scope="col">Tuesday</th>
                        <th scope="col">Wednesday</th>
                        <th scope="col">Thrusday</th>
                        <th scope="col">Friday</th>
                        <th scope="col">Satuday</th>
                        <th scope="col">Sunday</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">6:00-8:00 AM</th>
                        <td>
                            @foreach ($class as $item)
                                @if (substr($item->time,-2) == '11')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach ($class as $item)
                                @if (substr($item->time,-2) == '21')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach ($class as $item)
                                @if (substr($item->time,-2) == '31')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach ($class as $item)
                                @if (substr($item->time,-2) == '41')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach ($class as $item)
                                @if (substr($item->time,-2) == '51')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach ($class as $item)
                                @if (substr($item->time,-2) == '61')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach ($class as $item)
                                @if (substr($item->time,-2) == '71')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">8:00-10:00 AM</th>
                        <td>
                            @foreach ($class as $item)
                                @if (substr($item->time,-2) == '12')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach ($class as $item)
                                @if (substr($item->time,-2) == '22')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach ($class as $item)
                                @if (substr($item->time,-2) == '32')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach ($class as $item)
                                @if (substr($item->time,-2) == '42')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach ($class as $item)
                                @if (substr($item->time,-2) == '52')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach ($class as $item)
                                @if (substr($item->time,-2) == '62')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach ($class as $item)
                                @if (substr($item->time,-2) == '72')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">10:00-12:00 AM</th>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '13')
                                @include('showclass')
                                @endif
                            @endforeach    
                        </td>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '23')
                                @include('showclass')
                                @endif
                            @endforeach    
                        </td>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '33')
                                @include('showclass')
                                @endif
                            @endforeach    
                        </td>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '43')
                                @include('showclass')
                                @endif
                            @endforeach    
                        </td>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '53')
                                @include('showclass')
                                @endif
                            @endforeach    
                        </td>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '63')
                                @include('showclass')
                                @endif
                            @endforeach    
                        </td>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '73')
                                @include('showclass')
                                @endif
                            @endforeach    
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">0:00-2:00 PM</th>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '14')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '24')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '34')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '44')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '54')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '64')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '74')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2:00-4:00 PM</th>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '15')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '25')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '35')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '45')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '55')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '65')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '75')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4:00-6:00 PM</th>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '16')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '26')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '36')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '46')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '56')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '66')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '76')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">6:00-8:00 PM</th>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '17')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '27')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '37')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '47')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '57')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '67')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                        <td>
                             @foreach ($class as $item)
                                @if (substr($item->time,-2) == '77')
                                @include('showclass')
                                @endif
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection