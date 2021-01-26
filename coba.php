<!DOCTYPE html>
<html>

<head>
  <title>Webslesson Tutorial | PHP Ajax Update MySQL Data Through Bootstrap Modal</title>

  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="assets/modules/datatables/datatables.min.css">
  <link rel="stylesheet" href="assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">

</head>

<body>

  <div class="table-responsive">
    <table class="table table-striped display nowrap" id="table-1">
      <thead>
        <tr>
          <th class="text-center">
            No.
          </th>
          <th>Data Dusun</th>
          <th>Data RW</th>
          <th>Data RT</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td rowspan="2">1</td>
        </tr>
        <tr>
          <td rowspan="2">Ini Baris ke 1 dan 2, Kolom ke 1</td>
          <td>Ini Baris ke 1, Kolom ke 2</td>
          <td>Ini Baris ke 1, Kolom ke 3</td>
        </tr>
        <tr>
          <td>Ini Baris ke 2, Kolom ke 2</td>
          <td>Ini Baris ke 2, Kolom ke 3</td>
        </tr>
        <tr>
          <td>2</td>
        </tr>
        <tr>
          <td>Ini Baris ke 3, Kolom ke 1</td>
          <td>Ini Baris ke 3, Kolom ke 2</td>
          <td rowspan="2">Ini Baris ke 3, Kolom ke 2 dan 3</td>
        </tr>

        <tr>
          <td>3</td>
        </tr>
        <tr>
          <td>Ini Baris ke 4, Kolom ke 1</td>
          <td>Ini Baris ke 4, Kolom ke 2</td>
        </tr>
      </tbody>
    </table>
  </div>


  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>

  <!-- Datatables JS File -->
  <script src="assets/modules/datatables/datatables.min.js"></script>
  <script src="assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
  <script src="assets/modules/jquery-ui/jquery-ui.min.js"></script>

  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>

</body>

</html>