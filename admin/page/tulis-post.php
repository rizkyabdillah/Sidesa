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
                <div class="breadcrumb-item">Tulis Postingan</div>
            </div>
        </div>
        <!--  -->
        <!-- ================== FORM CONTAINER ================== -->
        <!--  -->
        <?php
        require('../db/Aksi-Postingan.php');
        $con = new Aksi();

        ?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <div class="card card-primary">
                    <div class="card-header ">
                        <h4>Tulis Postingan Baru</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="controller/control-tulis-post.php" enctype="multipart/form-data" class="needs-validation" novalidate="">
                            <!-- Judul Postingan -->
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="judul" required>
                                    <div class="invalid-feedback">
                                        Mohon isi judul postingan
                                    </div>
                                </div>
                            </div>
                            <!-- Pilih Kategori -->
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control selectric" name="kategori" onChange="getSubCat(this.value);" required>
                                        <option value=""> Pilih Kategori </option>
                                        <?php
                                        $kategori = $con->read_data_kategori()->fetch_all(MYSQLI_BOTH);
                                        foreach ($kategori as $data) {
                                        ?>
                                            <option value="<?php echo ($data['id_kategori']); ?>"><?php echo ($data['nama_kategori']); ?></option>
                                        <?php
                                        }

                                        ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Mohon pilih kategori
                                    </div>
                                </div>
                            </div>
                            <!-- Isi Postingan -->
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea class="summernote" name="detail_post" required></textarea>
                                    <div class="invalid-feedback">
                                        Mohon isi postingan
                                    </div>
                                </div>
                            </div>
                            <!-- Thumbnails Gambar -->
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Thumbnail</label>
                                <div class="col-sm-12 col-md-7">
                                    <div id="image-preview" class="image-preview">
                                        <label for="image-upload" id="image-label">Choose File</label>
                                        <input type="file" name="image" id="image-upload" />
                                    </div>
                                </div>
                            </div>
                            <!-- Pilih Tags -->
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tags</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control selectric" name="tags" id="tags" required>
                                        <option value=""> Pilih Tags </option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Mohon pilih tags
                                    </div>
                                </div>
                            </div>
                            <!-- Status -->
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control selectric" name="status" required>
                                        <option value="PUBLISH">PUBLISH</option>
                                        <option value="DRAFT">DRAFT</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Tombol Post -->
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button type="submit" name="submit" class="btn btn-primary">Create Post</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function getSubCat(val) {
            $.ajax({
                type: "POST",
                url: "../db/Get-Subcat.php",
                data: 'catid=' + val,
                success: function(response) {
                    $("#tags").html(response);
                }
            });
        }
    </script>
</div>