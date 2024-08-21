<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title mb-0">Data Absensi</p><br>
                <div class="table-responsive">
                <a href="<?php echo base_url('index.php/absen/tambah') ?>" class="btn btn-primary btn-icon-text ajax-link">
                <i class="mdi mdi-plus-circle btn-icon-prepend"></i> Tambah Rekapan</a><br><br>
                    <table class="table table-striped table-borderless">
                          <tr>
                            <th>No</th>
                            <th>Bulan</th>
                            <th>NIP</th>
                            <th>Nama Karyawan</th>
                            <th>Jenis Kelamin</th>
                            <th>Jabatan</th>
                            <th>Hadir</th>
                            <th>Sakit</th>
                            <th>Alpha</th>
                            <th>Aksi</th>
                          </tr>
                        <?php $no=0;
                        foreach($absen as $a){ ?>
                        <tr>
                            <td><?php echo ++$no?></td>
                            <td><?php echo $a['bulan']?></td>
                            <td><?php echo $a['nip']?></td>
                            <td><?php echo $a['nama_karyawan']?></td>
                            <td><?php echo $a['jenis_kelamin']?></td>
                            <td><?php echo $a['nama_jabatan']?></td>
                            <td><?php echo $a['hadir']?></td>
                            <td><?php echo $a['sakit']?></td>
                            <td><?php echo $a['alpha']?></td>
                            <td>
                            <a href="<?php echo base_url('index.php/absen/hapus/'.$a['id_absen'])?>" class="btn btn-primary btn-rounded btn-icon">
                                <br><i class="ti-trash"></i></a>
                            <a href="<?php echo base_url('index.php/absen/ubah/'.$a['id_absen'])?>" class="btn btn-primary btn-rounded btn-icon">
                                <br><i class="ti-pencil"></i></a>
                        </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>  
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

