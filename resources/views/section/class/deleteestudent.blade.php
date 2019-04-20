<form action="{{ route('student.destroy', $item->id) }}" method="post" style="display:inline-block">
        @csrf
        @method('DELETE')
        <button type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')"><a class="fa fa-trash"></a></button>
</form>