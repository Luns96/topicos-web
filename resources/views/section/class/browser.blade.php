@foreach ($teacher as $items)
    @if ($items->id == $item->personal_id)
        {{ $items->name }}
    @endif
@endforeach