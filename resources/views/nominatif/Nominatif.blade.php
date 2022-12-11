@extends('layout.home')
@section('halaman')
<section class="content">
    <!-- Main row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-transparent">
                    <h4 class="card-title"><strong>NOMINATIF</strong></h4>
                    <div class="btn-group float-right mt-2 mb-5">
                        <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-wrench"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                            <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal-tambah">Tambah
                                Pegawai</a>
                            <a href="{{ url('/export' )}}" class="dropdown-item">Download Nominatif</a>
                            <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal-tambah">Upload Nominatif</a>
                        </div>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                </div>
                {{-- <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{{ session()->get('success') }}</strong>
            </div> --}}
            <!-- Tabel List -->
            <div class="card-body p-0">
                <div id="listnya"></div>
            </div>
            <!-- ---------- -->
        </div>
    </div>

</section>

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
                        <form id="ikitambah" action="{{ ('/nominatifTambah') }}" method="POST">

                            <div class="form-group ml-4 mt-3">
                                <label>NAMA</label>
                                <input type="text" name="nama" class="form-control" required>
                            </div>
                            <div class="form-group ml-4 mt-3">
                                <label>NIP</label>
                                <input type="text" name="nip" class="form-control" required>
                            </div>
                            <div class="form-group ml-4 mt-3">
                                <label>JABATAN</label>
                                <input type="text" name="jabatan" class="form-control" required>
                            </div>
                            <div class="form-group ml-4 mt-3">
                                <label>GOLONGAN</label>
                                <input type="text" name="gol" class="form-control" required>
                            </div>
                            <div class="form-group ml-4 mt-3">
                                <label>ALAMAT</label>
                                <input type="text" name="alamat" class="form-control" required>
                            </div>
                            <div class="form-group ml-4 mt-3">
                                <label>NOMOR HP</label>
                                <input type="text" name="no_hp" class="form-control" required>
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
<div class="modal fade" id="modal-edit" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Pegawai</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="oke"></div>
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

    function edit(ikiid) {
        $.ajax({
            url: "nominatifData",
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                dataId: ikiid
            },
        }).done(function (response) {
            $('#oke').html(response);
            $('#modal-edit').modal('show');
            $("#ikiubah").submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: $("#ikiubah").attr("action"),
                    method: "POST",
                    data: $("#ikiubah").serialize(),
                }).done(function (response) {
                    getList();
                    $('#modal-edit').modal('hide');
                }).fail(function (jqXHR, textStatus) {});
            });
        }).fail(function (jqXHR, textStatus) {});
    }

    function getList() {
        $.ajax({
            url: "/nominatifList",
            method: "GET",
        }).done(function (response) {
            $('#listnya').html(response);
        }).fail(function (jqXHR, textStatus) {});
    }

    function hapus(ikiid) {
        $.ajax({
            url: "/nomDelete" + ikiid,
            method: "GET",
        }).done(function (response) {
            getList();
        }).fail(function (jqXHR, textStatus) {});
    }
</script>
@endsection
