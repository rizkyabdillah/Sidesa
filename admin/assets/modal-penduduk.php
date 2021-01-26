<div class="modal fade" id="modal-tambah" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="card card-info">
                        <div class="card-header ">
                            <h4>Tambah Penduduk</h4>
                            <div class="card-header-action">
                                <a href="#" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Form Start -->
                            <form method="POST" action="controller/control-penduduk.php?status=set_tambah" class="needs-validation" novalidate="">


                                <!-- Pilih KK -->

                                <h5 class="section-title"> - Data KK</h5>
                                <div class="form-row">
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Pilih Data KK</label>
                                        <select class="form-control select2" name="no_kk" required>
                                            <option value="">Pilih Data KK</option>
                                            <?php
                                            $query = $con->read_kk()->fetch_all(MYSQLI_BOTH);
                                            foreach ($query as $data) {
                                            ?>
                                                <option value="<?php echo ($data[0]); ?>"><?php echo ($data[0] . " / " . $data[1]); ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Hubungan Dalam Keluarga</label>
                                        <select class="form-control selectric" name="hubungan_keluarga" required>
                                            <option value="">Pilih Hubungan Dalam Keluarga</option>
                                            <option value="SUAMI">SUAMI</option>
                                            <option value="ISTRI">ISTRI</option>
                                            <option value="ANAK">ANAK</option>
                                            <option value="MENANTU">MENANTU</option>
                                            <option value="CUCU">CUCU</option>
                                            <option value="ORANG TUA">ORANG TUA</option>
                                            <option value="MERTUA">MERTUA</option>
                                            <option value="PEMBANTU">PEMBANTU</option>
                                            <option value="LAIN LAIN">LAIN LAIN</option>
                                        </select>
                                    </div>
                                </div>


                                <!-- Data Kepala KK -->

                                <h5 class="section-title"> - Data Penduduk</h5>
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

<div class="modal fade" id="modal-detail" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="card card-info">
                        <div class="card-header ">
                            <h4>Detail Penduduk</h4>
                            <div class="card-header-action">
                                <a href="#" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>NIK</td>
                                            <td id="nik"></td>
                                        </tr>
                                        <tr>
                                            <td>NAMA</td>
                                            <td id="nama"></td>
                                        </tr>
                                        <tr>
                                            <td>STATUS WAJIB KTP</td>
                                            <td id="status_wajib_ktp"></td>
                                        </tr>
                                        <tr>
                                            <td>AGAMA</td>
                                            <td id="agama"></td>
                                        </tr>
                                        <tr>
                                            <td>JENIS KELAMIN</td>
                                            <td id="jenis_kelamin"></td>
                                        </tr>
                                        <tr>
                                            <td>PENDIDIKAN DALAM KK</td>
                                            <td id="pendidikan_kk"></td>
                                        </tr>
                                        <tr>
                                            <td>PENDIDIKAN SEKARANG</td>
                                            <td id="pendidikan_sekarang"></td>
                                        </tr>
                                        <tr>
                                            <td>PEKERJAAN</td>
                                            <td id="pekerjaan"></td>
                                        </tr>
                                        <tr>
                                            <td>STATUS WARGA NEGARA</td>
                                            <td id="status_negara"></td>
                                        </tr>
                                        <tr>
                                            <td>STATUS PENDUDUK</td>
                                            <td id="status_penduduk"></td>
                                        </tr>
                                        <tr>
                                            <td>ALAMAT SEKARANG</td>
                                            <td id="alamat_sekarang"></td>
                                        </tr>
                                        <tr>
                                            <td>TEMPAT LAHIR</td>
                                            <td id="tempat_lahir"></td>
                                        </tr>
                                        <tr>
                                            <td>TANGGAL LAHIR</td>
                                            <td id="tanggal_lahir"></td>
                                        </tr>
                                        <tr>
                                            <td>ANAK KE</td>
                                            <td id="anak_ke"></td>
                                        </tr>
                                        <tr>
                                            <td>STATUS PERKAWINAN</td>
                                            <td id="status_perkawinan"></td>
                                        </tr>
                                        <tr>
                                            <td>HUBUNGAN DALAM KK</td>
                                            <td id="hubungan_dalam_kk"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-ubah" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="card card-info">
                        <div class="card-header ">
                            <h4>Ubah Penduduk</h4>
                            <div class="card-header-action">
                                <a href="#" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Form Start -->
                            <form method="POST" action="controller/control-penduduk.php?status=set_ubah" class="needs-validation" novalidate="">


                                <!-- Pilih KK -->

                                <h5 class="section-title"> - Data KK</h5>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <input type="hidden" id="no_kk1" name="no_kk">
                                        <label class="col-form-label">Hubungan Dalam Keluarga</label>
                                        <select class="form-control selectric" id="hubungan_keluarga1" name="hubungan_keluarga" required>
                                            <option value="">Pilih Hubungan Dalam Keluarga</option>
                                            <option value="SUAMI">SUAMI</option>
                                            <option value="ISTRI">ISTRI</option>
                                            <option value="ANAK">ANAK</option>
                                            <option value="MENANTU">MENANTU</option>
                                            <option value="CUCU">CUCU</option>
                                            <option value="ORANG TUA">ORANG TUA</option>
                                            <option value="MERTUA">MERTUA</option>
                                            <option value="PEMBANTU">PEMBANTU</option>
                                            <option value="LAIN LAIN">LAIN LAIN</option>
                                        </select>
                                    </div>
                                </div>


                                <!-- Data Kepala KK -->

                                <h5 class="section-title"> - Data Penduduk</h5>
                                <div class="form-row">
                                    <div class="form-group col-4">
                                        <label class="col-form-label">NIK</label>
                                        <input type="hidden" id="nik1" name="nik">
                                        <input type="number" class="form-control" id="nik2" disabled>
                                    </div>
                                    <div class="form-group col-8">
                                        <label class="col-form-label">Nama Penduduk</label>
                                        <input type="text" class="form-control" placeholder="Nama Penduduk" id="nama_penduduk1" name="nama_penduduk" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-3">
                                        <label class="col-form-label">Status Wajib KTP</label>
                                        <select class="form-control selectric" id="status_wajib_ktp1" name="status_wajib_ktp" required>
                                            <option value="">Pilih Status KTP</option>
                                            <option value="WAJIB">WAJIB</option>
                                            <option value="BELUM WAJIB">BELUM WAJIB</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-3">
                                        <label class="col-form-label">Agama</label>
                                        <select class="form-control selectric" id="agama1" name="agama" required>
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
                                        <select class="form-control selectric" id="kewarganegaraan1" name="kewarganegaraan" required>
                                            <option value="">Pilih Kewarganegaraan</option>
                                            <option value="WNI">WNI</option>
                                            <option value="WNA">WNA</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-3">
                                        <label class="col-form-label">Status Penduduk</label>
                                        <select class="form-control selectric" id="status_penduduk1" name="status_penduduk" required>
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
                                        <select class="form-control selectric" id="pendidikan_kk1" name="pendidikan_kk" required>
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
                                        <select class="form-control selectric" id="pendidikan_sekarang1" name="pendidikan_sekarang" required>
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
                                        <select class="form-control selectric" id="pekerjaan1" name="pekerjaan" required>
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
                                        <input type="text" class="form-control" placeholder="Alamat Sebelumnya" id="alamat_sebelumnya1" name="alamat_sebelumnya">
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Alamat Sekarang</label>
                                        <input type="text" class="form-control" placeholder="Alamat Sekarang" id="alamat_sekarang1" name="alamat_sekarang" required>
                                    </div>
                                </div>


                                <!-- Data Akta Kelahiran -->

                                <h5 class="section-title"> - Data Akta Kelahiran</h5>
                                <div class="form-row">
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Nomor Akta</label>
                                        <input type="hidden" id="no_akta_kelahiran1" name="no_akta_kelahiran">
                                        <input type="number" class="form-control" id="no_akta_kelahiran2" disabled>
                                    </div>
                                    <div class="form-group col-8">
                                        <label class="col-form-label">Tempat Lahir</label>
                                        <input type="text" class="form-control" placeholder="Kota Kelahiran" id="tempat_lahir1" name="tempat_lahir" required>
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
                                                <input type="text" id="tanggal_lahir1" name="tanggal_lahir" class="form-control datepicker" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Jenis Kelamin</label>
                                        <select class="form-control selectric" id="jenis_kelamin1" name="jenis_kelamin" required>
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
                                            <input type="text" id="waktu_kelahiran1" name="waktu_kelahiran" class="form-control timepicker" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Tempat Dilahirkan</label>
                                        <select class="form-control selectric" id="tempat_dilahirkan1" name="tempat_dilahirkan" required>
                                            <option value="">Pilih Tempat Dilahirkan</option>
                                            <option value="RS / RB">RS / RB</option>
                                            <option value="PUSKESMAS">PUSKESMAS</option>
                                            <option value="POLINDES">POLINDES</option>
                                            <option value="RUMAH">RUMAH</option>
                                            <option value="LAINNYA">LAINNYA</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Jenis Kelahiran</label>
                                        <select class="form-control selectric" id="jenis_kelahiran1" name="jenis_kelahiran" required>
                                            <option value="">Pilih Jenis Kelahiran</option>
                                            <option value="TUNGGAL">TUNGGAL</option>
                                            <option value="KEMBAR2">KEMBAR 2</option>
                                            <option value="KEMBAR3">KEMBAR 3</option>
                                            <option value="KEMBAR4<">KEMBAR 4</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Anak Ke</label>
                                        <select class="form-control selectric" id="anak_ke1" name="anak_ke" required>
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
                                        <select class="form-control selectric" id="penolong_kelahiran1" name="penolong_kelahiran" required>
                                            <option value="">Pilih Penolong Kelahiran</option>
                                            <option value="DOKTER">DOKTER</option>
                                            <option value="PERAWAT">PERAWAT</option>
                                            <option value="BIDAN PERAWAT">BIDAN PERAWAT</option>
                                            <option value="DUKUN">DUKUN</option>
                                            <option value="LAINNYA">LAINNYA</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Berat Lahir</label>
                                        <div class="input-group mb-2">
                                            <input type="number" class="form-control text-right" name="berat_lahir" id="berat_lahir1" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">gram</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Panjang Lahir</label>
                                        <div class="input-group mb-2">
                                            <input type="number" class="form-control text-right" name="panjang_lahir" id="panjang_lahir1" required>
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
                                        <select class="form-control selectric" onchange="onChangePerkawinan1(this.value);" id="status_perkawinan1" name="status_perkawinan" required>
                                            <option value="">Pilih Status Perkawinan</option>
                                            <option value="BELUM KAWIN">BELUM KAWIN</option>
                                            <option value="KAWIN">KAWIN</option>
                                            <option value="CERAI HIDUP">CERAI HIDUP</option>
                                            <option value="CERAI MATI">CERAI MATI</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Nomor Akta Nikah</label>
                                        <input type="hidden" id="id_perkawinan1" name="id_perkawinan">
                                        <input type="number" class="form-control" id="no_akta_nikah1" name="no_akta_nikah" placeholder="Nomor Akta Nikah" required disabled>
                                    </div>
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Tanggal Perkawinan</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-calendar"></i>
                                                </div>
                                                <input type="text" id="tanggal_perkawinan1" name="tanggal_perkawinan" class="form-control datepicker" required disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-8">
                                        <label class="col-form-label">Nomor Akta Perceraian</label>
                                        <input type="number" class="form-control" id="no_akta_perceraian1" name="no_akta_perceraian" placeholder="Nomor Akta Perceraian" required disabled>
                                    </div>
                                    <div class="form-group col-4">
                                        <label class="col-form-label">Tanggal Perceraian</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-calendar"></i>
                                                </div>
                                                <input type="text" id="tanggal_perceraian1" name="tanggal_perceraian" class="form-control datepicker" required disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tombol Simpan -->
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

    function onChangePerkawinan1(val) {
        kosongkan();
        switch (val) {
            case 'KAWIN':
                $('#no_akta_nikah1').prop("disabled", false);
                $('#tanggal_perkawinan1').prop("disabled", false);
                $('#no_akta_perceraian1').prop("disabled", true);
                $('#tanggal_perceraian1').prop("disabled", true);
                $('#tanggal_perceraian1').val(null);
                break;
            case 'CERAI HIDUP':
                $('#no_akta_nikah1').prop("disabled", true);
                $('#tanggal_perkawinan1').prop("disabled", true);
                $('#tanggal_perkawinan1').val(null);
                $('#no_akta_perceraian1').prop("disabled", false);
                $('#tanggal_perceraian1').prop("disabled", false);
                break;
            case 'CERAI MATI':
            case 'BELUM KAWIN':
            default:
                $('#no_akta_nikah1').prop("disabled", true);
                $('#tanggal_perkawinan1').prop("disabled", true);
                $('#tanggal_perkawinan1').val(null);
                $('#no_akta_perceraian1').prop("disabled", true);
                $('#tanggal_perceraian1').prop("disabled", true);
                $('#tanggal_perceraian1').val(null);
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
            url: "controller/control-penduduk.php",
            method: "POST",
            data: "nik1=" + val,
            dataType: "json",
            success: function(data) {
                $('#nik').text(":  " + data.nik);
                $('#nama').text(":  " + data.nama);
                $('#status_wajib_ktp').text(":  " + data.status_wajib_ktp);
                $('#agama').text(":  " + data.agama);
                $('#jenis_kelamin').text(":  " + data.jenis_kelamin);
                $('#pendidikan_kk').text(":  " + data.pendidikan_dalam_kk);
                $('#pendidikan_sekarang').text(":  " + data.pendidikan_sekarang);
                $('#pekerjaan').text(":  " + data.pekerjaan);
                $('#status_negara').text(":  " + data.status_warga_negara);
                $('#status_penduduk').text(":  " + data.status_penduduk);
                $('#alamat_sekarang').text(":  " + data.alamat_sekarang);
                $('#tempat_lahir').text(":  " + data.tempat_lahir);
                $('#tanggal_lahir').text(":  " + data.tanggal_lahir);
                $('#anak_ke').text(":  " + data.anak_ke);
                $('#status_perkawinan').text(":  " + data.status_perkawinan);
                $('#hubungan_dalam_kk').text(":  " + data.hubungan_dalam_kk);
                $('#modal-detail').modal('show');
            }
        });
    }

    function onUbah(val) {
        $.ajax({
            url: "controller/control-penduduk.php",
            method: "POST",
            data: "nik1=" + val,
            dataType: "json",
            success: function(data) {
                onChangePerkawinan1(data.status_perkawinan);
                $('#no_kk1').val(data.no_kk);
                if (data.hubungan_dalam_kk == "KEPALA KELUARGA") {
                    $('#hubungan_keluarga1').append($('<option>', {
                        value: "KEPALA KELUARGA",
                        text: 'KEPALA KELUARGA'
                    }));
                    $('#hubungan_keluarga1').val("KEPALA KELUARGA").change;
                    $('#hubungan_keluarga1').prop("disabled", true);
                } else {
                    $('#hubungan_keluarga1').prop("disabled", false);
                    $('#hubungan_keluarga1').val(data.hubungan_dalam_kk).change;
                }
                $('#hubungan_keluarga1').val().change;
                $('#nik1').val(data.nik);
                $('#nik2').val(data.nik);
                $('#nama_penduduk1').val(data.nama);
                $('#status_wajib_ktp1').val(data.status_wajib_ktp).change;
                $('#agama1').val(data.agama).change;
                $('#kewarganegaraan1').val(data.status_warga_negara).change;
                $('#status_penduduk1').val(data.status_penduduk).change;
                $('#pendidikan_kk1').val(data.pendidikan_dalam_kk).change;
                $('#pendidikan_sekarang1').val(data.pendidikan_sekarang).change;
                $('#pekerjaan1').val(data.pekerjaan).change;
                $('#alamat_sebelumnya1').val(data.alamat_sebelumnya).change;
                $('#alamat_sekarang1').val(data.alamat_sekarang).change;
                $('#no_akta_kelahiran1').val(data.id_akte);
                $('#no_akta_kelahiran2').val(data.id_akte).change;
                $('#tempat_lahir1').val(data.tempat_lahir);
                $('#tanggal_lahir1').val(data.tanggal_lahir);
                $('#jenis_kelamin1').val(data.jenis_kelamin).change;
                $('#waktu_kelahiran1').val(data.waktu_kelahiran);
                $('#tempat_dilahirkan1').val(data.tempat_dilahirkan).change;
                $('#jenis_kelahiran1').val(data.jenis_kelahiran).change;
                $('#anak_ke1').val(data.anak_ke).change;
                $('#berat_lahir1').val(data.berat_lahir);
                $('#panjang_lahir1').val(data.panjang_lahir);
                $('#penolong_kelahiran1').val(data.penolong_kelahiran).change;
                $('#id_perkawinan1').val(data.id_perkawinan);
                $('#status_perkawinan1').val(data.status_perkawinan).change;
                $('#no_akta_nikah1').val(data.no_akta_nikah);
                $('#tanggal_perkawinan1').val(data.tanggal_perkawinan);
                $('#no_akta_perceraian1').val(data.no_akta_perceraian);
                $('#tanggal_perceraian1').val(data.tanggal_perceraian);
                // alert(data.penolong_kelahiran);
                $('#modal-ubah').modal('show');
            }
        });
    }
</script>