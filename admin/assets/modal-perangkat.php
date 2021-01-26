<?php

?>

<div class="modal fade" id="modal-perangkat" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="card card-info">
                        <div class="card-header ">
                            <h4>Tambah Perangkat Baru</h4>
                            <div class="card-header-action">
                                <a href="#" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i></a>
                            </div>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="controller/control-perangkat.php?status=set_tambah" class="needs-validation" novalidate="">
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label class="col-form-label">Pilih Perangkat</label>
                                        <select class="form-control select2" name="id" required>
                                            <option value="">Pilih Perangkat Desa</option>
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
                                            Mohon pilih perangkat desa
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-6">
                                        <label class="col-form-label">NIAP</label>
                                        <input type="number" class="form-control" name="niap" placeholder="NIAP" required>
                                        <div class="invalid-feedback">
                                            Mohon isi nomor NIAP
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">NIP</label>
                                        <input type="number" class="form-control" name="nip" placeholder="NIP" required>
                                        <div class="invalid-feedback">
                                            Mohon isi nomor NIAP
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-7">
                                        <label class="col-form-label">Nomor SK Angkat</label>
                                        <input type="number" class="form-control" name="no_sk_angkat" placeholder="No. SK" required>
                                        <div class="invalid-feedback">
                                            Mohon isi Nomor SK Angkat
                                        </div>
                                    </div>
                                    <div class="form-group col-5">
                                        <label class="col-form-label">Tanggal SK Angkat</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-calendar"></i>
                                                </div>
                                                <input type="text" name="date_angkat" class="form-control datepicker" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-7">
                                        <label class="col-form-label">Nomor SK Berhenti</label>
                                        <input type="number" class="form-control" name="no_sk_berhenti" placeholder="No. SK" required>
                                        <div class="invalid-feedback">
                                            Mohon isi Nomor SK Berhenti
                                        </div>
                                    </div>
                                    <div class="form-group col-5">
                                        <label class="col-form-label">Tanggal SK Berhenti</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-calendar"></i>
                                                </div>
                                                <input type="text" name="date_berhenti" class="form-control datepicker" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-8">
                                        <label class="col-form-label">Masa Jabatan</label>
                                        <input type="number" class="form-control" name="masa" placeholder="Masa Jabatan (Tahun)" required>
                                        <div class="invalid-feedback">
                                            Mohon isi masa jabatan
                                        </div>
                                    </div>
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Pangkat</label>
                                        <select class="form-control selectric" name="pangkat" required>
                                            <option value="2A"> 2A </option>
                                            <option value="2B"> 2B </option>
                                            <option value="2C"> 2C </option>
                                            <option value="2D"> 2D </option>
                                            <option value="3A"> 3A </option>
                                            <option value="3B"> 3B </option>
                                            <option value="3C"> 3C </option>
                                            <option value="3D"> 3D </option>
                                            <option value="4A"> 4A </option>
                                            <option value="4B"> 4B </option>
                                            <option value="4C"> 4C </option>
                                            <option value="4D"> 4D </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-8">
                                        <label class="col-form-label">Jabatan</label>
                                        <select class="form-control selectric" name="jabatan" required>
                                            <option value="KEPALA DESA"> KEPALA DESA </option>
                                            <option value="SEKRETARIS DESA"> SEKRETARIS DESA </option>
                                            <option value="SEKSI PEMERINTAHAN"> SEKSI PEMERINTAHAN </option>
                                            <option value="SEKSI KESEJAHTERAAN"> SEKSI KESEJAHTERAAN </option>
                                            <option value="SEKSI PELAYANAN"> SEKSI PELAYANAN </option>
                                            <option value="URUSAN KEUANGAN"> URUSAN KEUANGAN </option>
                                            <option value="URUSAN PERENCANAAN"> URUSAN PERENCANAAN </option>
                                            <option value="URUSAN TU DAN UMUM"> URUSAN TU DAN UMUM </option>
                                            <option value="STAF BENDAHARA"> STAF BENDAHARA </option>
                                            <option value="STAF KEBERSIHAN"> STAF KEBERSIHAN </option>
                                        </select>
                                    </div>
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Status Pegawai</label>
                                        <select class="form-control selectric" name="status" required>
                                            <option value="AKTIF"> AKTIF </option>
                                            <option value="TIDAK AKTIF"> TIDAK AKTIF </option>
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

<div class="modal fade" id="modal-edit" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="card card-info">
                        <div class="card-header ">
                            <h4>Ubah Perangkat</h4>
                            <div class="card-header-action">
                                <a href="#" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i></a>
                            </div>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="controller/control-perangkat.php?status=set_ubah" class="needs-validation" novalidate="">
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label class="col-form-label">NIK Perangkat</label>
                                        <input type="number" class="form-control" id="nik1" disabled>
                                        <input type="hidden" class="form-control"  id="nik" name="id">
                                        <div class="invalid-feedback">
                                            Mohon pilih perangkat desa
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-6">
                                        <label class="col-form-label">NIAP</label>
                                        <input type="number" class="form-control" id="niap" name="niap" placeholder="NIAP" required>
                                        <div class="invalid-feedback">
                                            Mohon isi nomor NIAP
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">NIP</label>
                                        <input type="number" class="form-control" id="nip" name="nip" placeholder="NIP" required>
                                        <div class="invalid-feedback">
                                            Mohon isi nomor NIAP
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-7">
                                        <label class="col-form-label">Nomor SK Angkat</label>
                                        <input type="number" class="form-control" name="no_sk_angkat" id="no_sk_angkat" placeholder="No. SK" required>
                                        <div class="invalid-feedback">
                                            Mohon isi Nomor SK Angkat
                                        </div>
                                    </div>
                                    <div class="form-group col-5">
                                        <label class="col-form-label">Tanggal SK Angkat</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-calendar"></i>
                                                </div>
                                                <input type="text" name="date_angkat" id="date_angkat" class="form-control datepicker" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-7">
                                        <label class="col-form-label">Nomor SK Berhenti</label>
                                        <input type="number" class="form-control" id="no_sk_berhenti" name="no_sk_berhenti"  placeholder="No. SK" required>
                                        <div class="invalid-feedback">
                                            Mohon isi Nomor SK Berhenti
                                        </div>
                                    </div>
                                    <div class="form-group col-5">
                                        <label class="col-form-label">Tanggal SK Berhenti</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-calendar"></i>
                                                </div>
                                                <input type="text" id="date_berhenti" name="date_berhenti" class="form-control datepicker" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-8">
                                        <label class="col-form-label">Masa Jabatan</label>
                                        <input type="number" class="form-control" id="masa" name="masa" placeholder="Masa Jabatan (Tahun)" required>
                                        <div class="invalid-feedback">
                                            Mohon isi masa jabatan
                                        </div>
                                    </div>
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Pangkat</label>
                                        <select class="form-control selectric" name="pangkat" id="pangkat" required>
                                            <option value="2A"> 2A </option>
                                            <option value="2B"> 2B </option>
                                            <option value="2C"> 2C </option>
                                            <option value="2D"> 2D </option>
                                            <option value="3A"> 3A </option>
                                            <option value="3B"> 3B </option>
                                            <option value="3C"> 3C </option>
                                            <option value="3D"> 3D </option>
                                            <option value="4A"> 4A </option>
                                            <option value="4B"> 4B </option>
                                            <option value="4C"> 4C </option>
                                            <option value="4D"> 4D </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-8">
                                        <label class="col-form-label">Jabatan</label>
                                        <select class="form-control selectric" name="jabatan" id="jabatan" required>
                                            <option value="KEPALA DESA"> KEPALA DESA </option>
                                            <option value="SEKRETARIS DESA"> SEKRETARIS DESA </option>
                                            <option value="SEKSI PEMERINTAHAN"> SEKSI PEMERINTAHAN </option>
                                            <option value="SEKSI KESEJAHTERAAN"> SEKSI KESEJAHTERAAN </option>
                                            <option value="SEKSI PELAYANAN"> SEKSI PELAYANAN </option>
                                            <option value="URUSAN KEUANGAN"> URUSAN KEUANGAN </option>
                                            <option value="URUSAN PERENCANAAN"> URUSAN PERENCANAAN </option>
                                            <option value="URUSAN TU DAN UMUM"> URUSAN TU DAN UMUM </option>
                                            <option value="STAF BENDAHARA"> STAF BENDAHARA </option>
                                            <option value="STAF KEBERSIHAN"> STAF KEBERSIHAN </option>
                                        </select>
                                    </div>
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Status Pegawai</label>
                                        <select class="form-control selectric" id="status" name="status" required>
                                            <option value="AKTIF"> AKTIF </option>
                                            <option value="TIDAK AKTIF"> TIDAK AKTIF </option>
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
            url: "controller/control-perangkat.php",
            method: "POST",
            data: "id_perangkat=" + val,
            dataType: "json",
            success: function(data) {
                // alert(data.id_perangkat);
                $('#nik').val(data.id_perangkat);
                $('#nik1').val(data.id_perangkat);
                $('#niap').val(data.niap);
                $('#nip').val(data.nip);
                $('#no_sk_angkat').val(data.no_sk_angkat);
                $('#date_angkat').val(data.tanggal_sk_angkat);
                $('#no_sk_berhenti').val(data.no_sk_berhenti);
                $('#date_berhenti').val(data.tanggal_sk_berhenti);
                $('#masa').val(data.masa_jabatan);
                $('#pangkat').val(data.pangkat);
                $('#jabatan').val(data.jabatan);
                $('#status').val(data.status_pegawai);

                $('#modal-edit').modal('show');
            }
        });
    }
</script>