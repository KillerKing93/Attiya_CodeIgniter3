<h1>Data Kelas</h1>
<a href="<?php echo base_url('index.php/kelas/tambah') ?>"><button>Tambah Kelas</button></a><br><br>
<table border="1" width="100%">
    <tr>
        <td>No</td>
        <td>Nama Kelas</td>
        <td>Tingkat</td>
        <td>Wali Kelas</td>
        <td>Tahun Ajaran</td>
        <td>Aksi</td>

    </tr>
    <?php $no=0;
    foreach($kelas as $kls){ ?>
    <tr>
        <td><?php echo ++$no?></td>
        <td><?php echo $kls['nama_kelas']?></td>
        <td><?php echo $kls['tingkat']?></td>
        <td><?php echo $kls['wali_kelas']?></td>
        <td><?php echo $kls['tahun_ajaran']?></td>
        <td>
            <a href="<?php echo base_url('index.php/kelas/ubah/'.$kls['id_kelas'])?>"><button>Edit</button>
            <a href="<?php echo base_url('index.php/kelas/hapus/'.$kls['id_kelas'])?>"><button>Hapus</button>
        </td>
    </tr>
    <?php } ?>
</table>