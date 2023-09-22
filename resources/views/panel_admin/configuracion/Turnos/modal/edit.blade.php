<div class="modal fade" id="basicModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
            <div class="basic-form">
                             <form>
                                @csrf
                                <div class="mb-3">
                                    <input class="form-control form-control-lg" type="text" placeholder="form-control-lg">
                                </div>
                                <div class="mb-3">
                                    <input class="form-control default" type="text" placeholder="Default input">
                                </div>
                                <div class="mb-3">
                                    <input class="form-control form-control-sm" type="text" placeholder="form-control-sm">
                                </div>
                            </form>
                        </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

