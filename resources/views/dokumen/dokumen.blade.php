@extends('layout.home')
@section('halaman')
<section class="content">

    <div class="card">
        <div class="card-header border-transparent">
            <h3 class="card-title">DOKUMEN DPMPTSP</h3>
            <div class="btn-group float-right mt-2 mb-5">
                <button type="button" class="btn btn-warning">UPLOAD DOKUMEN
                </button>
            </div>
    <!-- /.card-header -->
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
                <tbody>
                    @php
                    $i=1;

                    @endphp
                    <tr>
                        {{-- @foreach ($data as $keg) --}}
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    {{-- @endforeach --}}

                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card-body -->
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
                            <input name="waktu" type="time" class="form-control" required>
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
                                style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true"
                                placeholder="Pilih" required>
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
    $(document).ready(function () {
        $('#list_keg2').DataTable();
    });
</script>
<script>
    $(document).ready(function () {
        $('#list_keg2').DataTable();
    });


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
                .find("input,textarea,select2")
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
            url: "/dashDelete" + ikiid,
            method: "GET",
        }).done(function (response) {
            getList();
        }).fail(function (jqXHR, textStatus) {});
    }
</script>

@endsection