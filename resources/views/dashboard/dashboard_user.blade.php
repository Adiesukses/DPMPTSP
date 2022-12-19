
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEKRETARIAT DPMPTSP</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->

    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
</head>

<body onload = "getList();"class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed" >
    <section class="content">
        <div class="col-sm-6 mb-4">
            <h1 class="m-0">AGENDA SEKRETARIAT</h1>
        </div>
        <div class="container-fluid">
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div id="listnya2"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


</section>

<div class="modal fade" id="modal-notif" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Notifikasi Kegiatan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Disposisi : <br><h4><span id="notifDisposisi"></span></h4></br>
          Nama Kegiatan : <br><h4><span id="notifKegiatan"></span></h4><br>
          Tanggal Kegiatan : <br><h4><span id="notifTanggal"></span></h4><br>
          Lokasi : <br><h4><span id="notifTempat"></span></h4><br>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

<script>
var audio = document.createElement("AUDIO")
document.body.appendChild(audio);
audio.src = "./audio/notif.wav"

var notifId = [];
function getList() {
    $.ajax({
        url: "/dashList2",
        method: "GET",
    }).done(function (response) {

        $('#listnya2').html(response);

    }).fail(function (jqXHR, textStatus) {});
}

function cekNotif() {
    $.ajax({
        url: "/datanotif",
        method: "GET",
        dataType: "json"
    }).done(function (response) {
        $.each(response, function(key, item) {

            if(typeof notifId[item['id']] == 'undefined'){
                notifId[item['id']] = true;
            }

            $('#notifKegiatan').text(item['kegiatan']);
            $('#notifKeterangan').text(item['keterangan']);
            $('#notifTanggal').text(item['tanggal']);
            $('#notifTempat').text(item['tempat']);
            $('#notifDisposisi').text(item['disposisi']);

            if(notifId[item['id']] == true){
                $('#modal-notif').modal('show');
                audio.play();
                notifId[item['id']] = false;
            }
        });
    }).fail(function (jqXHR, textStatus) {});
}

setInterval(function () {
    cekNotif();
    getList();
}, 1000);

// function refresh() {
//     $('#listnya').load(location.href + "#listnya");
// }

</script>

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
   
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>



    
</body>

</html>