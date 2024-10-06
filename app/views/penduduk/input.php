<h2>Input Penduduk</h2>
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

    .form-penduduk {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        color: #555;
        font-size: 14px;
        font-weight: bold;
    }

    .form-group input,
    .form-group textarea,
    .form-group select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
    }

    .form-group input:focus,
    .form-group textarea:focus,
    .form-group select:focus {
        outline: none;
        border-color: #4CAF50;
        box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
    }

    textarea {
        resize: vertical;
    }

    .btn-submit {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }

    .btn-submit:hover {
        background-color: #45a049;
    }
</style>

<form action="<?php echo URL; ?>/penduduk/save" method="post">
    <table>


        <tr>
            <td>NIK</td>
            <td><input type="text" name="nik" required></td>
        </tr>
        <tr>
            <td>NAMA LENGKAP</td>
            <td><input type="nama" name="nama" required></td>
        </tr>
        <tr>
            <td>JENIS KELAMIN</td>
            <td><input type="text" name="jenis_kelamin" required></td>
        </tr>

        <tr>
            <td>No.Telp</td>
            <td><input type="text" name="nomor_hp" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat_penduduk" required></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>