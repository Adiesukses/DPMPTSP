<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <section class="content">
        <div class="col-sm-6 mb-4">
            <h1 class="m-0">AGENDA SEKRETARIAT</h1>
        </div>
        <div class="container-fluid">


                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div id="listnya"></div>

                        </div>
                        <!-- /.card-body -->

                    </div>
                </div>
            </div>
        </div>


</section>

        <footer class="mt-5 text-center">
            <strong>Copyright &copy; 2022 <a href="#">SEKRETARIAT DPMPTSP</a></strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Adie_Ok</b>

        </footer>

{{-- <script language="javascript">

</script> --}}
<script>

     window.onload = function () {
    getList();
    
//  setTimeout(function(){
//  window.location.reload(1);
// }, 1000);
     }
function getList() {
    $.ajax({
        url: "/dashList",
        method: "GET",
    }).done(function (response) {
        $('#listnya').html(response);

    }).fail(function (jqXHR, textStatus) {});
}

</script>

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>

    <script src="plugins/chart.js/Chart.min.js"></script>

    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js"></script>

    <script src="plugins/datatables/jquery.dataTables.min.js"></script>



</body>

</html>