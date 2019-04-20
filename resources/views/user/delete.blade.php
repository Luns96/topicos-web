<form action="{{ route('user.destroy', $item->id) }}" method="post" style="display:inline-block">
    @csrf
    @method('DELETE')
        <button type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</button>
</form>