<?php

if (!empty($_POST["catid"])) {

    require('Koneksi.php');
    $con = new Koneksi();

    $id = $_POST['catid'];
    $tags = $con->execute("SELECT * FROM DATA_TAGS WHERE id_kategori ='" . $id . "' AND status_aktif ='AKTIF'");
    $tags->fetch_all(MYSQLI_BOTH);
?>
    <option value=""> Pilih Tags </option>
    <?php
    foreach ($tags as $data) {
    ?>
        <option value="<?php echo ($data['id_tags']); ?>"><?php echo ($data['nama_tags']); ?></option>
    <?php
    }
}


require('Aksi-Keluarga.php');
$con_aksi = new Aksi();

if (!empty($_POST["id_dusun"])) {
    $query = $con_aksi->read_rw($_POST["id_dusun"])->fetch_all(MYSQLI_BOTH);
    ?>
    <option value="">Pilih RW</option>
    <?php
    foreach ($query as $data) {
    ?>
        <option value="<?php echo ($data['id_rw']); ?>"><?php echo (sprintf("%'.03d", $data['nomor_rw'])); ?></option>
    <?php
    }
} else if (!empty($_POST["id_rw"])) {
    $query = $con_aksi->read_rt($_POST["id_rw"])->fetch_all(MYSQLI_BOTH);
    ?>
    <option value="">Pilih RT</option>
    <?php
    foreach ($query as $data) {
    ?>
        <option value="<?php echo ($data['id_rt']); ?>"><?php echo (sprintf("%'.03d", $data['nomor_rt'])); ?></option>
    <?php
    }
} else if (!empty($_POST["no_kk"])) {
    $query = $con_aksi->read_data_detail_filter($_POST["no_kk"])->fetch_all(MYSQLI_BOTH);
    ?>
    <option value="">Pilih Kepala Keluarga</option>
    <?php
    foreach ($query as $data) {
    ?>
        <option value="<?php echo ($data['nik']); ?>"><?php echo ($data['nik'] . " / " . $data['nama']); ?></option>
    <?php
    }
} else if (!empty($_POST["no_kk1"])) {
    ?>
    <thead>
        <tr>
            <th class="text-center">No.</th>
            <th>NIK</th>
            <th>Nama Anggota</th>
            <th>Hubungan Dalam KK</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $index = 1;
        $query = $con_aksi->read_data_detail_filter($_POST["no_kk1"]);
        if ($query->num_rows > 0) {
            $count = $query->field_count;
            foreach ($query->fetch_all() as $data) {
                echo ("<tr>");
                echo ("<td>" . $index . "</td>");
                for ($i = 1; $i < $count; $i++) {
                    echo ("<td>" . $data[$i] . "</td>");
                }
                echo ("</tr>");
                $index++;
            }
        }
        ?>
    </tbody>
<?php
}


?>