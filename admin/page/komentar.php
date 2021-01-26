<?php

?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="index.php?page=post&pills=all" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Berita</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="index.php">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Berita</a></div>
                <div class="breadcrumb-item">Data Komentar</div>
            </div>
        </div>
        <!--  -->
        <!-- ================== TABLE CONTAINER ================== -->
        <!--  -->
        <?php
        require('../db/Aksi-Komentar.php');
        $con = new Aksi();
        ?>
        <div class="row">
            <div class="col-12">
                <div class="card mb-0 card-primary">
                    <div class="card-body">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link <?php if (($_GET['status']) == "DRAFT") {
                                                        echo ('active');
                                                    } ?>" href="index.php?page=komentar&status=DRAFT">Draft
                                    <span class="badge badge-primary"><?php echo ($con->count_komentar(0)); ?></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if (($_GET['status']) == "APROVED") {
                                                        echo ('active');
                                                    } ?>" href="index.php?page=komentar&status=APROVED">Aproved
                                    <span class="badge badge-primary"><?php echo ($con->count_komentar(1)); ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <div class="card card-primary">
                    <div class="card-header ">
                        <h4>Data Komentar</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped display nowrap" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            No.
                                        </th>
                                        <th class="text-center">
                                            Aksi
                                        </th>
                                        <th>ID Komentar</th>
                                        <th>ID Post</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Tanggal Post</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $index = 1;

                                    $status = 0;
                                    if (($_GET['status']) == "DRAFT") {
                                        $status = 0;
                                    } else {
                                        $status = 1;
                                    }

                                    $query = $con->read_data($status);
                                    if ($query->num_rows > 0) {
                                        $count = $query->field_count;
                                        foreach ($query->fetch_all(MYSQLI_BOTH) as $data) {
                                            echo ("</tr>");
                                            echo ("<td>" . $index . "</td>");

                                            if ($status == 1) {
                                    ?>
                                                <td class="text-center">
                                                    <a href="controller/control-komentar.php?status=set_draft&id=<?php echo ($data[0]); ?>" class="btn btn-warning btn-action mr-1" data-toggle="tooltip" title="Set Draft">
                                                        <i class="fas fa-angle-double-down"></i>
                                                    </a>
                                                <?php
                                            } else {
                                                ?>
                                                <td class="text-center">
                                                    <a href="controller/control-komentar.php?status=set_aproved&id=<?php echo ($data[0]); ?>" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Set Aproved">
                                                        <i class="fas fa-angle-double-up"></i>
                                                    </a>
                                                <?php
                                            }
                                                ?>
                                                <a class="btn btn-info btn-action mr-1" id="<?php echo($data[0]); ?>" onclick="onShow(this.id);" data-toggle="tooltip" title="Lihat Komentar">
                                                    <i class="fas fa-stream"></i>
                                                </a>
                                                <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Hapus" data-confirm="Konfirmasi Hapus!|Apakah kamu yakin ingin menghapus?" data-confirm-yes="window.location.href = 'controller/control-komentar.php?status=set_hapus&back=<?php echo ($_GET['status']); ?>&id=<?php echo ($data[0]); ?>'">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                                </td>
                                        <?php
                                            for ($i = 0; $i < $count - 1; $i++) {
                                                if ($i !== 4) {
                                                    echo ("<td>" . $data[$i] . "</td>");
                                                }
                                            }
                                            echo ("</tr>");
                                            $index++;
                                        }
                                    }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require('assets/modal-komentar.php'); ?>
</div>