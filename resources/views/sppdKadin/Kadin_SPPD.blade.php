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
                    <a href="{{ url('kadinsppd2') }}" type="button" class="btn btn-primary mt-3" data-toggle="modal"
                        data-target="#modal-tambah">+ Tambah SPPD</a>
                    <button type="button" class="btn btn-SUCCESS ml-2 mt-3" data-toggle="modal"
                        data-target="#modal-rek">+ Tambah Rekening</button>

                </div>

                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table m-0">
                            <thead>
                                <tr>

                                    <th>NO</th>
                                    <th>NAMA PENGIKUT</th>
                                    <th>TANGGAL</th>
                                    <th>BERANGKAT</th>
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
                                    <td class="col-2 " align="justify">{{ $sppd->tujuan }}</td>
                                    <td class="col-2 " align="justify">{{ $sppd->maksud }}</td>

                                    <td class="project-actions">
                                        <a class="btn btn-success btn-sm " href="{{ url('kadinsppdctk/'.$sppd->id) }}"
                                            target="blank">
                                            <i class="fas fa-print"> 1
                                            </i>
                                        </a>
                                        <a class="btn btn-success btn-sm " href="{{ url('kadinsppdctk2/'.$sppd->id) }}"
                                            target="blank">
                                            <i class="fas fa-print"> 2
                                            </i>
                                        </a>
                                        <a class="btn btn-info btn-sm " data-toggle="modal" data-target="#modal-edit"
                                            href="#">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                        </a>
                                        <a class="btn btn-danger btn-sm" onclick="return confirm ('Yakin Bro?')"
                                            href="">
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

<div class="modal fade" id="modal-tambah" style="display: none;" aria-hidden="true">
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
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>PENGIKUT</label>
                            <select name="nama" class="form-control select2 select2-hidden-accessible"
                                data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <option value="MADA BAYU AJI" data-select2-id="3">MADA BAYU AJI</option>
                                @foreach ($nominatif as $peg )
                                <option value="{{ $peg->nama }}">{{ $peg->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>TANGGAL SPPD</label>
                            <input name="tanggal_sppd" type="date" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>BERANGKAT</label>
                            <input name="tanggal_berangkat" type="date" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>KEMBALI</label>
                            <input name="tanggal_kembali" type="date" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>KENDARAAN</label>
                            <select name="kendaraan" class="form-control select2 select2-hidden-accessible" required>
                                <option value="" data-select2-id="3">-Pilih Kendaraan-</option>
                                <option value="Kendaraan Dinas (Roda Empat)">Kendaraan Dinas (Roda Empat)</option>
                                <option value="Kendaraan Dinas (Roda Dua)">Kendaraan Dinas (Roda Dua)</option>
                                <option value="Kendaraan Umum (Pesawat)">Kendaraan Umum (Pesawat)</option>
                                <option value="Kendaraan Umum (Kereta Api)">Kendaraan Umum (Kereta Api)</option>
                                <option value="Kendaraan Umum (Bus)">Kendaraan Umum (Bus)</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>PPTK</label>
                            <select name="pptk" class="form-control select2 select2-hidden-accessible"
                                data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <option value="" required>-Pilih PPTK-</option>
                                @foreach ($nominatif as $nana)
                                <option value="{{ $nana->nama }}">{{ $nana->nama }}</option>
                                @endforeach
                                
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label>KODE MATA ANGGARAN</label>
                            <select name="anggaran" class="form-control select2 " required>
                                <option value="">- Pilih -</option>
                                @foreach ($dina as $nana)
                                <option value="{{ $nana->angaran }}">{{ $nana->angaran }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label>DASAR PERJALANAN</label>
                            <textarea name="dasar" class="form-control" required></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label>TUJUAN</label>
                            <textarea name="tujuan" class="form-control" required></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label>MAKSUD</label>
                            <textarea name="maksud" class="form-control" required></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label></label>
                            <button type="submit" class="btn btn-primary float-right">KIRIM DATA</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<div class="modal fade" id="modal-rek" style="display: none;" aria-hidden="true">
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
                    <div class="form-row">             
                        <div class="form-group col-md-12">
                            <textarea name="angaran" class="form-control"></textarea>
                        </div>
                        <div class="col">
                            <label></label>
                            <button type="submit" class="btn btn-primary float-right">KIRIM DATA</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection

<script>

    // window.onload = function () {
    //     getList();
    //     $("#ikitambah").submit(function (e) {
    //         e.preventDefault();
    //         $.ajax({
    //             url: $("#ikitambah").attr("action"),
    //             method: "POST",
    //             data: $("#ikitambah").serialize(),
    //         }).done(function (response) {
    //             getList();
    //             $('#modal-tambah').modal('hide');
    //         }).fail(function (jqXHR, textStatus) {});
    //     });

    //     $('#modal-tambah').on('hidden.bs.modal', function (e) {
    //         $(this)
    //             .find("input,textarea,select")
    //             .val('')
    //             .end()
    //             .find("input[type=checkbox], input[type=radio]")
    //             .prop("checked", "")
    //             .end();
    //     });
    // }
</script>
