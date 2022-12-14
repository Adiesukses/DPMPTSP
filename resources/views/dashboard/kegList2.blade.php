<div class="table-responsive" >
    <table class="table m-0"id="list_keg2">
        <thead>
            <tr>
                <th>NO</th>
                <th>ACARA/KEGIATAN</th>
                <th>TANGGAL</th>
                <th>TEMPAT</th>
                <th>WAKTU</th>
                <th>KETERANGAN</th>
                <th>DISPOSISI</th>
                <th>STATUS</th>
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
                  <td>@php                     
                    $firstDate = Carbon\Carbon::parse('today');
                    $secondDate = Carbon\Carbon::parse($keg->tanggal);
                    $time1 = now();
                    $time2 = Carbon\Carbon::createFromTimeString($keg->waktu);
                    @endphp
                    @if($secondDate ->eq($firstDate) && $time1 ->gte($time2))
                        <a class="btn btn-info btn-sm">
                        <i class="fas fa-flag">
                        </i>
                        Aktif
                    </a>

                    <script>
//$('#modale').modal('show');
                    </script> 
                    {{-- <audio autoplay>
                        <source src="floating.mp3" type="audio/mp3">
                    </audio> --}}
                    @else 
                            <a class="btn btn-secondary btn-sm">
                            <i class="fas fa-flag">
                            </i>
                            Otewe
                        </a>
                    @endif
              </td>  
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