<!DOCTYPE html>

<?php
session_start();
if (empty($_SESSION['status']) || empty($_SESSION['id_user'])) {
  header("location:logout.php");
}
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Dashboard &mdash; Admin</title>
  <!--  -->
  <!-- ================== STYLE ================== -->
  <!--  -->
  <link rel="stylesheet" href="../assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/modules/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">
  <!-- Calendar CSS -->
  <link rel="stylesheet" href="../assets/modules/fullcalendar/fullcalendar.min.css">
  <link rel="stylesheet" href="../assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">
  <!-- Date CSS -->
  <link rel="stylesheet" href="../assets/modules/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
  <!-- Post Create CSS -->
  <link rel="stylesheet" href="../assets/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="../assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
  <!-- Select2 Dropdown CSS -->
  <link rel="stylesheet" href="../assets/modules/select2/dist/css/select2.min.css">
  <!-- Datatables CSS -->
  <link rel="stylesheet" href="../assets/modules/datatables/datatables.min.css">
  <link rel="stylesheet" href="../assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
  <!--  -->
  <!-- ================== GOOGLE TAG MANAGER ================== -->
  <!--  -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-94034622-3');
  </script>

</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <!-- Include Top Navbar -->
      <?php require('assets/navbar.php'); ?>
      <!-- Include Sidebar Menu -->
      <?php require('assets/sidebar.php'); ?>
      <!-- Include Container Menu -->
      <?php
      if (empty($_GET['page'])) {
        require 'page/beranda.php';
      } elseif ($_GET['page'] == 'penduduk') {
        require 'page/penduduk.php';
      } elseif ($_GET['page'] == 'keluarga') {
        require 'page/keluarga.php';
      } elseif ($_GET['page'] == 'tulis-post') {
        require 'page/tulis-post.php';
      } elseif ($_GET['page'] == 'post') {
        require 'page/post.php';
      } elseif ($_GET['page'] == 'komentar') {
        require 'page/komentar.php';
      } elseif ($_GET['page'] == 'kategori') {
        require 'page/kategori.php';
      } elseif ($_GET['page'] == 'tags') {
        require 'page/tags.php';
      } elseif ($_GET['page'] == 'administratif') {
        require 'page/administratif.php';
      } elseif ($_GET['page'] == 'rw') {
        require 'page/detail-rw.php';
      } elseif ($_GET['page'] == 'rt') {
        require 'page/detail-rt.php';
      } elseif ($_GET['page'] == 'perangkat') {
        require 'page/perangkat.php';
      } elseif ($_GET['page'] == 'keluarga') {
        require 'page/keluarga.php';
      } elseif ($_GET['page'] == 'komentar') {
        require 'page/komentar.php';
      }
      ?>
      <!-- Include Footer Menu -->
      <?php include('assets/footer.php'); ?>

    </div>
  </div>
  </div>
  <!-- General JS Scripts -->
  <script src="../assets/modules/jquery.min.js"></script>
  <script src="../assets/modules/popper.js"></script>
  <script src="../assets/modules/tooltip.js"></script>
  <script src="../assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="../assets/modules/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>
  <!-- Index JS Scripts -->
  <script src="../assets/modules/chart.min.js"></script>
  <script src="../assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
  <script src="../assets/modules/fullcalendar/fullcalendar.min.js"></script>
  <!-- Create Post JS -->
  <script src="../assets/modules/summernote/summernote-bs4.js"></script>
  <!-- <script src="../assets/modules/jquery-selectric/jquery.selectric.min.js"></script> -->
  <script src="../assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
  <script src="../assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js"></script>
  <!-- Date Time Picker -->
  <script src="../assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
  <script src="../assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- Datatables JS File -->
  <script src="../assets/modules/datatables/datatables.min.js"></script>
  <script src="../assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="../assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
  <script src="../assets/modules/jquery-ui/jquery-ui.min.js"></script>
  <!-- Select2 Dropdown JS File -->
  <script src="../assets/modules/select2/dist/js/select2.full.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="../assets/js/page/features-posts.js"></script>
  <script src="../assets/js/page/index-0.js"></script>
  <script src="../assets/js/page/modules-calendar.js"></script>
  <script src="../assets/js/page/components-user.js"></script>
  <script src="../assets/js/page/modules-datatables.js"></script>
  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <!-- <script src="../assets/js/custom.js"></script> -->

</body>

</html>