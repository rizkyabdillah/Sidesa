<?php
session_start();
require('db/Aksi-Index.php');

if (empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Detail Post &mdash; SIDESA.MY.ID</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/modules/summernote/summernote-bs4.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">


</head>

<body class="layout-3">
    <div id="app">
        <div class="main-wrapper container">
            <?php require('page/navbar.php'); ?>
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <?php
                    $con = new Aksi();
                    $id_post = (isset($_GET['id'])) ? $_GET['id'] : "";
                    $detail = $con->read_data_filter($id_post);
                    if ($detail->num_rows > 0) {
                        $array = $detail->fetch_array(MYSQLI_BOTH);
                    ?>

                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-8">
                                <div class="card card-infopost">
                                    <div class="card-body">
                                        <div class="row section-header">
                                            <h1><?php echo ($array['judul']); ?></h1>
                                        </div>
                                        <div class="row">
                                            <h6 class="ml-4 mb-3">
                                                Kategori : <?php echo (ucfirst(strtolower($array['nama_kategori']))); ?> |
                                                Tags : <?php echo (ucfirst(strtolower($array['nama_tags']))); ?> |
                                                Di post pada : <?php echo ($array['tanggal_post']); ?>
                                            </h6>
                                        </div>
                                        <div class="carousel-inner">
                                            <img class="d-block w-100" src="admin/assets/images/postingan/<?php echo ($array['gambar_post']); ?>" alt="<?php echo ($array['judul']); ?>">
                                        </div>
                                        <p>
                                            <?php echo ($array['detail_post']); ?>
                                        </p>
                                    </div>
                                    <div class="card-footer"></div>
                                </div>

                                <form method="post" class="needs-validation" novalidate="">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Tulis Komentar</h4>
                                        </div>
                                        <div class="card-body pb-0">
                                            <div class="form-group">
                                                <label>Nama Anda</label>
                                                <input type="text" name="nama" placeholder="Isi Nama Anda" class="form-control" required>
                                                <input type="hidden" name="csrftoken" value="<?php echo htmlentities($_SESSION['token']); ?>" />
                                                <div class="invalid-feedback">
                                                    Mohon isi nama anda!
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Email Anda</label>
                                                <input type="email" name="email" placeholder="Isi Email Anda" class="form-control" required>
                                                <div class="invalid-feedback">
                                                    Mohon isi email anda!
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Content</label>
                                                <textarea name="isi" class="summernote-simple"></textarea>
                                            </div>
                                        </div>
                                        <div class="card-footer pt-0">
                                            <button type="submit" name="submit" tabindex="4" class="btn btn-primary">Kirim Komentar</button>
                                        </div>
                                    </div>
                                </form>



                                <?php
                                if (isset($_POST['submit'])) {
                                    if (!empty($_POST['csrftoken'])) {
                                        if (hash_equals($_SESSION['token'], $_POST['csrftoken'])) {

                                            $con->insert_komentar($id_post, $_POST['nama'], $_POST['email'], $_POST['isi']);
                                            unset($_SESSION['token']);
                                        }
                                    }
                                }
                                ?>

                                <div class="card">
                                    <div class="card-header">
                                        <h4>Komentar</h4>
                                    </div>

                                    <?php
                                    $query = $con->read_komentar($id_post);
                                    if ($query->num_rows > 0) {
                                        foreach ($query->fetch_all(MYSQLI_BOTH) as $data) {
                                    ?>

                                            <div class="card-body">
                                                <ul class="list-unstyled">
                                                    <li class="media">
                                                        <img class="mr-3 rounded-circle" width="50" height="50" src="assets/img/avatar/avatar-3.png" alt="Generic placeholder image">
                                                        <div class="media-body">
                                                            <h5 class="mt-0 mb-1"><?php echo ($data['nama']); ?></h5>
                                                            <p class="mt-1 mb-0 text-primary"><?php echo ($con->get_date_diff_komentar($data, "tanggal_post")); ?></p>
                                                            <p>
                                                                <?php echo ($data['isi_komentar']); ?>
                                                            </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                        <?php
                                        }
                                    } else {
                                        ?>
                                        <div class="card-body">
                                            <p>Komentar Kosong!</p>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-4">
                                <div class="card card-info">
                                    <div class="card-header">
                                        <h4>Berita Terbaru</h4>
                                    </div>
                                    <div class="card-body">

                                        <?php
                                        $query = $con->read_data_new();

                                        if ($query->num_rows > 0) {
                                            foreach ($query->fetch_all(MYSQLI_BOTH) as $data) {
                                        ?>

                                                <ul class="list-unstyled list-unstyled-border">
                                                    <li class="media">
                                                        <img class="mr-3 rounded-circle" width="50" height="50" src="admin/assets/images/postingan/<?php echo ($data['gambar_post']); ?>" alt="avatar">
                                                        <div class="media-body">
                                                            <div class="float-right text-primary"><?php echo ($con->get_date_diff_new($data, "tanggal_post")); ?></div>
                                                            <div class="media-title">
                                                                <a href="detail-post.php?id=<?php echo ($data['id_post']); ?>">
                                                                    <?php echo (substr($data['judul'], 0, 35)); ?>
                                                                </a>
                                                            </div>
                                                            <span class="text-small text-muted">
                                                                <p align="justify">
                                                                    <?php echo ('
                                                                        <script>
                                                                            document.writeln(\' ' . $data['detail_post'] . ' \'.replace(/<[^>]*>?/gi, "").substr(0, 100) + "...");
                                                                        </script>
                                                                        ');
                                                                    ?>
                                                                </p>
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>

                                        <?php
                                            }
                                        }
                                        ?>

                                        <div class="text-center pt-1 pb-1">
                                            <a href="." class="btn btn-primary btn-lg btn-round">
                                                View All
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php
                    } else {
                        require('page/empty-state.php');
                    }
                    ?>

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
    <script src="assets/modules/summernote/summernote-bs4.js"></script>

    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>