
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

                <td>{{ $keg->tempat }}</td>
                <td>{{ $keg->waktu }}</td>
                <td>{{ $keg->keterangan }}</td>
                <td>{{ $keg->disposisi }}</td>
                <td class="project-actions text-left">
                    <a class="btn btn-danger btn-sm disabled"  href="javascript:hapus({{ $keg->id }})">
                        <i class="fas fa-flag">
                        </i>
                        Selesai
                    </a></td>
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