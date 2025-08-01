 @foreach ($varian as $item)
     @php
         $semuaVarian = $item->produk->varian;
     @endphp
     <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
             <div class="modal-content">
                 <div class="modal-header">
                     <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah ke Keranjang</h1>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <form action="{{ route('keranjang.store') }}" method="post">
                     @csrf
                     <div class="modal-body">
                         <div class="input-group mb-3">
                             <label class="input-group-text" for="inputGroupSelect01">Pilih Warna</label>
                             <select class="form-select" id="inputGroupSelect01" name="id">
                                 <option selected>Pilih...</option>
                                 @foreach ($semuaVarian as $v)
                                     <option value="{{ $v->id }}">{{ $v->warna }}</option>
                                 @endforeach
                                 {{-- @foreach ($varian as $item) --}}
                                 {{-- <option value="1">One</option>
                                 <option value="2">Two</option>
                                 <option value="3">Three</option> --}}
                                 {{-- @endforeach --}}
                             </select>
                         </div>
                         <div class="input-group mb-3">
                             <span class="input-group-text">Jumlah</span>
                             {{-- <span class="input-group-text">0.00</span> --}}
                             <input type="number" class="form-control" value="1" min="1" name="jumlah">
                         </div>
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                         @if (Auth::user())
                             <button type="submit" class="btn btn-primary"><i class="bi bi-cart3" style="line-height: 0"></i></button>
                         @else
                             <button type="submit" class="btn btn-secondary" disabled><i class="bi bi-cart3" style="line-height: 0"></i></button>
                         @endif
                     </div>
                 </form>
             </div>
         </div>
     </div>
 @endforeach
