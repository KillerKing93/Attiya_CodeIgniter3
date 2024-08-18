<div class="row w-100" style="margin: 0;">
    <div class="col-md-12 stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title mb-0">Ubah Karyawan</p><br>
                <form action="<?php echo base_url('index.php/karyawan/ubah_proses') ?>" method="post">
                    <input name="id_karyawan" type="hidden" value="<?php echo $karyawan[0]['id_karyawan']?>">

                    <label>NIP</label>
                    <input class="form-control" name="nip" type="text" type="text" value="<?php echo $karyawan[0]['nip']?>">

                    <br>

                    <label>Nama Karyawan</label>
                    <input class="form-control" name="nama_karyawan" type="text" value="<?php echo $karyawan[0]['nama_karyawan']?>">

                    <br>

                    <label>Jenis Kelamin</label><br>
                    <input class="form-check-input" name="jenis_kelamin" type="radio" value="L" <?php if($karyawan[0]['jenis_kelamin'] == 'L') {echo 'checked';}?> >Laki-laki 
                    <input class="form-check-input" name="jenis_kelamin" type="radio" value="P" <?php if($karyawan[0]['jenis_kelamin'] == 'P') {echo 'checked';}?> >Perempuan

                    <br><br>

                    <label>Jabatan</label>
                    <input class="form-control" name="jabatan" type="text" type="text" value="<?php echo $karyawan[0]['jabatan']?>">

                    <br>

                    <label>Tanggal Masuk</label>
                    <input class="form-control" name="tanggal_masuk" type="date" type="date" value="<?php echo $karyawan[0]['tanggal_masuk']?>">

                    <br><br>
                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                    <a href="<?php echo base_url('index.php/karyawan') ?>"class="btn btn-primary">Kembali</a>
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
