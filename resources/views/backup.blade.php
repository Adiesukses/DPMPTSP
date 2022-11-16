@extends('layout.home')
@section('halaman')
<section class="content">

   
    <!-- Main row -->
    <div class="row">
      <div class="col-md-12 mt-1">
        <div class="card">
          <div class="card-header border-transparent">
            <h3 class="card-title">NOMINATIF PEGAWAI</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
 
            </div>
                  <br>
                  <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#modal-tambah">+ Tambah Pegawai</button>

          </div>

          <!-- /.card-header -->
          <div class="card-body p-0" id="read">
           
          </div>
          <!-- /.card-body -->

        </div>
      </div>
    </div>

</section>

@endsection

<!-- Modal Tambah---->
<div class="modal fade" id="modal-tambah" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title">TAMBAH PEGAWAI</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
          </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-lg-12">
                      <form action="{{ ('/tambahpeg') }}" method="POST">
                          @csrf
                          <div class="form-group ml-4 mt-3">
                              <label>NAMA</label>
                              <input type="text" name="nama" class="form-control">
                          </div>
                          <div class="form-group ml-4 mt-3">
                              <label>NIP</label>
                              <input type="text" name="nip" class="form-control">
                          </div>
                          <div class="form-group ml-4 mt-3">
                              <label>JABATAN</label>
                              <input type="text" name="jabatan" class="form-control">
                          </div>
                          <div class="form-group ml-4 mt-3">
                              <label>GOLONGAN</label>
                              <input type="text" name="gol" class="form-control">
                          </div>
                          <div class="form-group ml-4 mt-3">
                              <label>ALAMAT</label>
                              <input type="text" name="alamat" class="form-control">
                          </div>
                          <div class="form-group ml-4 mt-3">
                              <label>NOMOR HP</label>
                              <input type="text" name="no_hp" class="form-control">
                          </div>
                          <div class="form-group ml-4 mt-3 text-end">
                              <button type="submit" class="btn btn-primary float-right">KIRIM DATA</button>
                          </div>
                      </form>
                  </div>
              </div>
              </div>

    </div>
  </div>
</div>

<!-- Modal ---->
<div class="modal fade" id="modal-edit" style="display: none;" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title">Edit Pegawai</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                          </button>
                  </div>
                  <div class="modal-body" id=editpage>
                     
                  </div>
                  <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
    </div>
  </div>
</div>

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

<script>
        $(document).ready(function() {
            read()
        });
        // Read Database
        function read() {
            $.get("{{ ('/read') }}", {}, function(data, status) {
                $("#read").html(data);
            });
        }
        function create() {
            $.get("{{ ('/Nom_Tambah') }}", {}, function(data, status) {
                // $("exampleModalLabel").html('Tambah Pegawai')
                // $("#page").html(data);
                $("#modal-tambah").modal('show');
            });
        }
 


</script>




