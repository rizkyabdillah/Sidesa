<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand"> <a href="index.php">SIDESA.MY.ID</a> </div>
        <div class="sidebar-brand sidebar-brand-sm"> <a href="index.php">SD</a> </div>
        <ul class="sidebar-menu">
            <!-- ================== MENU LEFT 0 ================== -->
            <li class="menu-header">Dashboard</li>

            <li class="dropdown <?php if(empty($_GET['page'])) { echo('active'); } ?>">
                <a href="index.php" class="nav-link"> <i class="fas fa-fire"></i> <span>Home Page</span> </a>
            </li>
            <!-- ================== MENU LEFT 1 ================== -->
            <li class="dropdown <?php if($_GET['page']== 'perangkat' || $_GET['page']== 'administratif' || $_GET['page']== 'rw' || $_GET['page']== 'rt') { echo('active'); } ?>" >
                <a href="#" class="nav-link has-dropdown"> <i class="fas fa-building"></i> <span>Pemerintahan Desa</span> </a>
                <ul class="dropdown-menu">
                    <li class="<?php if($_GET['page']== 'administratif' || $_GET['page']== 'rw' || $_GET['page']== 'rt') { echo('active'); } ?>"> 
                        <a class="nav-link" href="index.php?page=administratif">Wilayah Administratif</a> 
                    </li>
                    <li class="<?php if($_GET['page']== 'perangkat') { echo('active'); } ?>"> 
                        <a class="nav-link" href="index.php?page=perangkat">Data Perangkat</a> 
                    </li>
                </ul>
            </li>
            <!-- ================== MENU LEFT 2 ================== -->
            <li class="dropdown <?php if($_GET['page'] == 'penduduk' || $_GET['page'] == 'keluarga') { echo('active'); }?>" >
                <a href="#" class="nav-link has-dropdown"> <i class="fas fa-columns"></i> <span>Master Data</span> </a>
                <ul class="dropdown-menu">
                    <li class="<?php if($_GET['page']== 'penduduk') { echo('active'); } ?>"> 
                        <a class="nav-link" href="index.php?page=penduduk">Data Penduduk</a> 
                    </li>
                    <li class="<?php if($_GET['page']== 'keluarga') { echo('active'); } ?>"> 
                        <a class="nav-link" href="index.php?page=keluarga">Data Keluarga</a> 
                    </li>
                </ul>
            </li>
            <!-- ================== MENU LEFT 4 ================== -->
            <li class="dropdown <?php if($_GET['page']== 'kategori' || $_GET['page']== 'tags' || $_GET['page']== 'tulis-post' || $_GET['page']== 'post' || $_GET['page']== 'komentar') { echo('active'); } ?>">
                <a href="#" class="nav-link has-dropdown"> <i class="fas fa-money-check"></i> <span>Berita</span> </a>
                <ul class="dropdown-menu">
                    <li class="<?php if($_GET['page']== 'tulis-post') { echo('active'); } ?>"> 
                        <a class="nav-link" href="index.php?page=tulis-post">Tulis Postingan</a> 
                    </li>
                    <li class="<?php if($_GET['page']== 'kategori' || $_GET['page']== 'tags') { echo('active'); } ?>"> 
                        <a class="nav-link" href="index.php?page=kategori&pills=aktif">Data Kategori</a> 
                    </li>
                    <li class="<?php if($_GET['page']== 'post') { echo('active'); } ?>"> 
                        <a class="nav-link" href="index.php?page=post&pills=all">Data Postingan</a> 
                    </li>
                    <li class="<?php if($_GET['page']== 'komentar') { echo('active'); } ?>"> 
                        <a class="nav-link" href="index.php?page=komentar&status=DRAFT">Data Komentar</a> 
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>