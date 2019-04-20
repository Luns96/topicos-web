<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#Modal">
        Add Section
</button>

<!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Add</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <form action="{{ route('section.store') }}" method="post">
        <div class="modal-body">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Section name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="section" placeholder="Name">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Confirm</button>
        </div>
    </form>
    </div>
</div>
</div>