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
          <div class="card-body p-0" >
            <div class="table-responsive">
              <table class="table m-0">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA PEGAWAI</th>
                        <th>NIP</th>
                        <th>JABATAN</th>
                        <th>GOL</th>
                        <th>ALAMAT</th>
                        <th>NO HP</th>
                        <th>AKSI</th>
                      </tr>
                      </thead>
                      <tbody>
                        @php
                        $i=1
                        @endphp
                    
                        @foreach ($data as $peg) 
                      <tr>
                        <td>{{ $i++ }} </td>
                        <td>{{ $peg->nama }}</td>
                        <td>{{ $peg->nip }}</td>
                        <td>{{ $peg->jabatan }}</td>
                        <td>{{ $peg->gol }}</td>
                        <td>{{ $peg->alamat}}</td>
                        <td>{{ $peg->no_hp }}</td>
                        <td class="project-actions">
                          <a class="btn btn-info btn-sm " data-toggle="modal" data-target="#modal-detail" href="#">
                              <i class="fas fa-eye">
                              </i>
                          </a>
                          <a class="btn btn-info btn-sm " data-toggle="modal" data-target="#modal-edit{{ $peg->id }}" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                        </a>
                          <a class="btn btn-danger btn-sm" onclick ="return confirm ('Yakin Bro?')" href="{{ url('delete'.$peg->id) }}">
                              <i class="fas fa-trash">
                              </i>
                          </a>
                      </td>

                      </tr>
                      @endforeach
                </tbody>
          </div>
          <!-- /.card-body -->

        </div>
      </div>
    </div>

</section>
<!-- Modal Tambah---->
<div class="modal fade" id="modal-tambah"  style="display: none;"aria-hidden="true">
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
                              <input type="text" name="nama"  class="form-control"required>
                          </div>
                          <div class="form-group ml-4 mt-3">
                              <label>NIP</label>
                              <input type="text" name="nip" class="form-control"required>
                          </div>
                          <div class="form-group ml-4 mt-3">
                              <label>JABATAN</label>
                              <input type="text" name="jabatan" class="form-control"required>
                          </div>
                          <div class="form-group ml-4 mt-3">
                              <label>GOLONGAN</label>
                              <input type="text" name="gol" class="form-control"required>
                          </div>
                          <div class="form-group ml-4 mt-3">
                              <label>ALAMAT</label>
                              <input type="text" name="alamat" class="form-control"required>
                          </div>
                          <div class="form-group ml-4 mt-3">
                              <label>NOMOR HP</label>
                              <input type="text" name="no_hp" class="form-control"required>
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

<!-- Modal Edit---->
@foreach ($data as $peg1)
<div class="modal fade" id="modal-edit{{ $peg1->id }}" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title">Edit Pegawai</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                          </button>
                  </div>
                  <div class="modal-body" >
                    <form action="{{ ('/update'.$peg1->id) }}" method="POST">
                      @csrf
                      <div class="form-group ml-4 mt-3">
                          <label>NAMA</label>
                          <input type="text" name="nama" class="form-control" value="{{ $peg1->nama }}"required>
                      </div>
                      <div class="form-group ml-4 mt-3">
                          <label>NIP</label>
                          <input type="text" name="nip" class="form-control"value="{{ $peg1->nip }}"required>
                      </div>
                      <div class="form-group ml-4 mt-3">
                          <label>JABATAN</label>
                          <input type="text" name="jabatan" class="form-control"value="{{ $peg1->jabatan }}"required>
                      </div>
                      <div class="form-group ml-4 mt-3">
                          <label>GOLONGAN</label>
                          <input type="text" name="gol" class="form-control"value="{{ $peg1->gol }}"required>
                      </div>
                      <div class="form-group ml-4 mt-3">
                          <label>ALAMAT</label>
                          <input type="text" name="alamat" class="form-control"value="{{ $peg1->alamat }}"required>
                      </div>
                      <div class="form-group ml-4 mt-3">
                          <label>NOMOR HP</label>
                          <input type="text" name="no_hp" class="form-control"value="{{ $peg1->no_hp }}"required>
                      </div>
                      <div class="form-group ml-4 mt-3">
                          <button type="submit" class="btn btn-primary">KIRIM DATA</button>
                      </div>
                  </form>  
                  </div>

    </div>
  </div>
</div>
@endforeach
<script>
  function edit(ikiid){
    $.ajax({
        url: "get_data",
        method: "POST",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {
            dataId: ikiid
        },
    }).done(function (response) {
    }).fail(function (jqXHR, textStatus) {
    });
    }
</script>
@endsection



