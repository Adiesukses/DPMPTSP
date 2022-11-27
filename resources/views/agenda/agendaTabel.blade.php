<div class="table-responsive">
    <table class="table m-0">
        <thead>
            <tr>
                <th>NO</th>
                <th>KEGIATAN</th>
                <th>KOORDINATOR</th>
                <th>DEADLINE</th>
                <th>KETERANGAN</th>
                <th>PROGRESS</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            @php
            $i=1;                           
           @endphp
        @foreach ($data as $agenda )
            
     
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $agenda->kegiatan }}</td>
                <td>{{ $agenda->opd }} </td>
                <td>{{ $agenda->deadline }}</td>
                <td>{{ $agenda->keterangan }}</td>
                <td class="project_progress">
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow=""
                            aria-valuemin="0" aria-valuemax="100" style="width: {{ $agenda->progres }}%">
                        </div>
                    </div>
                    <small>
                        {{ $agenda->progres }} % Complete
                    </small>
                </td>

                <td class="project-actions text-left">
                    <a class="btn btn-info btn-sm" onclick="edit({{ $agenda->id }})">
                        <i class="fas fa-pencil-alt">
                        </i>
                    </a>
                    <a class="btn btn-danger btn-sm" onclick ="return confirm ('Yakin Bro?')" href="javascript:hapus({{ $agenda->id }})">
                        <i class="fas fa-trash">
                        </i>
                    </a>
                </td>
            </tr>
               @endforeach
        </tbody>
    </table>
</div>