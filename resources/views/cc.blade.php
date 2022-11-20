@extends('layout.home')
@section('halaman')
<div class="form-row">

      <div class="form-group col-md-6">
            <label>PPTK</label>
            <select name="pptk" class="form-control select2 select2-hidden-accessible"
                data-select2-id="1" tabindex="-1" aria-hidden="true">
                <option value="" required>-Pilih PPTK-</option>

                <option value="">kkk</option>


            </select>
        </div>
        <div class="form-group col-md-12">
            <label>KODE MATA ANGGARAN</label>
            <select name="anggaran" class="form-control select2 " required>
                <option value="">- Pilih -</option>
                {{-- @foreach ($dina as $nana)
              <option value="{{ $nana->angaran }}">{{ $nana->angaran }}</option>
                @endforeach --}}
            </select>
        </div>
        <div class="form-group col-md-12">
            <label>DASAR PERJALANAN</label>
            <textarea name="dasar" class="form-control" required></textarea>
        </div>
        <div class="form-group col-md-12">
            <label>TUJUAN</label>
            <textarea name="tujuan" class="form-control" required></textarea>
        </div>
        <div class="form-group col-md-12">
            <label>MAKSUD</label>
            <textarea name="maksud" class="form-control" required></textarea>
        </div>
    
      <label></label>
      <button type="submit" class="btn btn-primary float-right">KIRIM DATA</button>
</div>

@endsection