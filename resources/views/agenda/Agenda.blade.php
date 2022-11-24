
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

                                <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal-tambah">Tambah
                                    Agenda</a>
                                <a href="#" class="dropdown-item tampilModalUbah"data-toggle="modal" data-target="#modal-tambah">Ubah Agenda</a>
                                <a href="#" class="dropdown-item">Something else here</a>
                                <a class="dropdown-divider"></a>
                                <a href="#" class="dropdown-item">Separated link</a>
                            </div>
                        </div>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
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
                <form id="ikitambah" action="{{ ('/routeAgenda') }}" method="POST">
                    @csrf
                 
                        <div class="form-group col-md-12">
                            <label>KEGIATAN</label>
                            <textarea name="kegiatan" class="form-control" required></textarea>
                        </div>

                        <div class="form-group col-md-12">
                            <label>PERANGKAT DAERAH</label>
                            <input name="opd" type="text" class="form-control" required>
                        </div>
                
                    <div class="form-group col-md-12">
                        <label>DEADLINE</label>
                        <input name="deadline" type="date" class="form-control" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label>PROGRESS</label>
                        <input name="progres" type="number" class="form-control" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label>KETERANGAN</label>
                        <textarea name="keterangan" class="form-control" required></textarea>
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
        url: "/routeAgendaTabel",
        method: "GET",
    }).done(function (response) {
        $('#listnya').html(response);
    }).fail(function (jqXHR, textStatus) {});
}
</script>
@endsection