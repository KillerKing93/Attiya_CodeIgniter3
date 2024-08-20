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
                            <th>Aksi</th>
                          </tr>

                          <?php 
                        $alpha = 0; // Default value if no potongan is found
                        if (!empty($potongan)) {
                            foreach ($potongan as $p) {
                                if (isset($p->jml_potongan)) {
                                    $alpha = $p->jml_potongan;
                                }
                            }
                        }
                        ?>

                        <?php $no = 0; ?>
                        <?php if (!empty($penggajian)) : ?>
                            <?php foreach ($penggajian as $g) : ?>
                                <?php 
                                $alpha_value = isset($g['alpha']) ? (int)$g['alpha'] : 0;
                                $potongan_value = isset($alpha) ? (int)$alpha : 0;
                                $potongan = $alpha_value * $potongan_value;
                                ?>
                                <tr>
                                    <td><?php echo ++$no; ?></td>
                                    <td><?php echo $g['nip']; ?></td>
                                    <td><?php echo $g['nama_karyawan']; ?></td>
                                    <td><?php echo $g['nama_jabatan']; ?></td>
                                    <td><?php echo $g['gaji_pokok']; ?></td>
                                    <td><?php echo $g['transport']; ?></td>
                                    <td><?php echo $g['uang_makan']; ?></td>
                                    <td><?php echo number_format($potongan, 0, ',', '.'); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            
                            <tr>
                                <td colspan="9">Data penggajian tidak tersedia.</td>
                            </tr>
                        <?php endif; ?>
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
