@extends('layout.home')
@section('halaman')
<div class="form-row">
  
  <div class="form-group col-md-12">
    <label>PPTK</label>
    <select name="pegawa" class="form-control select2 " data-select2-id="1" tabindex="-1" aria-hidden="true">
        <option value="">- Pilih -</option> 
                @foreach ($dina as $nana)
                  <option value="{{ $nana->pegawai }}">{{ $nana->kode_angaran }}</option>
                @endforeach
    </select>
</div>  
    
      <label></label>
      <button type="submit" class="btn btn-primary float-right">KIRIM DATA</button>
</div>

@endsection