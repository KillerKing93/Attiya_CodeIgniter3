<div class="row" style="margin: 0;">
    <div class="col-md-12 stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title mb-0">Tambah Karyawan</p><br>
                <form action="<?php echo base_url('index.php/karyawan/tambah_proses') ?>" method="post">
                    <label>NIP</label>
                    <input class="form-control"  name="nip" type="text">

                    <br>

                    <label>Nama Karyawan</label>
                    <input class="form-control" name="nama_karyawan" type="text">

                    <br>

                    <label>Jenis Kelamin</label><br>
                    <input type="radio" class="form-check-input" name="jenis_kelamin" id="LakiLaki" value="L" checked="">
                    <label for="LakiLaki">Laki-laki</label>

                    <input type="radio" class="form-check-input" name="jenis_kelamin" id="Perempuan" value="P">
                    <label for="Perempuan">Perempuan</label>


                    <br><br>

                    <label>Jabatan</label>
                    <select name="id_jabatan" class="form-control">
                        <option value="">--Pilih Jabatan--</option>
                        <?php foreach ($jabatan as $jbt): ?>
                            <option value="<?= $jbt['id_jabatan'] ?>"><?= $jbt['nama_jabatan'] ?></option>
                        <?php endforeach; ?>
                    </select>

                    <br>

                    <label>Tanggal Masuk</label>
                    <input class="form-control" name="tanggal_masuk" type="date">

                    <br><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?php echo base_url('index.php/karyawan') ?>" class="btn btn-primary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
<div class="d-sm-flex justify-content-center justify-content-sm-between">
  <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024. Premium <a href="https://www.bootstrapdash.com/" target="_blank">Attiya template</a> from attiyadf36_. All rights reserved.</span>
  <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ms-1"></i></span>
</div>
</footer>