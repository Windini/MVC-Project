<h2>Edit Category</h2>
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
        background-color: #f7f9fc;
        color: #333;
        padding: 20px;
    }

    h2 {
        font-size: 32px;
        margin-bottom: 20px;
        color: #333;
        text-align: center;
        /* Posisi tengah untuk judul */
    }

    /* Container form */
    .form-container {
        max-width: 600px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        /* Bayangan ringan */
    }

    /* Gaya form */
    form {
        width: 100%;
    }

    /* Gaya tabel form */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    /* Gaya label kolom */
    td {
        padding: 10px;
        vertical-align: middle;
        font-size: 16px;
        color: #333;
    }

    /* Gaya input */
    input[type="text"] {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        transition: border-color 0.3s ease;
    }

    /* Fokus pada input */
    input[type="text"]:focus {
        border-color: #4CAF50;
        /* Warna hijau saat fokus */
        outline: none;
    }

    /* Gaya tombol submit */
    input[type="submit"] {
        background-color: #4CAF50;
        /* Warna hijau */
        color: white;
        border: none;
        padding: 12px 20px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
        /* Warna hijau lebih gelap saat di-hover */
    }

    /* Gaya responsif untuk layar kecil */
    @media (max-width: 600px) {
        table {
            display: block;
        }

        td {
            display: block;
            width: 100%;
            text-align: left;
        }
    }
</style>

<form action="<?php echo URL; ?>/categories/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['cat_id']; ?>">
    <table>
        <tr>
            <td>NAME</td>
            <td><input type="text" name="cat_name" value="<?php echo $data['row']['cat_name']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>