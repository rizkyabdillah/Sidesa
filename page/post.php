<div class="section-header mb-3">
    <i class="ion-ios-paper-outline" data-pack="default"></i>
    <h1 class="ml-3">News</h1>
</div>

<div class="row">

    <?php
    $con = new Aksi();

    // SET PAGE. IF SESSION['pages'] == empty SET PAGE TO 1
    $page = (isset($_GET['pages'])) ? $_GET['pages'] : 1;
    // LIMIT PAGES
    $limit = 6;
    $limitStart = ($page - 1) * $limit;

    $query = $con->read_data_limit($limitStart, $limit);
    $JumlahData = $con->count_postingan();

    if ($JumlahData > 0) {
        foreach ($query->fetch_all(MYSQLI_BOTH) as $data) {

    ?>

            <div class="col-12 col-md-4 col-lg-4">
                <article class="article article-style-c">
                    <div class="article-header">
                        <div class="article-image" style="background-image: url('admin/assets/images/postingan/<?php echo ($data['gambar_post']); ?>')">
                        </div>
                    </div>
                    <div class="article-details">
                        <div class="article-category"><a>News</a>
                            <div class="bullet"></div>
                            <a>
                                <?php echo ($con->get_date_diff($data, "tanggal_post")); ?>
                            </a>
                        </div>
                        <div class="article-title">
                            <h2><a href="detail-post.php?id=<?php echo ($data['id_post']); ?>"><?php echo (substr($data['judul'], 0, 66)); ?></a></h2>
                        </div>
                        <p align="justify">
                            <?php echo ('
                                <script>
                                    document.writeln(\' ' . $data['detail_post'] . ' \'.replace(/<[^>]*>?/gi, "").substr(0, 200) + "...");
                                </script>
                                ');
                            ?>
                        </p>
                    </div>
                </article>
            </div>



    <?php
        }
    } else {
        require('empty-state.php');
    }
    ?>

</div>
<div class="row">
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
                    <a class="page-link" href="index.php?pages=<?php echo ($linkPrev); ?>" aria-label="Prev">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Prev</span>
                    </a>
                </li>

                <?php
                $jumlahPage = ceil($JumlahData / $limit);
                $jumlahNumber = 1;
                $startNumber = ($page > $jumlahNumber) ? $page - $jumlahNumber : 1;
                $endNumber = ($page < ($jumlahPage - $jumlahNumber)) ? $page + $jumlahNumber : $jumlahPage;
                for ($i = $startNumber; $i <= $endNumber; $i++) {
                    $linkActive = ($page == $i) ? 'active' : '';
                ?>
                    <li class="page-item <?php echo ($linkActive); ?>">
                        <a class="page-link" href="index.php?pages=<?php echo $i; ?>"><?php echo $i; ?></a>
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
                    <a class="page-link" href="index.php?pages=<?php echo ($linkNext); ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>