<h2>Input Category</h2>
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
        /* Latar belakang ringan */
        color: #333;
        padding: 20px;
    }

    h2 {
        font-size: 32px;
        margin-bottom: 20px;
        color: #333;
        text-align: center;
        /* Header di tengah */
    }

    /* Container form */
    .form-container {
        max-width: 600px;
        margin: 0 auto;
        background-color: #fff;
        /* Background putih untuk form */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        /* Bayangan untuk memberi efek elegan */
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
        /* Warna lebih gelap saat hover */
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

<form action="<?php echo URL; ?>/categories/save" method="post">
    <table>
        <tr>
            <td>NAME</td>
            <td><input type="text" name="cat_name" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>