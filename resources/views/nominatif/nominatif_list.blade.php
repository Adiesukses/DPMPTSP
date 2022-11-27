<div class="table-responsive">
    <table class="table m-0">
      <thead>
          <tr>
              <th>NO</th>
              <th>NAMA PEGAWAI</th>
              <th>NIP</th>
              <th>JABATAN</th>
              <th>GOL</th>
              <th>ALAMAT</th>
              <th>NO HP</th>
              <th>AKSI</th>
            </tr>
            </thead>
            <tbody>
              @php
              $i=1

              @endphp
          
              @foreach ($data as $peg) 
            <tr>
              <td>{{ $i++ }} </td>
              <td>{{ $peg->nama }}</td>
              <td>{{ $peg->nip }}</td>
              <td>{{ $peg->jabatan }}</td>
              <td>{{ $peg->gol }}</td>
              <td>{{ $peg->alamat}}</td>
              <td>{{ $peg->no_hp }}</td>
              <td class="project-actions">
                <a class="btn btn-info btn-sm " data-toggle="modal" data-target="#modal-detail" href="#">
                    <i class="fas fa-eye">
                    </i>
                </a>
                <a class="btn btn-info btn-sm " href="#" onclick="edit({{ $peg->id }})">
                  <i class="fas fa-pencil-alt">
                  </i>
              </a>
                <a class="btn btn-danger btn-sm" onclick ="return confirm ('Yakin Bro?')" href="javascript:hapus({{ $peg->id }})">
                    <i class="fas fa-trash">
                    </i>
                </a>
            </td>

            </tr>
            @endforeach
      </tbody>
</div>
