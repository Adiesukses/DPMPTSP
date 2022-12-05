{{-- @php
      $fdate=$data->tanggal;
      $datetime1= new DateTime($fdate);
      $datetime2= new DateTime('now');
      $interval= $datetime2->diff( $datetime1);
      $days=$interval->format('%a') + 1;
@endphp --}}
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
                {{-- $today = Carbon::now()->isoFormat('dddd, D MMMM Y'); --}}
             <td>{{ date('l, d F Y',strtotime($keg->tanggal)) }} </td>
                {{-- {{ date('l, d F Y',strtotime($keg->tanggal)) }}  --}}

                <td >{{ $keg->tempat }}</td>
                <td>{{ $keg->waktu }}</td>
                <td>{{ $keg->keterangan }}</td>
                <td>{{ $keg->disposisi }}</td>
                  <td>@php                     
                    $firstDate = Carbon\Carbon::parse('today');
                    $secondDate = Carbon\Carbon::parse($keg->tanggal);
                    @endphp
                
                    @if ($firstDate->eq($secondDate)) 
                        <a class="btn btn-danger btn-sm">
                            <i class="fas fa-flag">
                            </i>
                            Selesai
                        </a>
                    @else 
                        <a class="btn btn-secondary btn-sm">
                            <i class="fas fa-flag">
                            </i>
                            Selesai
                        </a>
                    
                    @endif
              </td>  
</tr>  
         @endforeach
                
        </tbody>
    </table>
</div>
{{-- <script>
    $(document).ready(function () {
        $('#list_keg2').DataTable();
    });

    </script> --}}