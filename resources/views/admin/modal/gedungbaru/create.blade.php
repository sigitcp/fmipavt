<div class="modal" tabindex="-1" role="dialog" id="create">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah denah gedung baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="{{ route('gedungbaru.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="small mb-1" for="nama">Nama Ruangan</label>
                        <input class="form-control py-4 @error('nama') is-invalid @enderror" id="nama" name="nama" type="text" placeholder="Nama Ruangan" value="{{old('nama')}}" required />
                        @error('nama')
                        <div class="invalid-feedback">
                            <span>{{$message}}</span>
                        </div>
                        @enderror
                    </div>
                       
                    <div class="form-group">
                        <label class="small mb-1" for="luas">Luas Ruangan (m</span><sup>2</sup>)</label>
                        <input class="form-control py-4" id="luas" name="luas" type="number" placeholder="Luas Ruangan" value="{{old('luas')}}" required />
                    </div>
                    <div class="form-group">
                        <label class="small mb-1" for="kapasitas">Kapasitas Ruangan (orang)</label>
                        <input class="form-control py-4" id="kapasitas" name="kapasitas" type="number" placeholder="Kapasias Ruangan" value="{{old('kapasitas')}}" required />
                    </div>

                    <div class="form-group">
                        <label class="form-label">Upload Gambar Denah (jpg, png, gif < 5mb)</label>
                        <input class="form-control @error('denah') is-invalid @enderror" type="file" id="denah" name="denah" onchange="previewImage()" required>
                        @error('denah')
                        <div class="invalid-feedback">
                            <span>{{$message}}</span>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <img class="btn shadow-inset img-preview" alt="">
                    </div>

                    <div>
                        <input type="hidden" id="id_gedung" name="gedung_id" value="1">
                    </div>
                    <div class="form-group mt-4 mb-0">
                        <button class="btn btn-primary btn-block text-success" type="submit" >Create</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>