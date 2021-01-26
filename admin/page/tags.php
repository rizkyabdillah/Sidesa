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
                <div class="breadcrumb-item">Data Tags</div>
            </div>
        </div>
        <!--  -->
        <!-- ================== TABLE CONTAINER ================== -->
        <!--  -->
        <?php
        require('../db/Aksi-Tags.php');
        $con = new Aksi();
        ?>
        <div class="row">
            <div class="col-12">
                <div class="card mb-0 card-primary">
                    <div class="card-body">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link <?php if (($_GET['pills']) == "aktif") {
                                                        echo ('active');
                                                    } ?>" href="index.php?page=tags&pills=aktif">Aktif
                                    <span class="badge badge-primary"><?php echo ($con->count_tags(0)); ?></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if (($_GET['pills']) == "nonaktif") {
                                                        echo ('active');
                                                    } ?>" href="index.php?page=tags&pills=nonaktif">Tidak Aktif
                                    <span class="badge badge-primary"><?php echo ($con->count_tags(1)); ?></span>
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
                        <h4>Data Tags</h4>
                        <div class="card-header-action ">
                            <a class="btn btn-icon btn-info" data-toggle="modal" href="#modal-tags">
                                <i class="fas fa-plus"> Tambah Data</i>
                            </a>
                        </div>
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
                                        <th>ID Tags</th>
                                        <th>Nama Tags</th>
                                        <th>Nama Kategori</th>
                                        <th>Detail Tags</th>
                                        <th>Status Aktif</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $index = 1;

                                    $status = 0;
                                    if (($_GET['pills']) == "aktif") {
                                        $status = 0;
                                    } else {
                                        $status = 1;
                                    }

                                    $query = $con->read_data_tags_filter($status);
                                    if ($query->num_rows > 0) {
                                        $count = $query->field_count;
                                        foreach ($query->fetch_all(MYSQLI_BOTH) as $data) {
                                            echo ("</tr>");
                                            echo ("<td>" . $index . "</td>");

                                            if ($status == 0) {
                                    ?>
                                                <td>
                                                    <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip"  title="Ubah" id="<?php echo ($data[0]); ?>" onclick="onEdit(this.id);">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <a href="controller/control-tags.php?status=set_nonaktif&id=<?php echo ($data[0]); ?>" class="btn btn-warning btn-action mr-1" data-toggle="tooltip" title="Set Nonaktif">
                                                        <i class="fas fa-angle-double-down"></i>
                                                    </a>
                                                <?php
                                            } else {
                                                ?>
                                                <td>
                                                    <a href="controller/control-tags.php?status=set_aktif&id=<?php echo ($data[0]); ?>" class="btn btn-info btn-action mr-1" data-toggle="tooltip" title="Set Aktif">
                                                        <i class="fas fa-angle-double-up"></i>
                                                    </a>
                                                <?php
                                            }
                                                ?>
                                                <a href="#" class="btn btn-danger btn-action" data-toggle="tooltip" title="Hapus" data-confirm="Konfirmasi Hapus!|Apakah kamu yakin ingin menghapus?" data-confirm-yes="window.location.href = 'controller/control-tags.php?status=set_hapus&id=<?php echo ($data[0]); ?>'">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                                </td>
                                        <?php
                                            for ($i = 0; $i < $count; $i++) {
                                                echo ("<td>" . $data[$i] . "</td>");
                                            }
                                            echo ("</tr>");
                                            $index++;
                                        }
                                    }
                                        ?>
                                </tbody>
                            </table>
                            <script>
                                $(document).ready(function() {
                                    $('#table-1').DataTable();
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require('assets/modal-tags.php'); ?>
</div>