@extends('layout.home')
@section('halaman')
<section class="content">

    <!-- Main row -->
    <div class="row">
        <div class="col-md-12 mt-1">
            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">AGENDA PERENCANAAN</h3>

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
                                    <th>KEGIATAN</th>
                                    <th>PERANKAT DAERAH</th>
                                    <th>DEADLINE</th>
                                    <th>KETERANGAN</th>
                                    <th>PROGRESS</th>
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
                                    <td class="project_progress">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="47"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 47%">
                                            </div>
                                        </div>
                                        <small>
                                            47% Complete
                                        </small>
                                    </td>
                                    <td><span class="badge badge-success">On Progress</span></td>
                                    <td class="project-actions text-left">
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Call of Duty IV</td>
                                    <td>Call of Duty IV</td>
                                    <td>Call of Duty IV</td>
                                    <td>Call of Duty IV</td>
                                    <td class="project_progress">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            </div>
                                        </div>
                                        <small>
                                            60% Complete
                                        </small>
                                    </td>
                                    <td><span class="badge badge-success">On Progress</span></td>
                                    <td class="project-actions text-left">
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Call of Duty IV</td>
                                    <td>Call of Duty IV</td>
                                    <td>Call of Duty IV</td>
                                    <td>Call of Duty IV</td>
                                    <td class="project_progress">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="34"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 34%">
                                            </div>
                                        </div>
                                        <small>
                                            34% Complete
                                        </small>
                                    </td>
                                    <td><span class="badge badge-success">On Progress</span></td>
                                    <td class="project-actions text-left">
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Samsung Smart TV</td>
                                    <td>Call of Duty IV</td>
                                    <td>Call of Duty IV</td>
                                    <td>Call of Duty IV</td>
                                    <td class="project_progress">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="27"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 27%">
                                            </div>
                                        </div>
                                        <small>
                                            27% Complete
                                        </small>
                                    </td>

                                    <td class="project-actions text-left">
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Samsung Smart TV</td>
                                    <td>Call of Duty IV</td>
                                    <td>Call of Duty IV</td>
                                    <td>Call of Duty IV</td>
                                    <td class="project_progress">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="47"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 47%">
                                            </div>
                                        </div>
                                        <small>
                                            47% Complete
                                        </small>
                                    </td>
                                    <td><span class="badge badge-success">On Progress</span></td>
                                    <td class="project-actions text-left">
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Samsung Smart TV</td>
                                    <td>Call of Duty IV</td>
                                    <td>Call of Duty IV</td>
                                    <td>Call of Duty IV</td>
                                    <td class="project_progress">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="17"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 17%">
                                            </div>
                                        </div>
                                        <small>
                                            17% Complete
                                        </small>
                                    </td>
                                    <td><span class="badge badge-success">On Progress</span></td>
                                    <td class="project-actions text-left">
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Samsung Smart TV</td>
                                    <td>Call of Duty IV</td>
                                    <td>Call of Duty IV</td>
                                    <td>Call of Duty IV</td>
                                    <td class="project_progress">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="67"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 67%">
                                            </div>
                                        </div>
                                        <small>
                                            67% Complete
                                        </small>
                                    </td>
                                    <td><span class="badge badge-success">On Progress</span></td>
                                    <td class="project-actions text-left">
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Samsung Smart TV</td>
                                    <td>Call of Duty IV</td>
                                    <td>Call of Duty IV</td>
                                    <td>Call of Duty IV</td>
                                    <td class="project_progress">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="87"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                            </div>
                                        </div>
                                        <small>
                                            87% Complete
                                        </small>
                                    </td>
                                    <td><span class="badge badge-success">On Progress</span></td>
                                    <td class="project-actions text-left">
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                        </a>
                                    </td>
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
</section>
@endsection