@extends('layout.home') 
@section('halaman') 
<section class="content">
    <div class="card">
        <div class="card-header border-transparent">
            <h3 class="card-title mb-3">DOKUMEN DPMPTSP</h3>
            <div class="btn-group float-right "><a href="" type="button" class="btn btn-warning mt-3"
                    data-toggle="modal" data-target="#modal-upload">Upload Dokumen</a></div>
        </div>
        < !-- /.card-header -->
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table " id="list_keg2">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>TAHUN</th>
                                <th>NAMA DOKUMEN</th>
                                <th>JENIS DOKUMEN</th>
                                <th>DOWNLOAD</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>@php $i=1;

                            @endphp <tr> {
                                {
                                -- @foreach ($data as $keg) --
                                }
                                }

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr> {
                            {
                            -- @endforeach --
                            }
                            }

                        </tbody>
                    </table>
                </div>
            </div>
            < !-- /.card-body -->
    </div>
</section>
    <div class="modal fade" id="modal-upload" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">UPLOAD DOKUMEN</h4><button type="button" class="close" data-dismiss="modal"
                        aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form id="ikitambah" action="" method="POST">@csrf <div class="form-group ml-4 mt-3">
                            <label>NAMA DOKUMEN</label><input type="text" name="nama" class="form-control" required></div>
                        <div class="form-group ml-4 mt-3"><label>TAHUN</label><input type="text" name="nip"
                                class="form-control" required></div>
                        <div class="form-group ml-4 mt-3"><label>JENIS DOKUMEN</label><input type="text" name="jabatan"
                                class="form-control" required></div>
                        <div class="form-group ml-4 mt-3"><label>GOLONGAN</label><input type="text" name="gol">

                        <div class="form-group ml-4 mt-3 text-end"><button type="submit"
                                class="btn btn-primary float-right">KIRIM DATA</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection