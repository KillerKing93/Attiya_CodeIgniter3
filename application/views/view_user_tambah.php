<div class="row" style="margin: 0;">
    <div class="col-md-12 stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title mb-0">Tambah User</p><br>
                <form action="<?php echo base_url('index.php/user/tambah_proses') ?>" method="post">
                    <label>Nama user</label>
                    <input class="form-control" name="nama" type="text">

                    <br>

                    <label>Username</label>
                    <input class="form-control" name="username" type="text">

                    <br>

                    <label>Password</label>
                    <input class="form-control" name="password" type="text">

                    <br><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?php echo base_url('index.php/user') ?>" class="btn btn-primary">Kembali</a>
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