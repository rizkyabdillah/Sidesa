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
                            <h4>Tambah Kategori Baru</h4>
                            <div class="card-header-action">
                                <a href="#" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i></a>
                            </div>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="controller/control-kategori.php?status=set_tambah" class="needs-validation" novalidate="">
                                <div class="form-row">
                                    <div class="form-group col-4">
                                        <label class="col-form-label">ID Kategori</label>
                                        <input value="<? echo('K' . $id_random); ?>" class="form-control" disabled>
                                        <input value="<? echo('K' . $id_random); ?>" type="hidden" class="form-control" name="id_kategori1" >
                                    </div>
                                    <div class="form-group col-8">
                                        <label class="col-form-label">Nama Kategori</label>
                                        <input class="form-control" name="nama" placeholder="Nama" required>
                                        <div class="invalid-feedback">
                                            Mohon isi nama kategori
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label class="col-form-label">Detail Kategori</label>
                                        <textarea class="form-control" name="detail_kategori" placeholder="Detail Kategori" required></textarea>
                                        <div class="invalid-feedback">
                                            Mohon isi detail kategori
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12">
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
                            <h4>Ubah Kategori</h4>
                            <div class="card-header-action">
                                <a href="#" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="controller/control-kategori.php?status=set_ubah" class="needs-validation" novalidate="">
                                <div class="form-row">
                                    <div class="form-group col-4">
                                        <label class="col-form-label">ID Kategori</label>
                                        <input class="form-control" name="id_kategori" id="id_kategori" disabled>
                                        <input type="hidden" class="form-control" name="id_kategori1" id="id_kategori1">
                                    </div>
                                    <div class="form-group col-8">
                                        <label class="col-form-label">Nama Kategori</label>
                                        <input class="form-control" name="nama" id="nama" placeholder="Nama" required>
                                        <div class="invalid-feedback">
                                            Mohon isi nama kategori
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label class="col-form-label">Detail Kategori</label>
                                        <textarea class="form-control" name="detail_kategori" id="detail_kategori" placeholder="Detail Kategori" required></textarea>
                                        <div class="invalid-feedback">
                                            Mohon isi detail kategori
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12">
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
        $.ajax({
            url: "controller/control-kategori.php",
            method: "POST",
            data: "id_kategori=" +val ,
            dataType: "json",
            success: function(data) {
                // alert(data.detail_kategori);
                $('#id_kategori').val(data.id_kategori);
                $('#id_kategori1').val(data.id_kategori);
                $('#nama').val(data.nama_kategori);
                $('#detail_kategori').val(data.detail_kategori);
                $('#status').val(data.status_aktif).change;
                $('#modal-edit').modal('show');
            }
        });
    }
</script>