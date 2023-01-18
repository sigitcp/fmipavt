<div class="modal fade" id="modaldelete" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title mb-0 display-5">Hapus data</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    {{-- <span aria-hidden="true">×</span> --}}
                </button>
            </div>
            <div class="modal-body">
                <p>Data yang ada terhapus akan hilang secara permanen. Anda yakin ingin menghapus data ini?</p>
            </div>
            <form action="{{ route('gedungbiotek.destroy',$bio['id']) }}" method="POST" class="d-inline">
                @method('DELETE')
                @csrf
            <div class="modal-footer">
                {{-- <button type="button" name="delete" class="btn btn-sm btn-primary">Yes</button> --}}
                <button class="btn btn-sm btn-primary">Delete</button>
            </form>
                <button type="button" class="btn btn-primary text-danger ml-auto" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true">Close</span></button>
            </div>
        </div>
    </div>
</div>