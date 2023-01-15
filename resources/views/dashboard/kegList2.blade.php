<div class="table-responsive" >
    <table class="table m-0"id="list_keg2">
        <thead>
            <tr >
                <th >NO</th>
                <th >ACARA/KEGIATAN</th>
                <th >TANGGAL</th>
                <th >TEMPAT</th>
                <th >WAKTU</th>
                <th >KETERANGAN</th>
                <th >DISPOSISI KASUBAG UMUM</th>
            </tr>
        </thead>
        <tbody>
            @php
            $i=1;

            @endphp
            <tr>
                @foreach ($data as $keg)
                <td>{{ $i++ }}</td>
                <td>{{ $keg->kegiatan }}</td>
                @php 
                $today = Carbon\Carbon::parse($keg->tanggal)->isoFormat('dddd, D MMMM Y');@endphp
                <td>{{ $today}} </td>
                {{-- {{ date('l, d F Y',strtotime($keg->tanggal)) }}  --}}

                <td >{{ $keg->tempat }}</td>
                <td>{{ $keg->waktu}} WIB</td>
                <td>{{ $keg->keterangan }}</td>
                <td>{{ $keg->disposisi }}</td>

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