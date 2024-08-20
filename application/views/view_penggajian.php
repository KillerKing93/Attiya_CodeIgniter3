<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title mb-0">Data Gaji Karyawan</p><br>
               
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
                          </tr>

                          <?php $no=0; ?>
                            <?php foreach($penggajian as $g) { ?>
                            <?php 
                            $alpha_value = isset($g['alpha']) ? (int)$g['alpha'] : 0;
                            $potongan_per_alpha = isset($g['potongan_per_alpha']) ? (float)$g['potongan_per_alpha'] : 0.0;
                            $gaji_pokok = isset($g['gaji_pokok']) ? (float)$g['gaji_pokok'] : 0.0;
                            $transport = isset($g['transport']) ? (float)$g['transport'] : 0.0;
                            $uang_makan = isset($g['uang_makan']) ? (float)$g['uang_makan'] : 0.0;

                            // Menghitung potongan
                            $potongan = $alpha_value * $potongan_per_alpha;

                            // Menghitung total gaji
                            $total_gaji = ($gaji_pokok + $transport + $uang_makan) - $potongan;
                            ?>
                            <tr>
                                <td><?php echo ++$no; ?></td>
                                <td><?php echo $g['nip']; ?></td>
                                <td><?php echo $g['nama_karyawan']; ?></td>
                                <td><?php echo $g['nama_jabatan']; ?></td>
                                <td>Rp.<?php echo number_format($gaji_pokok, 0, ',', '.'); ?></td>
                                <td>Rp.<?php echo number_format($transport, 0, ',', '.'); ?></td>
                                <td>Rp.<?php echo number_format($uang_makan, 0, ',', '.'); ?></td>
                                <td>Rp.<?php echo number_format($potongan, 0, ',', '.'); ?></td>
                                <td>Rp.<?php echo number_format($total_gaji, 0, ',', '.'); ?></td>
                            </tr>
                        <?php } ?>
                    </table>
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
