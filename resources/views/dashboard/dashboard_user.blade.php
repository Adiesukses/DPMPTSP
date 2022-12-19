
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



<script>     

<--
function getList_() {
    $.ajax({
        url: "/dashList2",
        method: "GET",
    }).done(function (response) {

        $('#listnya2').html(response);

    }).fail(function (jqXHR, textStatus) {});
}

setInterval(function () {
    getList();
}, 1000);

function refresh() {
    $('#listnya').load(location.href + "#listnya");
}

function getList() {
    $.ajax({
        url: "/dashList2",
        method: "GET",
    }).done(function (response) {

        $('#listnya2').html(response);

    }).fail(function (jqXHR, textStatus) {});
}

setInterval(function () {
    getList();
}, 1000);

function refresh() {
    $('#listnya').load(location.href + "#listnya");
}

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