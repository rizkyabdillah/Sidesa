<?php
require('assets/library.php');
$lib = new library();
$id_random = $lib->getRandomID();
?>

<div class="modal fade" id="modal-tags" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="card card-info">
                        <div class="card-header ">
                            <h4>Tambah Tags Baru</h4>
                            <div class="card-header-action">
                                <a href="#" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i></a>
                            </div>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="controller/control-tags.php?status=set_tambah" class="needs-validation" novalidate="">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label class="col-form-label">ID Tags</label>
                                        <input value="<? echo('T' . $id_random); ?>" class="form-control" disabled>
                                        <input value="<? echo('T' . $id_random); ?>" name="id_tags1" type="hidden">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label class="col-form-label">Nama Tags</label>
                                        <input class="form-control" name="nama" placeholder="Nama" required>
                                        <div class="invalid-feedback">
                                            Mohon isi nama tags
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label class="col-form-label">Detail tags</label>
                                        <textarea class="form-control" name="detail_tags" placeholder="Detail Tags" required></textarea>
                                        <div class="invalid-feedback">
                                            Mohon isi detail tags
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label class="col-form-label">Pilih Kategori</label>
                                        <select class="form-control selectric" name="id_kategori" required>
                                            <option value="">Pilih Kategori</option>
                                            <?php
                                            $query = $con->read_data_kategori();
                                            foreach ($query->fetch_all(MYSQLI_BOTH) as $data) {
                                            ?>
                                                <option value="<?php echo ($data['id_kategori']); ?>"><?php echo ($data['nama_kategori']); ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label class="col-form-label">Status Aktif</label>
                                        <select class="form-control selectric" name="status" required>
                                            <option value="AKTIF">AKTIF</option>
                                            <option value="TIDAK AKTIF">TIDAK AKTIF</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" name="submit" class="btn btn-info btn-lg btn-round">
                                        <i class="fas fa-save"></i> Simpan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="card card-info">
                        <div class="card-header ">
                            <h4>Ubah Tags</h4>
                            <div class="card-header-action">
                                <a href="#" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i></a>
                            </div>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="controller/control-tags.php?status=set_ubah" class="needs-validation" novalidate="">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label class="col-form-label">ID Tags</label>
                                        <input class="form-control" id="id_tags" disabled>
                                        <input name="id_tags1" id="id_tags1" type="hidden">
                                        <div class="invalid-feedback">
                                            Mohon isi id tags
                                        </div>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label class="col-form-label">Nama Tags</label>
                                        <input class="form-control" name="nama" id="nama" placeholder="Nama" required>
                                        <div class="invalid-feedback">
                                            Mohon isi nama tags
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label class="col-form-label">Detail tags</label>
                                        <textarea class="form-control" name="detail_tags" id="detail_tags" placeholder="Detail Tags" required></textarea>
                                        <div class="invalid-feedback">
                                            Mohon isi detail tags
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label class="col-form-label">Pilih Kategori</label>
                                        <select class="form-control selectric" name="id_kategori" id="id_kategori" required>
                                            <option value="">Pilih Kategori</option>
                                            <?php
                                            $query = $con->read_data_kategori();
                                            foreach ($query->fetch_all(MYSQLI_BOTH) as $data) {
                                            ?>
                                                <option value="<?php echo ($data['id_kategori']); ?>"><?php echo ($data['nama_kategori']); ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label class="col-form-label">Status Aktif</label>
                                        <select class="form-control selectric" name="status" id="status" required>
                                            <option value="AKTIF">AKTIF</option>
                                            <option value="TIDAK AKTIF">TIDAK AKTIF</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" name="submit" class="btn btn-info btn-lg btn-round">
                                        <i class="fas fa-pencil-alt"></i> Ubah
                                    </button>
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
            url: "controller/control-tags.php",
            method: "POST",
            data: "id_tags=" + val,
            dataType: "json",
            success: function(data) {
                $('#nama').val(data.nama_tags);
                $('#detail_tags').val(data.detail_tags);
                $('#id_kategori').val(data.id_kategori).change;
                $('#status').val(data.status_aktif).change;
                $('#id_tags').val(data.id_tags);
                $('#id_tags1').val(data.id_tags);
                $('#modal-edit').modal('show');
            }
        });
    }
</script>