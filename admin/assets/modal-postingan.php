<div class="modal fade" id="modal-post" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="card card-info">
                        <div class="card-header ">
                            <h4>Ubah Postingan</h4>
                            <div class="card-header-action">
                                <a href="#" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i></a>
                            </div>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="controller/control-tulis-post.php?status=set_ubah" enctype="multipart/form-data" class="needs-validation" novalidate="">
                                <!-- Judul Postingan -->
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" id="judul" name="judul" required>
                                        <input type="hidden" id="id" name="id">
                                        <div class="invalid-feedback">
                                            Mohon isi judul postingan
                                        </div>
                                    </div>
                                </div>
                                <!-- Pilih Kategori -->
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control selectric" id="kategori" name="kategori" onChange="getSubCat(this.value);" required>
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
                                        <textarea class="summernote" id="detail_post" name="detail_post" required></textarea>
                                        <div class="invalid-feedback">
                                            Mohon isi postingan
                                        </div>
                                    </div>
                                </div>
                                <!-- Pilih Tags -->
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tags</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control selectric" name="tags" id="tags" required>

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
                                        <select class="form-control selectric" id="status" name="status" required>
                                            <option value="PUBLISH">PUBLISH</option>
                                            <option value="DRAFT">DRAFT</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Tombol Post -->
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button type="submit" name="submit" class="btn btn-primary">Ubah Post</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function onEdit(val) {
        // alert(val);
        $.ajax({
            url: "controller/control-post.php",
            method: "POST",
            data: "id_postingan=" + val,
            dataType: "json",
            success: function(data) {
                getSubCat(data.id_kategori, data.id_tags);
                $('#id').val(data.id_post);
                $('#judul').val(data.judul);
                $('#kategori').val(data.id_kategori).change;
                $('#detail_post').summernote('code',data.detail_post);
                $('#status').val(data.status_post).change;
                // $('#image-preview').css("background-image", "url(admin/assets/images/postingan/" + data.gambar_post + ")");;
                $('#modal-post').modal('show');
            }
        });
    }

    function getSubCat(val, check) {
        $.ajax({
            type: "POST",
            url: "../db/Get-Subcat.php",
            data: 'catid=' + val,
            success: function(response) {
                $("#tags").html(response);
                $('#tags').val(check).change;
            }
        });
    }
</script>