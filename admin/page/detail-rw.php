<?php
    $id_dusun = $_GET['id'];
?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="index.php?page=administratif" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Pemerintahan Desa</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="index.php">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Pemerintahan Desa</a></div>
                <div class="breadcrumb-item">Wilayah Administratif</div>
            </div>
        </div>
        <!--  -->
        <!-- ================== TABLE CONTAINER ================== -->
        <!--  -->
        <?php
        require('../db/Aksi-rt-rw.php');
        $con = new Aksi();
        $id_dusun = $_GET['id'];
        ?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <div class="card card-primary">
                    <div class="card-header ">
                        <h4>Data RW (Dusun = <?php echo ($con->read_nama_dusun($id_dusun)); ?>)</h4>
                        <div class="card-header-action ">
                            <a class="btn btn-icon btn-info" data-toggle="modal" href="#modal-rw">
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
                                        <th>ID RW</th>
                                        <th>Nama Ketua RW</th>
                                        <th>Nomor RW</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $index = 1;
                                    $query = $con->read_rw_filter_dusun($id_dusun);
                                    if ($query->num_rows > 0) {
                                        $count = $query->field_count;
                                        foreach ($query->fetch_all() as $data) {
                                            echo ("<tr>");
                                            echo ("<td>" . $index . "</td>");
                                    ?>
                                            <td class="text-center">
                                                <a href="index.php?page=rt&id=<?php echo($data[0]);?>&id_back=<?php echo($id_dusun);?>" class="btn btn-info btn-action" data-toggle="tooltip" title="Detail">
                                                    <i class="fas fa-list-ul"></i>
                                                </a>
                                                <a class="btn btn-primary btn-action ml-1" data-toggle="tooltip" title="Ubah"  id="<?php echo($data[0]); ?>" onclick="onEdit(this.id);">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <a class="btn btn-danger btn-action ml-1" data-toggle="tooltip" title="Hapus" data-confirm="Konfirmasi Hapus!|Apakah kamu yakin ingin menghapus?" data-confirm-yes="window.location.href = 'controller/control-rt-rw.php?status=set_hapus_rw&id=<?php echo ($data[0]); ?>&id_now=<?php echo ($id_dusun); ?>'">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                    <?php
                                            for ($i = 0; $i < $count; $i++) {
                                                if($i == 3) {
                                                    echo ("<td>" . sprintf("%'.03d", $data[$i]) . "</td>");
                                                } else if ($i !== 1) {
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
    <?php require('assets/modal-rw.php'); ?>
</div>