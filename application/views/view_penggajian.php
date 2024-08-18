<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title mb-0">Data Gaji Karyawan</p><br>
                <div class="table-responsive">
                <a href="<?php echo base_url('index.php/pengganian/tambah') ?>" class="btn btn-primary btn-icon-text ajax-link">
                <i class="mdi mdi-plus-circle btn-icon-prepend"></i> Tambah Data Gaji Karyawan</a><br><br>
                <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama Karyawan</th>
                            <th>Jabatan</th>
                            <th>Gaji Pokok</th>
                            <th>Transport</th>
                            <th>Uang Makan</th>
                            <th>Potongan</th>
                            <th>Total Gaji</th>
                            <th>Aksi</th>
                          </tr>
                    </table>
                    <?php $no=0;
                        foreach($penggajian as $g){ ?>
                        <tr>
                            <td><?php echo ++$no?></td>
                            <td><?php echo $g['nip']?></td>
                            <td><?php echo $g['nama_karyawan']?></td>
                            <td><?php echo $g['nama_jabatan']?></td>
                            <td><?php echo $g['gaji_pokok']?></td>
                            <td><?php echo $g['transport']?></td>
                            <td><?php echo $g['uang_makan']?></td>
                            <td><?php echo $g['nip']?></td>
                            
                        </tr>
                    <?php } ?>
                </div>
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
