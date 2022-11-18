<div class="col">
  <label>KODE MATA ANGGARAN</label>
  <select name="anggaran" class="form-control select2 " data-select2-id="1" tabindex="-1" aria-hidden="true">
    <option value="">- Pilih -</option> 
    @foreach ($dina as $nana)
      <option value="">{{ $nana->kode_angaran }}</option>
   @endforeach
  




  </select>
</div>