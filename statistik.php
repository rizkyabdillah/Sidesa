<?php
require('db/Aksi-Statistik.php');
$con = new Aksi();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Home Page &mdash; SIDESA.MY.ID</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/modules/ionicons/css/ionicons.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Datatables CSS -->
    <link rel="stylesheet" href="assets/modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">

    <!-- Chart Statistics -->
    <script src="assets/modules/chart.min.js"></script>
</head>

<body class="layout-3">
    <div id="app">
        <div class="main-wrapper container">
            <?php require('page/navbar.php'); ?>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">

                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card">
                                
                                    <?php
                                        if($_GET['pages'] == "administratif") {
                                            require('page/chart-administratif.php');
                                        } if($_GET['pages'] == "pekerjaan") {
                                            require('page/chart-pekerjaan.php');
                                        } if($_GET['pages'] == "agama") {
                                            require('page/chart-agama.php');
                                        } if($_GET['pages'] == "jenis_kelamin") {
                                            require('page/chart-jenis-kelamin.php');
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
            <div class="simple-footer">
                Copyright &copy; <span><a href="https://sidesa.my.id">SIDESA.MY.ID</a></span> <?php echo (date("Y")); ?>
            </div>
        </div>
    </div>

    <!-- General JS Scripts  -->
    <script src="assets/modules/jquery.min.js"></script>
    <script src="assets/modules/popper.js"></script>
    <script src="assets/modules/tooltip.js"></script>
    <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="assets/modules/moment.min.js"></script>
    <script src="assets/js/stisla.js"></script>
    <script src="assets/js/page/modules-ion-icons.js"></script>


    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>