@extends('layout.home')
@section('halaman')
<div class="form-row">
      <div class="form-group col-md-12">
            <label>PPTK</label>
            <select name="pptk" class="form-control select2 " data-select2-id="1" tabindex="-1" aria-hidden="true">
                <option value="">- Pilih -</option> 
                        @foreach ($nominatif as $pptk)
                          <option value="{{ $pptk->nama }}">{{  $pptk->nama }}</option>
                        @endforeach
            </select>
        </div> 
 
    
      <label></label>
      <button type="submit" class="btn btn-primary float-right">KIRIM DATA</button>
</div>

@endsection