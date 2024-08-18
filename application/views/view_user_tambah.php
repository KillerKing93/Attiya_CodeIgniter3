<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kelas</title>
</head>
<body>
    <h1>Tambah Kelas</h1>
    <form action="<?php echo base_url('index.php/kelas/tambah_proses') ?>"
    method="post">
        <label>Nama Kelas</label>
        <input name="nama_kelas" type="text">
        <br><br>

        <label>Tingkat</label>
        <input name="tingkat" type="text">
        <br><br>

        <label>Wali Kelas</label>
        <input name="wali_kelas" type="text">
        <br><br>

        <label>Tahun Ajaran</label>
        <input name="tahun_ajaran" type="text">
        <br><br>

        <a href="<?php echo base_url('index.php/kelas') ?>"><button>Kembali</</button></a>
        <button type="submit" name="simpan">Simpan</button>
</form>
</body>
</html>