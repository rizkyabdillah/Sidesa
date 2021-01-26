<?php
require('assets/library.php');
$lib = new library();
$id_random = $lib->getRandomID();
?>

<div class="modal fade" id="modal-dusun" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="card card-info">
                        <div class="card-header ">
                            <h4>Tambah Dusun Baru</h4>
                            <div class="card-header-action">
                                <a href="#" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i></a>
                            </div>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="controller/control-administratif.php?status=set_tambah" class="needs-validation" novalidate="">
                                <div class="form-row">
                                    <div class="form-group col-4">
                                        <label class="col-form-label">ID Dusun</label>
                                        <input value="<? echo('S' . $id_random); ?>" class="form-control" disabled>
                                        <input value="<? echo('S' . $id_random); ?>" type="hidden" class="form-control" name="id">
                                    </div>
                                    <div class="form-group col-8">
                                        <label class="col-form-label">Nama Dusun</label>
                                        <input type="text" class="form-control" name="nama" placeholder="Nama Dusun" required>
                                        <div class="invalid-feedback">
                                            Mohon isi nama dusun
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label class="col-form-label">Ketua Dusun</label>
                                        <select class="form-control select2" name="id_ketua" required>
                                            <option value="">Pilih Ketua Dusun</option>
                                            <?php
                                            $row = $con->read_data_penduduk()->fetch_all(MYSQLI_BOTH);
                                            foreach ($row as $data) {
                                            ?>
                                                <option value="<?php echo ($data['nik']); ?>"><?php echo ($data['nik'] . ' / ' . $data['nama']); ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            Mohon pilih kepala Dusun
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label class="col-form-label">Luas Wilayah</label>
                                        <input type="number" class="form-control" name="luas" placeholder="Luas Wilayah (Hektare)" required>
                                        <div class="invalid-feedback">
                                            Mohon isi luas wilayah
                                        </div>
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

<div class="modal fade" id="modal-edit" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="card card-info">
                        <div class="card-header ">
                            <h4>Ubah Data Dusun</h4>
                            <div class="card-header-action">
                                <a href="#" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i></a>
                            </div>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="controller/control-administratif.php?status=set_ubah" class="needs-validation" novalidate="">
                                <div class="form-row">
                                    <div class="form-group col-4">
                                        <label class="col-form-label">ID Dusun</label>
                                        <input class="form-control" id="id1" disabled>
                                        <input type="hidden" class="form-control" name="id" id="id">
                                    </div>
                                    <div class="form-group col-8">
                                        <label class="col-form-label">Nama Dusun</label>
                                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Dusun" required>
                                        <div class="invalid-feedback">
                                            Mohon isi nama dusun
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label class="col-form-label">Ketua Dusun</label>
                                        <select class="form-control select2" name="id_ketua" id="id_ketua" required>
                                            <option value="">Pilih Ketua Dusun</option>
                                            <?php
                                            $row = $con->read_data_penduduk()->fetch_all(MYSQLI_BOTH);
                                            foreach ($row as $data) {
                                            ?>
                                                <option value="<?php echo ($data['nik']); ?>"><?php echo ($data['nik'] . ' / ' . $data['nama']); ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            Mohon pilih kepala Dusun
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label class="col-form-label">Luas Wilayah</label>
                                        <input type="number" class="form-control" name="luas" id="luas" placeholder="Luas Wilayah (Hektare)" required>
                                        <div class="invalid-feedback">
                                            Mohon isi luas wilayah
                                        </div>
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

<script>
    function onEdit(val) {
        $.ajax({
            url: "controller/control-administratif.php",
            method: "POST",
            data: "id_dusun=" + val,
            dataType: "json",
            success: function(data) {
                // alert(data.nama_dusun);
                $('#id').val(data.id_dusun);
                $('#id1').val(data.id_dusun);
                $('#nama').val(data.nama_dusun);
                $('#id_ketua').val(data.id_ketua_dusun).change;
                $('#luas').val(data.luas_wilayah);
                $('#modal-edit').modal('show');
            }
        });
    }
</script>