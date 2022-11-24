<form id="ikiubah" action="{{ url('update/'.$ikilodatane->id) }}" method="POST">
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