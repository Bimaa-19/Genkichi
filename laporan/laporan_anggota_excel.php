<?php 
require_once '../config/koneksi.php';

$filename = "anggota_excel-(". date('d-m-Y') .").xls";

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$filename");

// menampilkan DB buku
$ambilAnggota = $conn->query("SELECT * FROM tb_anggota ORDER BY id_anggota DESC") or die(mysqli_error($conn));

?>
<h2>Laporan Anggota</h2>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Nick Name</th>
            <th>UID</th>
            <th>Genkichi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $no = 1;
        while ($pecahAnggota = $ambilAnggota->fetch_assoc()) {
        $jk = ($pecahAnggota['jk'] == 'L') ? 'Laki-Laki' : 'Perempuan';
        ?>
        <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $pecahAnggota['nama_anggota']; ?></td>
                        <td><?= $pecahAnggota['tempat_lahir']; ?></td>
                        <td><?= $pecahAnggota['tgl_lahir']; ?></td>
                        <td><?= $jk; ?></td>
                        <td><?= $pecahAnggota['nickname']; ?></td>
                        <td><?= $pecahAnggota['uid_game']; ?></td>
                        <td><?= $pecahAnggota['genkichi']; ?></td>
                        <td>
                            <a href="?p=anggota&aksi=ubah&id=<?= $pecahAnggota['id_anggota']; ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="?p=anggota&aksi=hapus&id=<?= $pecahAnggota['id_anggota']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash" onclick="return confirm('Yakin ?')"></i></a>
                        </td>
        </tr>
        <?php } ?>
    </tbody>
</table>