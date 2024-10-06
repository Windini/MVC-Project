<h2>Posts</h2>
<style>
      body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
      }

      h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
      }

      .input-btn {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            margin-bottom: 20px;
            transition: background-color 0.3s ease;
      }

      .input-btn:hover {
            background-color: #45a049;
      }

      .styled-table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 18px;
            text-align: left;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      .styled-table thead tr {
            background-color: #009879;
            color: white;
            text-align: left;
            font-weight: bold;
      }

      .styled-table th,
      .styled-table td {
            padding: 12px 15px;
            text-align: center;
      }

      .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
      }

      .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
      }

      .styled-table tbody tr:hover {
            background-color: #f1f1f1;
            cursor: pointer;
      }

      .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
      }

      .btn-edit {
            color: #fff;
            background-color: #4CAF50;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
      }

      .btn-edit:hover {
            background-color: #45a049;
      }

      .btn-delete {
            color: #fff;
            background-color: #e74c3c;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
      }

      .btn-delete:hover {
            background-color: #c0392b;
      }
</style>
<a href="<?php echo URL; ?>/posts/input" class="btn">Input Post</a>

<table id="dtb">
      <thead>
            <tr>
                  <th>NO</th>
                  <th>CATEGORI</th>
                  <th>TITLE</th>
                  <th>EDIT</th>
                  <th>DELETE</th>
            </tr>
      </thead>
      <tbody>
            <?php $no = 1;
            foreach ($data['rows'] as $row) { ?>
                  <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['cat_name']; ?></td>
                        <td><?php echo $row['post_title']; ?></td>
                        <td><a href="<?php echo URL; ?>/posts/edit/<?php echo $row['post_id']; ?>" class="btn">Edit</a></td>
                        <td><a href="<?php echo URL; ?>/posts/delete/<?php echo $row['post_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
                  </tr>
            <?php $no++;
            } ?>
      </tbody>
</table>