
                <form id="ikiubah" action="{{ ('/update'.$ikilodatane->id) }}" method="POST">
                    @csrf
                    <div class="form-group ml-4 mt-3">
                        <label>NAMA</label>
                        <input type="text" name="nama" class="form-control" value="{{ $ikilodatane->nama }}" required>
                    </div>
                    <div class="form-group ml-4 mt-3">
                        <label>NIP</label>
                        <input type="text" name="nip" class="form-control" value="{{ $ikilodatane->nip }}" required>
                    </div>
                    <div class="form-group ml-4 mt-3">
                        <label>JABATAN</label>
                        <input type="text" name="jabatan" class="form-control" value="{{ $ikilodatane->jabatan }}" required>
                    </div>
                    <div class="form-group ml-4 mt-3">
                        <label>GOLONGAN</label>
                        <input type="text" name="gol" class="form-control" value="{{ $ikilodatane->gol }}" required>
                    </div>
                    <div class="form-group ml-4 mt-3">
                        <label>ALAMAT</label>
                        <input type="text" name="alamat" class="form-control" value="{{ $ikilodatane->alamat }}" required>
                    </div>
                    <div class="form-group ml-4 mt-3">
                        <label>NOMOR HP</label>
                        <input type="text" name="no_hp" class="form-control" value="{{ $ikilodatane->no_hp }}" required>
                    </div>
                    <div class="form-group ml-4 mt-3">
                        <button type="submit" class="btn btn-primary">KIRIM DATA</button>
                    </div>
                </form>
