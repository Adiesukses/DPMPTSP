@extends('layout.home')
@section('halaman')
<section class="content">
    <div class="col-sm-6 mb-4">
        <h1 class="m-0">SEKRETARIAT DPMPTSP</h1>
    </div>
    <div class="container-fluid">

        <!-- Info boxes -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $data}}</h3>
                        <h4><strong> PEGAWAI ASN</strong></h4>

                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{ url('nominatif') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>

                        <h4><strong> SERAPAN ANGGARAN</strong></h4>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h3>44</h3>

                        <h4><strong> AGENDA PERENCANAAN</strong></h4>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>65</h3>
                        <h4><strong>AGENDA KEPEGAWAIAN</strong></h4>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <!-- .CHART -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">SERAPAN ANGGARAN</h3>

                        <div class="card-tools">
                            <div class="btn-group">
                                <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                    <i class="fas fa-wrench"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                    <a href="#" class="dropdown-item">Ubah Data</a>
                                    <a href="#" class="dropdown-item">Catatan</a>
                                    <a href="#" class="dropdown-item">Something else here</a>
                                    <a class="dropdown-divider"></a>
                                    <a href="#" class="dropdown-item">Separated link</a>
                                </div>
                            </div>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>

                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <p class="text-center">
                                    <strong>September 2022</strong>
                                </p>
                                <div class="chart">
                                    <!-- Sales Chart Canvas -->
                                    <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                                </div>
                                <!-- /.chart-responsive -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-4">
                                <p class="text-center">
                                </p>
                                <div class="progress-group">
                                    Sekretariat
                                    <span class="float-right"><b>160</b>/200</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-primary" style="width: 80%"></div>
                                    </div>
                                </div>
                                <!-- /.progress-group -->
                                <div class="progress-group">
                                    Bidang PM
                                    <span class="float-right"><b>310</b>/400</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-danger" style="width: 75%"></div>
                                    </div>
                                </div>
                                <!-- /.progress-group -->
                                <div class="progress-group">
                                    <span class="progress-text">Bidang Perizinan</span>
                                    <span class="float-right"><b>480</b>/800</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-success" style="width: 60%"></div>
                                    </div>
                                </div>
                                <div class="progress-group">
                                    Bidang Data
                                    <span class="float-right"><b>250</b>/500</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-warning" style="width: 50%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./card-body -->
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-3 col-6">
                                <div class="description-block border-right">
                                    <span class="description-percentage text-success"><i class="fas fa-caret-up"></i>
                                        17%</span>
                                    <h5 class="description-header">Rp 54.000.000</h5>
                                    <span class="description-text">SEKRETARIAT</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-3 col-6">
                                <div class="description-block border-right">
                                    <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i>
                                        0%</span>
                                    <h5 class="description-header">20.000.000</h5>
                                    <span class="description-text">Bidang PM</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-3 col-6">
                                <div class="description-block border-right">
                                    <span class="description-percentage text-success"><i class="fas fa-caret-up"></i>
                                        20%</span>
                                    <h5 class="description-header">50.000.000</h5>
                                    <span class="description-text">Bidang Perizinan</span>
                                </div>
                            </div>
                            <div class="col-sm-3 col-6">
                                <div class="description-block">
                                    <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i>
                                        18%</span>
                                    <h5 class="description-header">30.000.000</h5>
                                    <span class="description-text">Bidang Data</span>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col-md-12">



                <!-- TABLE: LATEST ORDERS -->
                <div class="card">
                    <div class="card-header border-transparent">
                        <h3 class="card-title">AGENDA KEGIATAN</h3>
                        <div class="card-tools">
                            <div class="btn-group">
                                <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                    <i class="fas fa-wrench"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                    <a href="#" class="dropdown-item" data-toggle="modal"
                                        data-target="#modal-tambah">Tambah
                                        Kegiatan</a>
                                    <a href="#" class="dropdown-item">Catatan</a>
                                    <a href="#" class="dropdown-item">Something else here</a>
                                    <a class="dropdown-divider"></a>
                                    <a href="#" class="dropdown-item">Separated link</a>
                                </div>
                            </div>
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
                        <div id="listnya"></div>
                    </div>
                    <!-- /.card-body -->

                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="modal-tambah" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">TAMBAH KEGIATAN</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="ikitambah" action="{{ ('/tambahKeg') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <div class="form-group col-md-12">
                            <label>KEGIATAN</label>
                            <textarea name="kegiatan" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 ">
                            <label>TANGGAL</label>
                            <input name="tanggal" type="date" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label>WAKTU</label>
                            <input name="waktu" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-12">
                            <label>TEMPAT</label>
                            <textarea name="tempat" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-12">
                            <label>DISPOSISI</label>
                            <select name="disposisi" class="form-control select2 select2-hidden-accessible"
                                style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <option selected="selected" data-select2-id="3">--Disposisi--</option>
                                <option>Kasubbag Umum</option>
                                <option>Kasubbag Umum & Staff Perencanaan</option>
                                <option>Kasubbag Umum & Staff Kepegawaian </option>
                                <option>Kasubbag Umum & Bendahara </option>
                                <option>Bendahara</option>
                                <option>Bendahara & Pembantu Bendahara</option>
                                <option>Pembantu Bendahara</option>
                                <option>Staff Staff Perencanaan</option>
                                <option>Staff Kepegawaian</option>
                                <option>Arsiparis</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-12">
                            <label>KETERANGAN</label>
                            <textarea name="keterangan" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label></label>
                        <button type="submit" class="btn btn-primary float-right">KIRIM DATA</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<script>
     window.onload = function () {
        getList();
        $("#ikitambah").submit(function (e) {
            e.preventDefault();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
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

function getList() {
    $.ajax({
        url: "/dashList",
        method: "GET",
    }).done(function (response) {
        $('#listnya').html(response);
    }).fail(function (jqXHR, textStatus) {});
}
function hapus(ikiid) {
    $.ajax({
        url: "/dashDelete"+ikiid,
        method: "GET",
    }).done(function (response) {
      getList();
    }).fail(function (jqXHR, textStatus) {});
}
</script>
@endsection