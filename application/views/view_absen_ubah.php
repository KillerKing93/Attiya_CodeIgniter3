<div class="row w-100" style="margin: 0;">
    <div class="col-md-12 stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title mb-0">Ubah Rekapan</p><br>
                <form action="<?php echo base_url('index.php/absen/ubah_proses') ?>"
                method="post">
                    <input name="id_absen" type="hidden" value="<?php echo $absen[0]['id_absen']?>">

                    <label>Bulan</label>
                    <input class="form-control"name="bulan" type="text" value="<?php echo $absen[0]['bulan']?>">

                    <br><br>

                    <label>NIP</label>
                    <input class="form-control"name="nip" type="text" value="<?php echo $absen[0]['nip']?>">

                    <br><br>

                    <label>Nama Karywan</label>
                    <input class="form-control"name="nama_karyawan" type="text" value="<?php echo $absen[0]['nama_karyawan']?>">

                    <br><br>
                    <label>Jenis Kelamin</label><br>
                    <input class="form-check-input" name="jenis_kelamin" type="radio" value="L" <?php if($absen[0]['jenis_kelamin'] == 'L') {echo 'checked';}?> >Laki-laki 
                    <input class="form-check-input" name="jenis_kelamin" type="radio" value="P" <?php if($absen[0]['jenis_kelamin'] == 'P') {echo 'checked';}?> >Perempuan

                    <br><br>

                    <label>Jabatan</label>
                    <input class="form-control"name="nama_jabatan" type="text" value="<?php echo $absen[0]['nama_jabatan']?>">

                    <br><br>

                    <label>Hadir</label>
                    <input class="form-control"name="hadir" type="text" value="<?php echo $absen[0]['hadir']?>">

                    <br><br>

                    <label>Sakit</label>
                    <input class="form-control"name="sakit" type="text" value="<?php echo $absen[0]['sakit']?>">

                    <br><br>

                    <label>Alpha</label>
                    <input class="form-control"name="alpha" type="text" value="<?php echo $absen[0]['alpha']?>">

                    <br><br>
                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                    <a href="<?php echo base_url('index.php/absen') ?>"class="btn btn-primary">Kembali</a>
                </form>  
            </div>
        </div>
    </div>
</div>
<footer class="footer">
<div class="d-sm-flex justify-content-center justify-content-sm-between">
  <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024. Premium <a href="https://www.instagram.com/attiyadf36_" target="_blank">Attiya template</a> from attiyadf36_. All rights reserved.</span>
  <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ms-1"></i></span>
</div>
</footer>