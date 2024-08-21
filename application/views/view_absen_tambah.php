<div class="row" style="margin: 0;">
    <div class="col-md-12 stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title mb-0">Tambah Rekapan</p><br>
                <form id="rekapan-form" action="<?php echo base_url('index.php/absen/tambah_proses'); ?>" method="post">
                    <label>Bulan</label>
                    <input type="text" class="form-control" name="bulan">

                    <br>

                    <label>NIP</label>
                    <input type="text" class="form-control" name="nip">

                    <br>

                    <label>Nama Karyawan</label>
                    <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan">

                    <br>

                    <label>Jenis Kelamin</label><br>
                    <input type="radio" class="form-check-input" name="jenis_kelamin" id="LakiLaki" value="L" checked="">
                    <label for="LakiLaki">Laki-laki</label>

                    <input type="radio" class="form-check-input" name="jenis_kelamin" id="Perempuan" value="P">
                    <label for="Perempuan">Perempuan</label>
                    
                    <br><br>

                    <label>Jabatan</label>
                    <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan">

                    <br>

                    <label>Hadir</label>
                    <input type="text" class="form-control" name="hadir">

                    <br>

                    <label>Sakit</label>
                    <input type="text" class="form-control" name="sakit">

                    <br>

                    <label>Alpha</label>
                    <input type="text" class="form-control" name="alpha">

                    <br><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?php echo base_url('index.php/absen') ?>" class="btn btn-primary">Kembali</a>
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
