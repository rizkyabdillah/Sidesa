<?php

?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Master Data</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="index.php">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Master Data</a></div>
                <div class="breadcrumb-item">Data Penduduk</div>
            </div>
        </div>
        <!--  -->
        <!-- ================== TABLE CONTAINER ================== -->
        <!--  -->
        <?php
        require('../db/Aksi-Penduduk.php');
        $con = new Aksi();
        ?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <div class="card card-primary">
                    <div class="card-header ">
                        <h4>Data Penduduk</h4>
                        <div class="card-header-action ">
                            <a class="btn btn-icon btn-info" data-toggle="modal" href="#modal-tambah">
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
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tempat / Tanggal Lahir</th>
                                        <th>Agama</th>
                                        <th>Pendidikan Dalam KK</th>
                                        <th>Pendidikan sekarang</th>
                                        <th>Pekerjaan</th>
                                        <th>Status Warga Negara</th>
                                        <th>Status Penduduk</th>
                                        <th>Alamat Sekarang</th>
                                        <th>Nama Desa</th>
                                        <th>Nama Dusun</th>
                                        <th>RT / RW</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $index = 1;
                                    $query = $con->read_data();
                                    if ($query->num_rows > 0) {
                                        $count = $query->field_count;
                                        foreach ($query->fetch_all(MYSQLI_BOTH) as $data) {
                                            echo ("</tr>");
                                            echo ("<td>" . $index . "</td>");
                                    ?>
                                            <td class="text-center">
                                                <a class="btn btn-info btn-action mr-1" data-toggle="tooltip" title="Detail" id="<?php echo($data[0]); ?>" onclick="onDetail(this.id);">
                                                    <i class="fas fa-list-ul"></i>
                                                </a>
                                                <a class="btn btn-primary btn-action" data-toggle="tooltip" title="Ubah Anggota" id="<?php echo($data[0]); ?>" onclick="onUbah(this.id);">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <?php
                                                if ($con->is_detail_exist($data['nik']) < 1) {
                                                ?>
                                                    <a class="btn btn-danger btn-action ml-1" data-toggle="tooltip" title="Hapus" data-confirm="Konfirmasi Hapus!|Apakah kamu yakin ingin menghapus?" data-confirm-yes="window.location.href = 'controller/control-keluarga.php?status=set_hapus_&id=<?php echo ($data[1]); ?>'">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                <?php
                                                }
                                                ?>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require('assets/modal-penduduk.php'); ?>
</div>