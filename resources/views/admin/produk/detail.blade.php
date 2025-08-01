@foreach ($varian as $item)
    <div class="modal fade" id="kandidat-data{{ $item->produk_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Produk {{ $item->produk->nama }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body data-pribadi">
                    <p>{{ $item->produk->deskripsi }}</p>
                    <p>{{ $item->produk->harga }}</p>
                    <div class="row">
                        @foreach ($produk[$item->produk_id]->varian as $var)
                            <div class="col-lg-4 col-12" style="margin-top: -50px;">
                                <img src="../../img/produk/{{ $var->img }}" alt="" style="width: 80%;">
                                <div class="d-flex gap-4" style="margin-top: -45px;">
                                    <div>
                                        <h5>Warna</h5>
                                        <p style="margin-top: -20px;">{{ $var->warna }}</p>
                                    </div>
                                    <div>
                                        <h5>Stok</h5>
                                        <p style="margin-top: -20px;">{{ $var->stok }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <hr>
                    <h3>Fitur :</h3>
                    @foreach ($produk[$item->produk_id]->fitur as $fitur)
                        <div class="d-flex gap-2">
                            <p>{{ $loop->iteration }}.</p>
                            <p>{{ $fitur->nama }}</p>
                        </div>
                    @endforeach
                    <!-- /Account -->
                </div>

            </div>

        </div>
    </div>
@endforeach
