<div class="row w-100" style="margin: 0;">
    <div class="col-md-12 stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title mb-0">Ubah Jabatan</p><br>
                <form action="<?php echo base_url('index.php/jabatan/ubah_proses') ?>"
                method="post">
                    <input name="id_jabatan" type="hidden" value="<?php echo $jabatan[0]['id_jabatan']?>">

                    <label>Jabatan</label>
                    <input class="form-control"name="nama_jabatan" type="text" value="<?php echo $jabatan[0]['nama_jabatan']?>">

                    <br><br>

                    <label>Gaji Pokok</label>
                    <input class="form-control"name="gaji_pokok" type="text" value="<?php echo $jabatan[0]['gaji_pokok']?>">

                    <br><br>

                    <label>Transport</label>
                    <input class="form-control"name="transport" type="text" value="<?php echo $jabatan[0]['transport']?>">

                    <br><br>

                    <label>Uang Makan</label>
                    <input class="form-control"name="uang_makan" type="text" value="<?php echo $jabatan[0]['uang_makan']?>">


                    <br><br>
                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                    <a href="<?php echo base_url('index.php/jabatan') ?>"class="btn btn-primary">Kembali</a>
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