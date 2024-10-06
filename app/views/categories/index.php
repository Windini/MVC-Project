<h2>Categories</h2>

<a href="<?php echo URL; ?>/categories/input" class="btn">Input Categori</a>
<style>
      /* Reset CSS */
      * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
      }

      /* Gaya dasar */
      body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            /* Latar belakang yang lembut */
            color: #333;
            padding: 20px;
      }

      h2 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #333;
      }

      /* Tombol */
      .btn {
            background-color: #4CAF50;
            /* Warna hijau */
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-size: 16px;
            margin-bottom: 20px;
      }

      .btn:hover {
            background-color: #45a049;
            /* Warna saat di hover */
      }

      /* Tabel */
      table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            /* Bayangan halus */
            overflow: hidden;
      }

      /* Gaya header tabel */
      th {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            text-align: left;
            font-size: 16px;
      }

      /* Gaya body tabel */
      td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
      }

      td a.btn {
            background-color: #ff9800;
            /* Warna oranye untuk tombol Edit */
            padding: 8px 12px;
            font-size: 14px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
      }

      td a.btn:hover {
            background-color: #e68900;
      }

      /* Gaya untuk setiap baris */
      tr:nth-child(even) {
            background-color: #f9f9f9;
            /* Warna alternatif setiap baris */
      }

      tr:hover {
            background-color: #f1f1f1;
            /* Warna hover pada baris */
      }

      /* Menambahkan margin pada kategori */
      .categories-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
      }
</style>

<table>
      <tr>
            <th>NO</th>
            <th>NAME</th>
            <th>EDIT</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['cat_name']; ?></td>
                  <td><a href="<?php echo URL; ?>/categories/edit/<?php echo $row['cat_id']; ?>" class="btn">Edit</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>