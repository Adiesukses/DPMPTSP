@extends('layout.home')
@section('halaman')
<section class="content">
   <!-- Main row -->
    <div class="row">
      <div class="col-md-12 mt-1">
        <div class="card">
          <div class="card-header border-transparent">
            <h3 class="card-title">SPPD KEPALA DINAS</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
 
            </div>
                  <br>
                  <a href ="{{ url('kadinsppd2') }}" type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#modal-tambah">+ Tambah SPPD</a>
                  <button type="button" class="btn btn-SUCCESS mt-3" data-toggle="modal" data-target="#modal-rek">+ Tambah Rekening</button>

          </div>

          <!-- /.card-header -->
          <div class="card-body p-0" >
            <div class="table-responsive">
              <table class="table m-0">
                <thead>
                    <tr>

                        <th>NO</th>
                        <th >NAMA PENGIKUT</th>
                        <th >TANGGAL</th>
                        <th >BERANGKAT</th>
                        <th>KEMBALI </th>
                        <th>TUJUAN</th>
                        <th>MAKSUD</th>
                        <th class="text-center">AKSI</th>
                      </tr>
                      </thead>
                      <tbody>
                        @php
                        $i=1
                        @endphp
                    
                        @foreach ($data as $sppd) 
                      <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $sppd->nama }}</td>
                        <td>{{ date('d F Y',strtotime($sppd->tanggal_sppd)) }}</td>
                        <td>{{ date('d F Y',strtotime($sppd->tanggal_berangkat)) }}</td>
                        <td>{{ date('d F Y',strtotime($sppd->tanggal_kembali)) }}</td>
                        <td class="col-2 " align = "justify">{{ $sppd->tujuan }}</td>
                        <td class="col-2 "align = "justify">{{ $sppd->maksud }}</td>
     
                        <td class="project-actions">
                          <a class="btn btn-success btn-sm "href="{{ url('kadinsppdctk/'.$sppd->id) }}" target="blank">
                              <i class="fas fa-print"> 1
                              </i>
                          </a>
                          <a class="btn btn-success btn-sm "href="{{ url('kadinsppdctk2/'.$sppd->id) }}" target="blank">
                            <i class="fas fa-print"> 2
                            </i>
                        </a>
                          <a class="btn btn-info btn-sm " data-toggle="modal" data-target="#modal-edit" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                        </a>
                          <a class="btn btn-danger btn-sm" onclick ="return confirm ('Yakin Bro?')" href="">
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

<div class="modal fade" id="modal-tambah"  style="display: none;"aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
              <h4 class="modal-title">TAMBAH SPPD</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
        </div>
            <div class="modal-body">
                <form action="{{ ('/tambahsppd') }}" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col">
                      <label>NAMA</label>
                      <input name="nama" type="text" class="form-control" value=" MADA BAYU AJI" required>
                    </div>
                    
                    <div class="col">
                      <label>TANGGAL</label>
                       <input name="tanggal_sppd" type="date" class="form-control" required>
                    </div>
                  </div>
              <br>
                  <div class="row">
                    <div class="col">
                      <label>BERANGKAT</label>
                      <input name="tanggal_berangkat"type="date" class="form-control" required>
                    </div>
                    <div class="col">
                      <label>KEMBALI</label>
                      <input name="tanggal_kembali" type="date" class="form-control" required>
                    </div> 
                  </div>
                  <br>
                  <div class="row">
                    <div class="col">
                      <label>TUJUAN</label>
                      <textarea name="tujuan" class="form-control" required></textarea>
                    </div>
                    <div class="col">
                      <label>MAKSUD</label>
                      <textarea name="maksud"class="form-control" required></textarea>
                    </div>
                  </div>
                  <BR>
                  <div class="row">
                    <div class="col">
                      <label>KENDARAAN</label>
                      <select name="kendaraan" class="form-control select2 select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                        <option selected="selected" data-select2-id="3">Kendaraan Dinas (Roda Empat)</option>
                        <option data-select2-id="35">Kendaraan Dinas (Roda Empat)</option>
                        <option data-select2-id="36">Kendaraan Dinas (Roda Dua)</option>
                        <option data-select2-id="37">Kendaraan Umum (Pesawat)</option>
                        <option data-select2-id="38">Kendaraan Umum (Kereta Api)</option>
                        <option data-select2-id="39">Kendaraan Umum (Bus)</option>
                      </select>
                    </div>
                    <div class="col">
                      <label>PPTK</label>
                      <select name="pptk"class="form-control select2 select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                        <option selected="selected" data-select2-id="3">GUNTUR SETIAWAN S.Pd</option>
                        <option data-select2-id="35">GUNTUR SETIAWAN S.Pd</option>
                        <option data-select2-id="36">GUNTUR SETIAWAN S.Pd</option>
                        <option data-select2-id="37">GUNTUR SETIAWAN S.Pd</option>
                        <option data-select2-id="38">GUNTUR SETIAWAN S.Pd</option>
                        <option data-select2-id="39">GUNTUR SETIAWAN S.Pd</option>
                      </select>
                    </div>
                  </div>
                  <BR>
                    <div class="row">
                      <div class="col">
                        <label>DASAR PERJALANAN</label>
                        <textarea name="dasar" class="form-control"></textarea>
                      </div>
                      <div class="col">
                        <label>KODE MATA ANGGARAN</label>
                        <select name="anggaran" class="form-control select2 " data-select2-id="1" tabindex="-1" aria-hidden="true">
                          {{-- <option value="">- Pilih -</option> 
                          @foreach ($dina as $nana)
                            <option value="">{{ $nana->kode_angaran }}</option>
                         @endforeach --}}

                        </select>
                      </div>
                    </div>
                    <BR>
                      <div class="row">
                        <div class="col">
                          <label></label>
                        </div>
                        <div class="col">
                          <label></label>
                          <button type="submit" class="btn btn-primary float-right">KIRIM DATA</button>
                        </div>
                  
                </form>



            </div> 

      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal-rek"  style="display: none;"aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
              <h4 class="modal-title">MATA ANGGARAN</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
        </div>
            <div class="modal-body">
                <form action="{{ ('/tambahrek') }}" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-lg-9">
                    <textarea name="kode_angaran"class="form-control"></textarea>

                    </div>
                    
                        <div class="col">
                          <label></label>
                          <button type="submit" class="btn btn-primary float-right">KIRIM DATA</button>
                        </div>
                  
                </form>



            </div> 

      </div>
    </div>
  </div>
</div>


@endsection

<script>
window.onload = function () {
    getList();
    $("#ikitambah").submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: $("#ikitambah").attr("action"),
            method: "POST",
            data: $("#ikitambah").serialize(),
        }).done(function (response) {
            getList();
            $('#modal-tambah').modal('hide');
        }).fail(function (jqXHR, textStatus) {});
    });

    $('#modal-tambah').on('hidden.bs.modal', function (e) {
        $(this)
            .find("input,textarea,select")
            .val('')
            .end()
            .find("input[type=checkbox], input[type=radio]")
            .prop("checked", "")
            .end();
    });
}
</script>



