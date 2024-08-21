<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title mb-0">Data Karyawan</p><br>
                <div class="table-responsive">
                <a href="<?php echo base_url('index.php/karyawan/tambah') ?>" class="btn btn-primary btn-icon-text ajax-link">
                <i class="mdi mdi-plus-circle btn-icon-prepend"></i> Tambah Karyawan</a><br><br>
                <table class="table table-striped table-borderless">
                    <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama karyawan</th>
                        <th>Jenis Kelamin</th>
                        <th>Jabatan</th>
                        <th>Tanggal Masuk</th>
                        <th>Aksi</th>
                    </tr>
                    <?php $no=0;
                    foreach($karyawan as $kyn){ ?>
                    <tr>
                        <td><?php echo ++$no?></td>
                        <td><?php echo $kyn['nip']?></td>
                        <td><?php echo $kyn['nama_karyawan']?></td>
                        <td><?php echo $kyn['jenis_kelamin']?></td>
                        <td><?php echo $kyn['jabatan']?></td>
                        <td><?php echo $kyn['tanggal_masuk']?></td>
                        <td>
                            <a href="<?php echo base_url('index.php/karyawan/hapus/'.$kyn['id_karyawan'])?>" class="btn btn-primary btn-rounded btn-icon">
                                <br><i class="ti-trash"></i></a>
                            <a href="<?php echo base_url('index.php/karyawan/ubah/'.$kyn['id_karyawan'])?>" class="btn btn-primary btn-rounded btn-icon">
                                <br><i class="ti-pencil"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
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