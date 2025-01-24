<div class="d-flex gap-2">
    <button onclick="edit({{ $d->id }})" data-bs-toggle="modal"
            data-bs-target=".edit-modal-lg" class="btn btn-primary shadow btn-sm sharp me-1">
        <i class="fas fa-pencil-alt"></i>
    </button>
    <button onclick="destroy({{ $d->id }})" data-delete-btn-id='{{$d->id}}' class="btn btn-danger shadow btn-sm sharp">
        <i class="fa fa-trash"></i>
    </button>
</div>
