<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Kelas</title>
</head>
<body>
    <h1>Ubah Kelas</h1>
    <form action="<?php echo base_url('index.php/kelas/ubah_proses') ?>"
    method="post">
        <input name="id_kelas" type="hidden" value="<?php echo $kelas[0]['id_kelas']?>">

        <label>Nama Kelas</label>
        <input name="nama_kelas" type="text" value="<?php echo $kelas[0]['nama_kelas']?>">

        <br><br>
        <label>Tingkat</label>
        <input name="tingkat" type="text" value="<?php echo $kelas[0]['tingkat']?>">

        <br><br>
        <label>Wali Kelas</label>
        <input name="wali_kelas" type="text" value="<?php echo $kelas[0]['wali_kelas']?>">

        <br><br>
        <label>Tahun Ajaran</label>
        <input name="tahun_ajaran" type="text" value="<?php echo $kelas[0]['tahun_ajaran']?>">

        <br><br>

        <a href="<?php echo base_url('index.php/kelas') ?>"><button>Kembali</</button></a>
        <button type="submit" name="simpan">Simpan</button>
</form>
</body>
</html>