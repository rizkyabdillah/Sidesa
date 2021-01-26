<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Berita</h1>
            <div class="section-header-button">
                <a href="index.php?page=tulis-post" class="btn btn-primary">Tulis Postingan</a>
            </div>
            <div class="section-header-button">
                <a href="index.php?page=kategori&pills=aktif" class="btn btn-primary">Data Kategori</a>
            </div>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="index.php">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Berita</a></div>
                <div class="breadcrumb-item">Data Postingan</div>
            </div>
        </div>
        <!--  -->
        <!-- ================== POSTINGAN CONTAINER ================== -->
        <!--  -->
        <?php
        require('../db/Aksi-Postingan.php');
        $con = new Aksi();
        ?>
        <div class="row">
            <div class="col-12">
                <div class="card mb-0 card-primary">
                    <div class="card-body">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link <?php if (($_GET['pills']) == "all") {
                                                        echo ('active');
                                                    } ?>" href="index.php?page=post&pills=all">All
                                    <span class="badge badge-primary"><?php echo ($con->count_postingan(0)); ?></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if (($_GET['pills']) == "publish") {
                                                        echo ('active');
                                                    } ?>" href="index.php?page=post&pills=publish">Publish
                                    <span class="badge badge-primary"><?php echo ($con->count_postingan(1)); ?></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if (($_GET['pills']) == "draft") {
                                                        echo ('active');
                                                    } ?>" href="index.php?page=post&pills=draft">Draft
                                    <span class="badge badge-primary"><?php echo ($con->count_postingan(2)); ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>All Posts</h4>
                    </div>
                    <div class="card-body">
                        <!-- COTROL SELECTRIC -->
                        <div class="float-left">
                            <select class="form-control selectric">
                                <option>Action For Selected</option>
                                <option>Move to Draft</option>
                                <option>Move to Pending</option>
                                <option>Delete Pemanently</option>
                            </select>
                        </div>
                        <!-- SEARCH -->
                        <div class="float-right">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="clearfix mb-3"></div>

                        <div class="table-responsive">
                            <table class="table table-striped display nowrap">
                                <!-- TABLE HEADER -->
                                <tr>
                                    <th class="text-center pt-2"> </th>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Tags</th>
                                    <th>Tanggal Post</th>
                                    <th>Status</th>
                                </tr>
                                <!-- TABLE CONTENT -->
                                <?php

                                $status = 0;
                                if (($_GET['pills']) == "all") {
                                    $status = 0;
                                } else if (($_GET['pills']) == "publish") {
                                    $status = 1;
                                } else {
                                    $status = 2;
                                }

                                // SET PAGE. IF SESSION['pages'] == empty SET PAGE TO 1
                                $page = (isset($_GET['pages'])) ? $_GET['pages'] : 1;
                                // LIMIT PAGES
                                $limit = 5;
                                $limitStart = ($page - 1) * $limit;

                                $query = $con->read_data_postingan_limit($status, $limitStart, $limit);

                                if ($query->num_rows > 0) {
                                    $count = $query->field_count;
                                    foreach ($query->fetch_all() as $data) {
                                ?>
                                        <tr>
                                            <td>
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
                                                    <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td><?php echo ($data[1]); ?>
                                                <div class="table-links">
                                                    <a href="#" id="<?php echo($data[0]); ?>" onclick="onEdit(this.id);">Edit</a>
                                                    <div class="bullet"></div>
                                                    <?php
                                                    if ($data[5] == "PUBLISH") {
                                                    ?>
                                                        <a target="./blank" href="../detail-post.php?id=<?php echo ($data[0]); ?>">Lihat</a>
                                                        <div class="bullet"></div>
                                                        <a href="controller/control-post.php?status=set_draft&id=<?php echo ($data[0]); ?>">Draft</a>
                                                        <div class="bullet"></div>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <a href="controller/control-post.php?status=set_publish&id=<?php echo ($data[0]); ?>">Publish</a>
                                                        <div class="bullet"></div>
                                                    <?php
                                                    }
                                                    ?>
                                                    <a href="" data-confirm="Konfirmasi Hapus!|Apakah kamu yakin ingin menghapus?" data-confirm-yes="window.location.href = 'controller/control-post.php?status=set_hapus&id=<?php echo ($data[0]); ?>'" class="text-danger">Hapus</a>
                                                </div>
                                            </td>
                                            <td><?php echo ($data[2]); ?></td>
                                            <td><?php echo ($data[3]); ?></td>
                                            <td><?php echo ($data[4]); ?></td>
                                            <td>
                                                <?php
                                                $badge = "";
                                                switch ($data[5]) {
                                                    case "PUBLISH":
                                                        $badge = "badge-primary";
                                                        break;
                                                    default:
                                                        $badge = "badge-warning";
                                                        break;
                                                }
                                                ?>
                                                <div class="badge <?php echo ($badge); ?>"><?php echo ($data[5]); ?></div>
                                            </td>
                                        </tr>
                                <?php

                                    }
                                }
                                ?>
                            </table>
                        </div>
                        <!-- PAGE NAVIGATION -->
                        <div class="float-right">
                            <nav>
                                <ul class="pagination">
                                    <?php
                                    // Jika page = 1, maka LinkPrev disable
                                    $prev = null;
                                    $linkPrev = 0;
                                    if ($page == 1) {
                                        $prev = false;
                                    } else {
                                        $linkPrev = ($page > 1) ? $page - 1 : 1;
                                        $prev = true;
                                    }
                                    ?>
                                    <li class="page-item <?php echo (($prev == false) ? "disabled" : ""); ?>">
                                        <a class="page-link" href="index.php?page=post&pills=<?php echo ($_GET['pills']); ?>&pages=<?php echo ($linkPrev); ?>" aria-label="Prev">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Prev</span>
                                        </a>
                                    </li>

                                    <?php
                                    $JumlahData = $con->count_postingan($status);
                                    $jumlahPage = ceil($JumlahData / $limit);
                                    $jumlahNumber = 1;
                                    $startNumber = ($page > $jumlahNumber) ? $page - $jumlahNumber : 1;
                                    $endNumber = ($page < ($jumlahPage - $jumlahNumber)) ? $page + $jumlahNumber : $jumlahPage;
                                    for ($i = $startNumber; $i <= $endNumber; $i++) {
                                        $linkActive = ($page == $i) ? 'active' : '';
                                    ?>
                                        <li class="page-item <?php echo ($linkActive); ?>">
                                            <a class="page-link" href="index.php?page=post&pills=<?php echo ($_GET['pills']); ?>&pages=<?php echo $i; ?>"><?php echo $i; ?></a>
                                        </li>

                                    <?php
                                    }


                                    $next = null;
                                    $linkNext = 0;
                                    if ($page == $jumlahPage) {
                                        $next = false;
                                    } else {
                                        $linkNext = ($page < $jumlahPage) ? $page + 1 : $jumlahPage;
                                        $next = true;
                                    }
                                    ?>
                                    <li class="page-item <?php echo (($next == false) ? "disabled" : ""); ?>">
                                        <a class="page-link" href="index.php?page=post&pills=<?php echo ($_GET['pills']); ?>&pages=<?php echo ($linkNext); ?>" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require('assets/modal-postingan.php'); ?>
</div>