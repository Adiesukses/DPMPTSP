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
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>ACARA/KEGIATAN</th>
                                        <th>TANGGAL</th>
                                        <th>TEMPAT</th>
                                        <th>KETERANGAN</th>
                                        <th>DISPOSISI</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Call of Duty IV</td>
                                        <td>Call of Duty IV</td>
                                        <td>Call of Duty IV</td>
                                        <td>Call of Duty IV</td>
                                        <td>Kasubbag Umum & Staff</td>
                                        <td class="project-actions text-left">
                                            <a class="btn btn-primary btn-sm" href="#">
                                                <i class="fas fa-flag">
                                                </i>
                                                Selesai
                                            </a></td>

                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Call of Duty IV</td>
                                        <td>Call of Duty IV</td>
                                        <td>Call of Duty IV</td>
                                        <td>Call of Duty IV</td>
                                        <td>Kasubbag Umum & Staff</td>
                                        <td class="project-actions text-left">
                                            <a class="btn btn-primary btn-sm" href="#">
                                                <i class="fas fa-flag">
                                                </i>
                                                Selesai
                                            </a></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Call of Duty IV</td>
                                        <td>Call of Duty IV</td>
                                        <td>Call of Duty IV</td>
                                        <td>Call of Duty IV</td>
                                        <td>Kasubbag Umum & Staff</td>
                                        <td class="project-actions text-left">
                                            <a class="btn btn-primary btn-sm" href="#">
                                                <i class="fas fa-flag">
                                                </i>
                                                Selesai
                                            </a></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Call of Duty IV</td>
                                        <td>Call of Duty IV</td>
                                        <td>Call of Duty IV</td>
                                        <td>Call of Duty IV</td>
                                        <td>Kasubbag Umum & Staff</td>
                                        <td class="project-actions text-left">
                                            <a class="btn btn-primary btn-sm" href="#">
                                                <i class="fas fa-flag">
                                                </i>
                                                Selesai
                                            </a></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Call of Duty IV</td>
                                        <td>Call of Duty IV</td>
                                        <td>Call of Duty IV</td>
                                        <td>Call of Duty IV</td>
                                        <td>Kasubbag Umum & Staff</td>
                                        <td class="project-actions text-left">
                                            <a class="btn btn-primary btn-sm" href="#">
                                                <i class="fas fa-flag">
                                                </i>
                                                Selesai
                                            </a></td>
                                    <tr>
                                        <td>6</td>
                                        <td>Call of Duty IV</td>
                                        <td>Call of Duty IV</td>
                                        <td>Call of Duty IV</td>
                                        <td>Call of Duty IV</td>
                                        <td>Kasubbag Umum & Staff</td>
                                        <td class="project-actions text-left">
                                            <a class="btn btn-primary btn-sm" href="#">
                                                <i class="fas fa-flag">
                                                </i>
                                                Selesai
                                            </a></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Call of Duty IV</td>
                                        <td>Call of Duty IV</td>
                                        <td>Call of Duty IV</td>
                                        <td>Call of Duty IV</td>
                                        <td>Kasubbag Umum & Staff</td>
                                        <td class="project-actions text-left">
                                            <a class="btn btn-primary btn-sm" href="#">
                                                <i class="fas fa-flag">
                                                </i>
                                                Selesai
                                            </a></td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Call of Duty IV</td>
                                        <td>Call of Duty IV</td>
                                        <td>Call of Duty IV</td>
                                        <td>Call of Duty IV</td>
                                        <td>Kasubbag Umum & Staff</td>
                                        <td class="project-actions text-left">
                                            <a class="btn btn-primary btn-sm" href="#">
                                                <i class="fas fa-flag">
                                                </i>
                                                Selesai
                                            </a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.card-body -->

                </div>
            </div>
        </div>
    </div>
</section>
@endsection