@foreach ($teacher as $items)
    @if ($items->id == $item->personal_id)
        <div class="col">
            <div class="text-center">
                    {{ $items->name }}
            </div>
        </div>
        <div class="col text-center">
            <button class="btn"><a href="{{ route('class.show', $item->time)}}" class="fa fa-eye"></a></button>
            @can('delete-user')
                @include('section.class.delete',['item' => $item])
            @endcan
        </div>
    @endif
@endforeach