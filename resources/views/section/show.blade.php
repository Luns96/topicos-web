@extends('layouts.app')

@section('content')

<div class="card mr-1 ml-1">
    <div class="card-header"><h1>Class Time</h1></div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Section {{ $class->name }}</th>
                    <th scope="col" class="text-center">Monday</th>
                    <th scope="col" class="text-center">Tuesday</th>
                    <th scope="col" class="text-center">Wednesday</th>
                    <th scope="col" class="text-center">Thrusday</th>
                    <th scope="col" class="text-center">Friday</th>
                    <th scope="col" class="text-center">Satuday</th>
                    <th scope="col" class="text-center">Sunday</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">6:00-8:00 AM</th>
                    <td>
                        @foreach ($schedule as $item)
                            @if ($item->time == $id.'11')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($schedule as $item)
                            @if ($item->time == $id.'21')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($schedule as $item)
                            @if ($item->time == $id.'31')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($schedule as $item)
                            @if ($item->time == $id.'41')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($schedule as $item)
                            @if ($item->time == $id.'51')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($schedule as $item)
                            @if ($item->time == $id.'61')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($schedule as $item)
                            @if ($item->time == $id.'71')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th scope="row">8:00-10:00 AM</th>
                    <td>
                        @foreach ($schedule as $item)
                            @if ($item->time == $id.'12')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($schedule as $item)
                            @if ($item->time == $id.'22')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($schedule as $item)
                            @if ($item->time == $id.'32')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($schedule as $item)
                            @if ($item->time == $id.'42')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($schedule as $item)
                            @if ($item->time == $id.'52')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($schedule as $item)
                            @if ($item->time == $id.'62')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($schedule as $item)
                            @if ($item->time == $id.'72')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th scope="row">10:00-12:00 AM</th>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'13')
                            @include('section.crud')
                            @endif
                        @endforeach    
                    </td>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'23')
                            @include('section.crud')
                            @endif
                        @endforeach    
                    </td>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'33')
                            @include('section.crud')
                            @endif
                        @endforeach    
                    </td>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'43')
                            @include('section.crud')
                            @endif
                        @endforeach    
                    </td>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'53')
                            @include('section.crud')
                            @endif
                        @endforeach    
                    </td>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'63')
                            @include('section.crud')
                            @endif
                        @endforeach    
                    </td>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'73')
                            @include('section.crud')
                            @endif
                        @endforeach    
                    </td>
                </tr>
                <tr>
                    <th scope="row">0:00-2:00 PM</th>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'14')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'24')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'34')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'44')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'54')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'64')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'74')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th scope="row">2:00-4:00 PM</th>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'15')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'25')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'35')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'45')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'55')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'65')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'75')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th scope="row">4:00-6:00 PM</th>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'16')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'26')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'36')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'46')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'56')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'66')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'76')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th scope="row">6:00-8:00 PM</th>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'17')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'27')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'37')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'47')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'57')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'67')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                    <td>
                         @foreach ($schedule as $item)
                            @if ($item->time == $id.'77')
                            @include('section.crud')
                            @endif
                        @endforeach
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection