@extends('layout.home') 
@section('halaman') 
<section class="content">
    <div class="card">
        <div class="card-header border-transparent">
            <h3 class="card-title mb-3">DOKUMEN DPMPTSP</h3>
            <div class="btn-group float-right "><a href="" type="button" class="btn btn-warning mt-3"
                    data-toggle="modal" data-target="#modal-upload">Upload Dokumen</a></div>
        </div>
       
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table " id="list_keg2">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>TAHUN</th>
                                <th>NAMA DOKUMEN</th>
                                <th>JENIS DOKUMEN</th>
                                <th>DOWNLOAD</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>@php $i=1;

                            @endphp <tr> 

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
           
    </div>
</section>
    <div class="modal fade" id="modal-upload" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">UPLOAD DOKUMEN</h4><button type="button" class="close" data-dismiss="modal"
                        aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form id="ikitambah" action="" method="POST">
                        @csrf 
                        <div class="form-group row">              
                            <div class="col-md-4">
                                 <label>TAHUN</label>
                                 <select name="tahun" class="form-control select2 select2-hidden-accessible"
                                 style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                
                                 <option value="2022">2022</option>
                                 <option value="2023">2023</option>
                                 <option value="2024">2024</option>
                                 <option value="2025">2025</option>
                             </select>
                            </div>
                            <div class="col">
                                <label>JENIS DOKUMEN</label>
                                <select name="tahun" class="form-control select2 select2-hidden-accessible"
                                    style="width: 100%;" data-select2-id="2" tabindex="-2" aria-hidden="true">
                                   
                                    <option value="Perencanaan">Perencanaan</option>
                                    <option value="Kepegawaian">Kepegawaian</option>
                                </select>   
                            </div>

                        </div>
                        <div class="form-group">
                            <label>NAMA DOKUMEN</label>
                            <input type="text" name="nip"class="form-control" required>
                                   
                    </div>
                                
                    
                    <div class="form-group">
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile"></label>
                          </div>
                          <div class="input-group-append">
                            <button class="btn bg-primary" type="submit"
                            id="inputGroupFileAddon04">Upload</button>
                          </div>
                        </div>
                      </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection