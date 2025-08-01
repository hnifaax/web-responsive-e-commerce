@foreach ($user as $item)
    <div class="modal fade" id="kandidat-hapus{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">HAPUS DATA</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="/admin/hapuss/{{ $item->id }}" enctype="multipart/form-data ">
                    @csrf
                    {{ method_field('DELETE') }}
                    <div class="modal-body">
                        <div class="mb-3 col-12 mb-0">
                            <div class="alert alert-warning">
                                <h6 class="alert-heading fw-bold mb-1">Anda yakin ingin menghapus data kandidat ini?</h6>
                                <p class="mb-0">Sekali menghapus, data ini tidak akan bisa dikembalikan lagi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">HAPUS</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
