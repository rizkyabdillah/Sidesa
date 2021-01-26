<div class="modal fade" id="modal-detail" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="card card-info">
                        <div class="card-header ">
                            <h4>Detail Keluarga</h4>
                            <div class="card-header-action">
                                <a href="#" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-2">
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-tambah" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="card card-info">
                        <div class="card-header ">
                            <h4>Tambah Keluarga</h4>
                            <div class="card-header-action">
                                <a href="#" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Form Start -->
                            <form method="POST" action="controller/control-keluarga.php?status=set_tambah" class="needs-validation" novalidate="">


                                <!-- Data KK -->

                                <h5 class="section-title"> - Data Kartu Keluarga</h5>
                                <div class="form-row">
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Nomor KK</label>
                                        <input type="number" class="form-control" placeholder="Nomor KK" name="no_kk" required>
                                    </div>
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Pilih Dusun</label>
                                        <select class="form-control selectric" onchange="onChangeDusun(this.value);" id="id_dusun" name="id_dusun" required>
                                            <option value="">Pilih Dusun</option>
                                            <?php
                                            // require('../../db/Aksi-Keluarga.php');
                                            // $con = new Aksi();

                                            $query = $con->read_dusun();
                                            if ($query->num_rows > 0) {
                                                foreach ($query->fetch_all(MYSQLI_BOTH) as $data) {
                                            ?>
                                                    <option value="<?php echo ($data['id_dusun']); ?>"><?php echo ($data['nama_dusun']); ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-2">
                                        <label class="col-form-label">Pilih RW</label>
                                        <select class="form-control selectric" onchange="onChangeRW(this.value);" id="id_rw" name="id_rw" disabled required>
                                            <option value="">Pilih RW</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-2">
                                        <label class="col-form-label">Pilih RT</label>
                                        <select class="form-control selectric" id="id_rt" name="id_rt" disabled required>
                                            <option value="">Pilih RT</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Tanggal Cetak KK</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-calendar"></i>
                                                </div>
                                                <input type="text" name="tanggal_cetak" class="form-control datepicker" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-8">
                                        <label class="col-form-label">Kelas Sosial</label>
                                        <select class="form-control selectric" name="kelas_sosial" required>
                                            <option value="">Pilih Kelas Sosial</option>
                                            <option value="ATAS">ATAS</option>
                                            <option value="MENENGAH KEATAS">MENENGAH KEATAS</option>
                                            <option value="MENENGAH KEBAWAH">MENENGAH KEBAWAH</option>
                                            <option value="BAWAH">BAWAH</option>
                                        </select>
                                    </div>
                                </div>


                                <!-- Data Kepala KK -->

                                <h5 class="section-title"> - Data Kepala Keluarga</h5>
                                <div class="form-row">
                                    <div class="form-group col-4">
                                        <label class="col-form-label">NIK</label>
                                        <input type="number" class="form-control" placeholder="NIK" name="nik" required>
                                    </div>
                                    <div class="form-group col-8">
                                        <label class="col-form-label">Nama Penduduk</label>
                                        <input type="text" class="form-control" placeholder="Nama Penduduk" name="nama_penduduk" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-3">
                                        <label class="col-form-label">Status Wajib KTP</label>
                                        <select class="form-control selectric" name="status_wajib_ktp" required>
                                            <option value="">Pilih Status KTP</option>
                                            <option value="WAJIB">WAJIB</option>
                                            <option value="BELUM WAJIB">BELUM WAJIB</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-3">
                                        <label class="col-form-label">Agama</label>
                                        <select class="form-control selectric" name="agama" required>
                                            <option value="">Pilih Agama</option>
                                            <option value="ISLAM">ISLAM</option>
                                            <option value="KRISTEN">KRISTEN</option>
                                            <option value="KATHOLIK">KATHOLIK</option>
                                            <option value="HINDU">HINDU</option>
                                            <option value="BUDHA">BUDHA</option>
                                            <option value="LAIN LAIN">LAIN LAIN</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-3">
                                        <label class="col-form-label">Kewarganegaraan</label>
                                        <select class="form-control selectric" name="kewarganegaraan" required>
                                            <option value="">Pilih Kewarganegaraan</option>
                                            <option value="WNI">WNI</option>
                                            <option value="WNA">WNA</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-3">
                                        <label class="col-form-label">Status Penduduk</label>
                                        <select class="form-control selectric" name="status_penduduk" required>
                                            <option value="">Pilih Status</option>
                                            <option value="TETAP">TETAP</option>
                                            <option value="TIDAK TETAP">TIDAK TETAP</option>
                                            <option value="PENDATANG">PENDATANG</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Pendidikan Dalam KK</label>
                                        <select class="form-control selectric" name="pendidikan_kk" required>
                                            <option value="">Pilih Pendidikan (Dalam KK)</option>
                                            <option value="TIDAK / BELUM SEKOLAH">TIDAK / BELUM SEKOLAH</option>
                                            <option value="BELUM TAMAT SD / SEDERAJAT">BELUM TAMAT SD / SEDERAJAT</option>
                                            <option value="TAMAT SD / SEDERAJAT">TAMAT SD / SEDERAJAT</option>
                                            <option value="SLTP / SEDERAJAT">SLTP / SEDERAJAT</option>
                                            <option value="SLTA / SEDERAJAT">SLTA / SEDERAJAT</option>
                                            <option value="DIPLOMA I / II">DIPLOMA I / II</option>
                                            <option value="AKADEMI / DIPLOMA III / S.MUDA">AKADEMI / DIPLOMA III / S.MUDA</option>
                                            <option value="DIPLOMA IV / STRATA I">DIPLOMA IV / STRATA I</option>
                                            <option value="STRATA II">STRATA II</option>
                                            <option value="STRATA III">STRATA III</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Pendidikan Sekarang</label>
                                        <select class="form-control selectric" name="pendidikan_sekarang" required>
                                            <option value="">Pilih Pendidikan</option>
                                            <option value="BELUM MASUK TK / KELOMPOK BERMAIN">BELUM MASUK TK / KELOMPOK BERMAIN</option>
                                            <option value="SEDANG TK / KELOMPOK BERMAIN">SEDANG TK / KELOMPOK BERMAIN</option>
                                            <option value="TIDAK PERNAH SEKOLAH">TIDAK PERNAH SEKOLAH</option>
                                            <option value="SEDANG SD / SEDERAJAT">SEDANG SD / SEDERAJAT</option>
                                            <option value="TIDAK TAMAT SD/ SEDERAJAT">TIDAK TAMAT SD/ SEDERAJAT</option>
                                            <option value="SEDANG SLTP / SEDERAJAT">SEDANG SLTP / SEDERAJAT</option>
                                            <option value="SEDANG SLTA / SEDERAJAT">SEDANG SLTA / SEDERAJAT</option>
                                            <option value="SEDANG D-I / SEDERAJAT">SEDANG D-I / SEDERAJAT</option>
                                            <option value="SEDANG D-II / SEDERAJAT">SEDANG D-II / SEDERAJAT</option>
                                            <option value="SEDANG D-III / SEDERAJAT">SEDANG D-III / SEDERAJAT</option>
                                            <option value="SEDANG S-I / SEDERAJAT">SEDANG S-I / SEDERAJAT</option>
                                            <option value="SEDANG S-II / SEDERAJAT">SEDANG S-II / SEDERAJAT</option>
                                            <option value="SEDANG S-III / SEDERAJAT">SEDANG S-III / SEDERAJAT</option>
                                            <option value="SEDANG SLB A / SEDERAJAT">SEDANG SLB A / SEDERAJAT</option>
                                            <option value="SEDANG SLB B / SEDERAJAT">SEDANG SLB B / SEDERAJAT</option>
                                            <option value="SEDANG SLB C / SEDERAJAT">SEDANG SLB C / SEDERAJAT</option>
                                            <option value="TIDAK DAPAT MEMBACA / MENULIS">TIDAK DAPAT MEMBACA / MENULIS</option>
                                            <option value="TIDAK SEDANG SEKOLAH">TIDAK SEDANG SEKOLAH</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Pekerjaan</label>
                                        <select class="form-control selectric" name="pekerjaan" required>
                                            <option value="">Pilih Pekerjaan</option>
                                            <option value="BELUM / TIDAK BEKERJA">BELUM / TIDAK BEKERJA</option>
                                            <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                                            <option value="PELAJAR / MAHASISWA">PELAJAR / MAHASISWA</option>
                                            <option value="PENSIUNAN">PENSIUNAN</option>
                                            <option value="PEGAWAI NEGERI SIPIL (PNS)">PEGAWAI NEGERI SIPIL (PNS)</option>
                                            <option value="TENTARA NASIONAL INDONESIA (TNI)">TENTARA NASIONAL INDONESIA (TNI)</option>
                                            <option value="KEPOLISIAN RI (POLRI)">KEPOLISIAN RI (POLRI)</option>
                                            <option value="PERDAGANGAN">PERDAGANGAN</option>
                                            <option value="PETANI / PEKEBUN">PETANI / PEKEBUN</option>
                                            <option value="PETERNAK">PETERNAK</option>
                                            <option value="NELAYAN / PERIKANAN">NELAYAN / PERIKANAN</option>
                                            <option value="INDUSTRI">INDUSTRI</option>
                                            <option value="KONSTRUKSI">KONSTRUKSI</option>
                                            <option value="TRANSPORTASI">TRANSPORTASI</option>
                                            <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                                            <option value="KARYAWAN BUMN">KARYAWAN BUMN</option>
                                            <option value="KARYAWAN BUMD">KARYAWAN BUMD</option>
                                            <option value="KARYAWAN HONORER">KARYAWAN HONORER</option>
                                            <option value="BURUH HARIAN LEPAS">BURUH HARIAN LEPAS</option>
                                            <option value="BURUH PETANI / PERKEBUNAN">BURUH PETANI / PERKEBUNAN</option>
                                            <option value="BURUH NELAYAN / PERIKANAN">BURUH NELAYAN / PERIKANAN</option>
                                            <option value="BURUH PETERNAKAN">BURUH PETERNAKAN</option>
                                            <option value="PEMBANTU RUMAH TANGGA">PEMBANTU RUMAH TANGGA</option>
                                            <option value="TUKANG CUKUR">TUKANG CUKUR</option>
                                            <option value="TUKANG LISTRIK">TUKANG LISTRIK</option>
                                            <option value="TUKANG BATU">TUKANG BATU</option>
                                            <option value="TUKANG KAYU">TUKANG KAYU</option>
                                            <option value="TUKANG SOL SEPATU">TUKANG SOL SEPATU</option>
                                            <option value="TUKANG LAS / PANDAI BESI">TUKANG LAS / PANDAI BESI</option>
                                            <option value="TUKANG JAHIT">TUKANG JAHIT</option>
                                            <option value="TUKANG GIGI">TUKANG GIGI</option>
                                            <option value="PENATA RIAS">PENATA RIAS</option>
                                            <option value="PENATA BUSANA">PENATA BUSANA</option>
                                            <option value="PENATA RAMBUT">PENATA RAMBUT</option>
                                            <option value="MEKANIK">MEKANIK</option>
                                            <option value="SENIMAN">SENIMAN</option>
                                            <option value="TABIB">TABIB</option>
                                            <option value="PERAJI">PERAJI</option>
                                            <option value="PERANCANG BUSANA">PERANCANG BUSANA</option>
                                            <option value="PENERJEMAH">PENERJEMAH</option>
                                            <option value="IMAM MASJID">IMAM MASJID</option>
                                            <option value="PENDETA">PENDETA</option>
                                            <option value="PASTOR">PASTOR</option>
                                            <option value="WARTAWAN">WARTAWAN</option>
                                            <option value="USTADZ / MUBALIGH">USTADZ / MUBALIGH</option>
                                            <option value="JURU MASAK">JURU MASAK</option>
                                            <option value="PROMOTOR BICARA">PROMOTOR BICARA</option>
                                            <option value="ANGGOTA DPR - RI">ANGGOTA DPR - RI</option>
                                            <option value="ANGGOTA DPD">ANGGOTA DPD</option>
                                            <option value="ANGGOTA BPK">ANGGOTA BPK</option>
                                            <option value="PRESIDEN">PRESIDEN</option>
                                            <option value="WAKIL PRESIDEN">WAKIL PRESIDEN</option>
                                            <option value="ANGGOTA MAHKAMAH KONSTITUSI">ANGGOTA MAHKAMAH KONSTITUSI</option>
                                            <option value="ANGGOTA KABINET KEMENTRIAN<">ANGGOTA KABINET KEMENTRIAN</option>
                                            <option value="DUTA BESAR">DUTA BESAR</option>
                                            <option value="GUBERNUR">GUBERNUR</option>
                                            <option value="WAKIL GUBERNUR">WAKIL GUBERNUR</option>
                                            <option value="BUPATI">BUPATI</option>
                                            <option value="WAKIL BUPATI">WAKIL BUPATI</option>
                                            <option value="WALIKOTA">WALIKOTA</option>
                                            <option value="WAKIL WALIKOTA">WAKIL WALIKOTA</option>
                                            <option value="ANGGOTA DPRD PROVINSI">ANGGOTA DPRD PROVINSI</option>
                                            <option value="ANGGOTA DPRD KAB / KOTA">ANGGOTA DPRD KAB / KOTA</option>
                                            <option value="DOSEN">DOSEN</option>
                                            <option value="GURU">GURU</option>
                                            <option value="PILOT">PILOT</option>
                                            <option value="PENGACARA">PENGACARA</option>
                                            <option value="NOTARIS">NOTARIS</option>
                                            <option value="ARSITEK">ARSITEK</option>
                                            <option value="AKUNTAN">AKUNTAN</option>
                                            <option value="KONSULTAN">KONSULTAN</option>
                                            <option value="DOKTER">DOKTER</option>
                                            <option value="BIDAN">BIDAN</option>
                                            <option value="PERAWAT">PERAWAT</option>
                                            <option value="APOTEKER">APOTEKER</option>
                                            <option value="PSIKOLOG">PSIKOLOG</option>
                                            <option value="PENYIAR TELEVISI">PENYIAR TELEVISI</option>
                                            <option value="PENYIAR RADIO">PENYIAR RADIO</option>
                                            <option value="PELAUT">PELAUT</option>
                                            <option value="PENELITI">PENELITI</option>
                                            <option value="SOPIR">SOPIR</option>
                                            <option value="PIALANG">PIALANG</option>
                                            <option value="PARANORMAL">PARANORMAL</option>
                                            <option value="PEDAGANG">PEDAGANG</option>
                                            <option value="PERANGKAT DESA">PERANGKAT DESA</option>
                                            <option value="KEPALA DESA">KEPALA DESA</option>
                                            <option value="BIARAWATI">BIARAWATI</option>
                                            <option value="WIRASWASTA">WIRASWASTA</option>
                                            <option value="LAINNYA">LAINNYA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Alamat Sebelumnya</label>
                                        <input type="text" class="form-control" placeholder="Alamat Sebelumnya" name="alamat_sebelumnya">
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Alamat Sekarang</label>
                                        <input type="text" class="form-control" placeholder="Alamat Sekarang" name="alamat_sekarang" required>
                                    </div>
                                </div>


                                <!-- Data Akta Kelahiran -->

                                <h5 class="section-title"> - Data Akta Kelahiran</h5>
                                <div class="form-row">
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Nomor Akta</label>
                                        <input type="number" class="form-control" placeholder="Nomor Akta" name="no_akta_kelahiran" required>
                                    </div>
                                    <div class="form-group col-8">
                                        <label class="col-form-label">Tempat Lahir</label>
                                        <input type="text" class="form-control" placeholder="Kota Kelahiran" name="tempat_lahir" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Tanggal Lahir</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-calendar"></i>
                                                </div>
                                                <input type="text" name="tanggal_lahir" class="form-control datepicker" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Jenis Kelamin</label>
                                        <select class="form-control selectric" name="jenis_kelamin" required>
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="LAKI - LAKI">LAKI - LAKI</option>
                                            <option value="PEREMPUAN">PEREMPUAN</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Waktu Kelahiran</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-clock"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="waktu_kelahiran" class="form-control timepicker" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Tempat Dilahirkan</label>
                                        <select class="form-control selectric" name="tempat_dilahirkan" required>
                                            <option value="">Pilih Tempat Dilahirkan</option>
                                            <option value="RS/RB">RS / RB</option>
                                            <option value="PUSKESMAS">PUSKESMAS</option>
                                            <option value="POLINDES">POLINDES</option>
                                            <option value="RUMAH">RUMAH</option>
                                            <option value="LAINNYA">LAINNYA</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Jenis Kelahiran</label>
                                        <select class="form-control selectric" name="jenis_kelahiran" required>
                                            <option value="">Pilih Jenis Kelahiran</option>
                                            <option value="TUNGGAL">TUNGGAL</option>
                                            <option value="KEMBAR2">KEMBAR 2</option>
                                            <option value="KEMBAR3">KEMBAR 3</option>
                                            <option value="KEMBAR4<">KEMBAR 4</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Anak Ke</label>
                                        <select class="form-control selectric" name="anak_ke" required>
                                            <option value="">Pilih Anak Ke</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Penolong Kelahiran</label>
                                        <select class="form-control selectric" name="penolong_kelahiran" required>
                                            <option value="">Pilih Penolong Kelahiran</option>
                                            <option value="PERAWAT">PERAWAT</option>
                                            <option value="DOKTER">DOKTER</option>
                                            <option value="BIDAN PERAWAT">BIDAN PERAWAT</option>
                                            <option value="DUKUN">DUKUN</option>
                                            <option value="LAINNYA">LAINNYA</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Berat Lahir</label>
                                        <div class="input-group mb-2">
                                            <input type="number" class="form-control text-right" name="berat_lahir" id="inlineFormInputGroup2" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">gram</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Panjang Lahir</label>
                                        <div class="input-group mb-2">
                                            <input type="number" class="form-control text-right" name="panjang_lahir" id="inlineFormInputGroup2" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">cm</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Data Perkawinan -->


                                <h5 class="section-title"> - Data Perkawinan</h5>
                                <div class="form-row">
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Status Perkawinan</label>
                                        <select class="form-control selectric" onchange="onChangePerkawinan(this.value);" name="status_perkawinan" required>
                                            <option value="">Pilih Status Perkawinan</option>
                                            <option value="BELUM KAWIN">BELUM KAWIN</option>
                                            <option value="KAWIN">KAWIN</option>
                                            <option value="CERAI HIDUP">CERAI HIDUP</option>
                                            <option value="CERAI MATI">CERAI MATI</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Nomor Akta Nikah</label>
                                        <input type="number" class="form-control" id="no_akta_nikah" name="no_akta_nikah" placeholder="Nomor Akta Nikah" required disabled>
                                    </div>
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Tanggal Perkawinan</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-calendar"></i>
                                                </div>
                                                <input type="text" id="tanggal_perkawinan" name="tanggal_perkawinan" class="form-control datepicker" required disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-8">
                                        <label class="col-form-label">Nomor Akta Perceraian</label>
                                        <input type="number" class="form-control" id="no_akta_perceraian" name="no_akta_perceraian" placeholder="Nomor Akta Perceraian" required disabled>
                                    </div>
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Tanggal Perceraian</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-calendar"></i>
                                                </div>
                                                <input type="text" id="tanggal_perceraian" name="tanggal_perceraian" class="form-control datepicker" required disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Tombol Simpan -->
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
                            <h4>Ubah Data KK</h4>
                            <div class="card-header-action">
                                <a href="#" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i></a>
                            </div>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="controller/control-keluarga.php?status=set_ubah" class="needs-validation" novalidate="">
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label class="col-form-label">Nomor KK</label>
                                        <input type="hidden" id="no_kk1" name="no_kk">
                                        <input type="number" class="form-control" placeholder="Nomor KK" id="no_kk2" disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Pilih Dusun</label>
                                        <select class="form-control selectric" onchange="onChangeDusun1(this.value);" id="id_dusun1" name="id_dusun" required>
                                            <option value="">Pilih Dusun</option>
                                            <?php
                                            $query = $con->read_dusun();
                                            if ($query->num_rows > 0) {
                                                foreach ($query->fetch_all(MYSQLI_BOTH) as $data) {
                                            ?>
                                                    <option value="<?php echo ($data['id_dusun']); ?>"><?php echo ($data['nama_dusun']); ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-3">
                                        <label class="col-form-label">Pilih RW</label>
                                        <select class="form-control selectric" onchange="onChangeRW1(this.value);" id="id_rw1" name="id_rw" disabled required>
                                            <option value="">Pilih RW</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-3">
                                        <label class="col-form-label">Pilih RT</label>
                                        <select class="form-control selectric" id="id_rt1" name="id_rt" disabled required>
                                            <option value="">Pilih RT</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Tanggal Lahir</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-calendar"></i>
                                                </div>
                                                <input type="text" name="tanggal_cetak" id="tanggal_cetak1" class="form-control datepicker" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Kelas Sosial</label>
                                        <select class="form-control selectric" id="kelas_sosial" name="kelas_sosial" required>
                                            <option value="">Pilih Kelas Sosial</option>
                                            <option value="ATAS">ATAS</option>
                                            <option value="MENENGAH KEATAS">MENENGAH KEATAS</option>
                                            <option value="MENENGAH KEBAWAH">MENENGAH KEBAWAH</option>
                                            <option value="BAWAH">BAWAH</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label class="col-form-label">Pilih Kepala Keluarga</label>
                                        <input type="hidden" id="temp_nik" name="temp_nik">
                                        <select class="form-control select2" name="nik" id="no_kepala" required>
                                            <option value="">Pilih Kepala Keluarga</option>
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
    var no = null;

    function onChangeDusun(val) {
        if (val != "") {
            $('#id_rw').prop("disabled", false);
            $.ajax({
                url: "../db/Get-Subcat.php",
                method: "POST",
                data: "id_dusun=" + val,
                success: function(response) {
                    // alert(response);
                    $('#id_rw').html(response);
                }
            });
        } else {
            $('#id_rw').prop("disabled", true);
            $('#id_rw').val("").change;
        }
        $('#id_rt').prop("disabled", true);
        $('#id_rt').val("").change;
    }

    function onChangeRW(val) {
        if (val != "") {
            $('#id_rt').prop("disabled", false);
            $.ajax({
                url: "../db/Get-Subcat.php",
                method: "POST",
                data: "id_rw=" + val,
                success: function(response) {
                    // alert(response);
                    $('#id_rt').html(response);
                }
            });
        } else {
            $('#id_rt').prop("disabled", true);
            $('#id_rt').val("").change;
        }
    }

    function onChangeDusun1(val, val1) {
        if (val != "") {
            $('#id_rw1').prop("disabled", false);
            $.ajax({
                url: "../db/Get-Subcat.php",
                method: "POST",
                data: "id_dusun=" + val,
                success: function(response) {
                    $('#id_rw1').html(response);
                    $('#id_rw1').val(val1).change;
                }
            });
        } else {
            $('#id_rw1').prop("disabled", true);
            $('#id_rw1').val("").change;
        }
        $('#id_rt1').prop("disabled", true);
        $('#id_rt1').val("").change;
    }

    function onChangeRW1(val, val1) {
        if (val != "") {
            $('#id_rt1').prop("disabled", false);
            $.ajax({
                url: "../db/Get-Subcat.php",
                method: "POST",
                data: "id_rw=" + val,
                success: function(response) {
                    $('#id_rt1').html(response);
                    $('#id_rt1').val(val1).change;
                }
            });
        } else {
            $('#id_rt1').prop("disabled", true);
            $('#id_rt1').val("").change;
        }
    }

    function onChangeKK(val, val1) {
        $.ajax({
            url: "../db/Get-Subcat.php",
            method: "POST",
            data: "no_kk=" + val,
            success: function(response) {
                $('#no_kepala').html(response);
                $('#no_kepala').val(val1).change;
            }
        });
    }

    function onChangePerkawinan(val) {
        kosongkan();
        switch (val) {
            case 'KAWIN':
                $('#no_akta_nikah').prop("disabled", false);
                $('#tanggal_perkawinan').prop("disabled", false);
                $('#no_akta_perceraian').prop("disabled", true);
                $('#tanggal_perceraian').prop("disabled", true);
                $('#tanggal_perceraian').val(null);
                break;
            case 'CERAI HIDUP':
                $('#no_akta_nikah').prop("disabled", true);
                $('#tanggal_perkawinan').prop("disabled", true);
                $('#tanggal_perkawinan').val(null);
                $('#no_akta_perceraian').prop("disabled", false);
                $('#tanggal_perceraian').prop("disabled", false);
                break;
            case 'CERAI MATI':
            case 'BELUM KAWIN':
            default:
                $('#no_akta_nikah').prop("disabled", true);
                $('#tanggal_perkawinan').prop("disabled", true);
                $('#tanggal_perkawinan').val(null);
                $('#no_akta_perceraian').prop("disabled", true);
                $('#tanggal_perceraian').prop("disabled", true);
                $('#tanggal_perceraian').val(null);
                break;
        }
    }

    function kosongkan() {
        $('#no_akta_nikah').val(null);
        $('#no_akta_perceraian').val(null);
        $('#tanggal_perceraian').val(null);
        $('#tanggal_perkawinan').val(null);
    }

    function onDetail(val) {
        $.ajax({
            url: "../db/Get-Subcat.php",
            method: "POST",
            data: "no_kk1=" + val,
            success: function(response) {
                $('#table-2').html(response);
                $('#modal-detail').modal('show');
            }
        });
    }

    function onEdit(val) {
        $.ajax({
            url: "controller/control-keluarga.php",
            method: "POST",
            data: "no_kk1=" + val,
            dataType: "json",
            success: function(data) {
                onChangeDusun1(data.id_dusun, data.id_rw);
                onChangeRW1(data.id_rw, data.id_rt);
                onChangeKK(data.no_kk, data.nik)
                $('#no_kk1').val(data.no_kk);
                $('#no_kk2').val(data.no_kk);
                $('#temp_nik').val(data.nik);
                $('#tanggal_cetak1').val(data.tanggal_cetak_kk);
                $('#id_dusun1').val(data.id_dusun).change;
                $('#kelas_sosial').val(data.kelas_sosial).change;
                $('#modal-edit').modal('show');
            }
        });
    }
</script>