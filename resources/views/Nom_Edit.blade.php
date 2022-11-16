    <!-- Main row -->
    <div class="row">
      <div class="col-md-12 mt-1">
        <div class="card">
          <div class="card-header border-transparent">
            <h3 class="card-title">UPDATE PEGAWAI</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
 
            </div>
           </div>

          <!-- /.card-header -->
          <div class="card-body p-0">

    <div class="row">
        <div class="col-lg-8">
            <form action="{{ ('/update'.$data->id) }}" method="POST">
                @csrf
                <div class="form-group ml-4 mt-3">
                    <label>NAMA</label>
                    <input type="text" name="nama" class="form-control" value="{{ $data->nama }}">
                </div>
                <div class="form-group ml-4 mt-3">
                    <label>NIP</label>
                    <input type="text" name="nip" class="form-control"value="{{ $data->nip }}">
                </div>
                <div class="form-group ml-4 mt-3">
                    <label>JABATAN</label>
                    <input type="text" name="jabatan" class="form-control"value="{{ $data->jabatan }}">
                </div>
                <div class="form-group ml-4 mt-3">
                    <label>GOLONGAN</label>
                    <input type="text" name="gol" class="form-control"value="{{ $data->gol }}">
                </div>
                <div class="form-group ml-4 mt-3">
                    <label>ALAMAT</label>
                    <input type="text" name="alamat" class="form-control"value="{{ $data->alamat }}">
                </div>
                <div class="form-group ml-4 mt-3">
                    <label>NOMOR HP</label>
                    <input type="text" name="no_hp" class="form-control"value="{{ $data->no_hp }}">
                </div>
                <div class="form-group ml-4 mt-3">
                    <button type="submit" class="btn btn-primary">KIRIM DATA</button>
                </div>
            </form>
        </div>
    </div>

            </div>
            <!-- /.table-responsive -->
          </div>
        </div>
      </div>
    </div>
</section>

