<div class="row" style="margin: 0;">
    <div class="col-md-12 stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title mb-0">Tambah Jabatan</p><br>
                <form action="<?php echo base_url('index.php/jabatan/tambah_proses'); ?>" method="post">
                        <label>Nama Jabatan</label>
                        <input type="text" class="form-control" name="nama_jabatan">

                        <br>

                        <label>Gaji Pokok</label>
                        <input type="number" class="form-control" name="gaji_pokok">

                        <br>

                        <label>Transport</label>
                        <input type="number" class="form-control" name="transport">

                        <br>

                        <label>Uang Makan</label>
                        <input type="number" class="form-control"name="uang_makan">

                        <br><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?php echo base_url('index.php/jabatan') ?>" class="btn btn-primary">Kembali</a>
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