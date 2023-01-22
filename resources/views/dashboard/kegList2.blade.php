<div class="table-responsive" >
    <table class="table m-0"id="list_keg2">
        <thead>
            <tr >
                <th><h3>NO</h3></th>
                <th ><h3>ACARA/KEGIATAN</h3></th>
                <th ><h3>TANGGAL</h3></th>
                <th ><h3>TEMPAT</h3></th>
                <th ><h3>WAKTU</h3></th>
                <th ><h3>KETERANGAN</h3></th>
                <th ><h4>DISPOSISI KASUBBAG UMUM</h4></th>
            </tr>
        </thead>
        <tbody>
            @php
            $i=1;

            @endphp
            <tr >
                @foreach ($data as $keg)
                <td><h4>{{ $i++ }}</h4></td>
                <td ><h4>{{ $keg->kegiatan }}</h4></td>
                @php 
                $today = Carbon\Carbon::parse($keg->tanggal)->isoFormat('dddd, D MMMM Y');@endphp
                <td ><h4>{{ $today}} </h4></td>
                {{-- {{ date('l, d F Y',strtotime($keg->tanggal)) }}  --}}

                <td ><h4>{{ $keg->tempat }}</h4></td>
                <td><h4>{{ $keg->waktu}} WIB</h4></td>
                <td ><h4>{{ $keg->keterangan }}</h4></td>
                <td><h4>{{ $keg->disposisi }}</h4></td>

</tr>  
         @endforeach
                
        </tbody>
    </table>
</div>
<!-- Modal -->
<div class="modal fade" id="modale" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
{{-- <script>
    $(document).ready(function () {
        $('#list_keg2').DataTable();
    });

    </script> --}}