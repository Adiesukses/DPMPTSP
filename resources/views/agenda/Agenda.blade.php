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

                                <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal-tambah">Ubah
                                    Data</a>
                                <a href="#" class="dropdown-item">Catatan</a>
                                <a href="#" class="dropdown-item">Something else here</a>
                                <a class="dropdown-divider"></a>
                                <a href="#" class="dropdown-item">Separated link</a>
                            </div>
                        </div>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
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
<div class="modal fade" id="modal-tambah" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">TAMBAH AGENDA</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    @csrf
                 
                        <div class="form-group col-md-12">
                            <label>KEGIATAN</label>
                            <textarea name="kegiatan" class="form-control" required></textarea>
                        </div>

                        <div class="form-group col-md-12">
                            <label>PERANGKAT DAERAH</label>
                            <input name="tanggal_sppd" type="text" class="form-control" required>
                        </div>
                
                    <div class="form-group col-md-12">
                        <label>DEADLINE</label>
                        <input name="tanggal_berangkat" type="date" class="form-control" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label>PROGRESS</label>
                        <input name="tanggal_sppd" type="text" class="form-control" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label>KETERANGAN</label>
                        <textarea name="kegiatan" class="form-control" required></textarea>
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
@endsection