<h2>Penduduk</h2>
<style>
      body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
      }

      h2 {
            text-align: center;
            margin-bottom: 20px;
      }

      .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-bottom: 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
      }

      .btn:hover {
            background-color: #45a049;
      }

      .input-btn {
            display: inline-block;
            margin-left: auto;
            margin-right: auto;
            display: block;
      }

      .styled-table {
            margin: 25px auto;
            border-collapse: collapse;
            font-size: 14px;
            width: 80%;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
      }

      .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
            font-weight: bold;
      }

      .styled-table th,
      .styled-table td {
            padding: 12px 15px;
      }

      .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
      }

      .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
      }

      .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
      }

      .styled-table tbody tr:hover {
            background-color: #f1f1f1;
      }

      .edit-btn {
            background-color: #00a8ff;
      }

      .delete-btn {
            background-color: #e74c3c;
      }

      .edit-btn:hover,
      .delete-btn:hover {
            opacity: 0.8;
      }
</style>

<a href="<?php echo URL; ?>/penduduk/input" class="btn">Input Penduduk</a>

<table>
      <tr>
            <th>NO</th>
            <th>NIK</th>
            <th>NAMA LENGKAP</th>
            <th>JENIS KELAMIN</th>
            <th>NO.TELP</th>
            <th>ALAMAT</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nik']; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['jenis_kelamin']; ?></td>
                  <td><?php echo $row['nomor_hp']; ?></td>
                  <td><?php echo $row['alamat_penduduk']; ?></td>
                  <td><a href="<?php echo URL; ?>/penduduk/edit/<?php echo $row['penduduk_id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/penduduk/delete/<?php echo $row['penduduk_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>