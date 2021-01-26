<?php
require('assets/library.php');
$lib = new library();
$id_random = $lib->getRandomID();
?>

<div class="modal fade" id="modal-rt" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="card card-info">
                        <div class="card-header ">
                            <h4>Tambah RT Baru</h4>
                            <div class="card-header-action">
                                <a href="#" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i></a>
                            </div>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="controller/control-rt-rw.php?status=set_tambah_rt&id_now=<?php echo($id_rw); ?>&id_back=<?php echo($id_back); ?>" class="needs-validation" novalidate="">
                                <div class="form-row">
                                    <div class="form-group col-4">
                                        <label class="col-form-label">ID RT</label>
                                        <input value="<? echo('T' . $id_random); ?>" class="form-control" disabled>
                                        <input value="<? echo('T' . $id_random); ?>" type="hidden" class="form-control" name="id">
                                    </div>
                                    <div class="form-group col-8">
                                        <label class="col-form-label">Nomor RT</label>
                                        <input type="number" class="form-control" name="no" placeholder="Nomor RT" required>
                                        <div class="invalid-feedback">
                                            Mohon isi nomor RT
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label class="col-form-label">Ketua RT</label>
                                        <select class="form-control select2" name="id_ketua" required>
                                            <option value="">Pilih Ketua RT</option>
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
                                            Mohon pilih ketua RT
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
                            <h4>Ubah Data RT</h4>
                            <div class="card-header-action">
                                <a href="#" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i></a>
                            </div>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="controller/control-rt-rw.php?status=set_ubah_rt&id_now=<?php echo($id_rw); ?>&id_back=<?php echo($id_back); ?>" class="needs-validation" novalidate="">
                                <div class="form-row">
                                    <div class="form-group col-4">
                                        <label class="col-form-label">ID RT</label>
                                        <input class="form-control" id="id1" disabled>
                                        <input type="hidden" class="form-control" name="id" id="id">
                                    </div>
                                    <div class="form-group col-8">
                                        <label class="col-form-label">Nomor RT</label>
                                        <input type="number" class="form-control" id="no" name="no" placeholder="Nomor RT" required>
                                        <div class="invalid-feedback">
                                            Mohon isi nomor RT
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label class="col-form-label">Ketua RT</label>
                                        <select class="form-control select2" name="id_ketua" id="id_ketua" required>
                                            <option value="">Pilih Ketua RT</option>
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
                                            Mohon pilih ketua RT
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
            url: "controller/control-rt-rw.php",
            method: "POST",
            data: "id_rt=" + val,
            dataType: "json",
            success: function(data) {
                // alert(data.detail_kategori);
                $('#id').val(data.id_rt);
                $('#id1').val(data.id_rt);
                $('#no').val(data.nomor_rt);
                $('#id_ketua').val(data.id_ketua_rt).change;
                $('#modal-edit').modal('show');
            }
        });
    }
</script>