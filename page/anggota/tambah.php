<?php 
if (isset($_POST['tambah'])) {
	$nama_anggota = htmlspecialchars(string: $_POST['nama_anggota']);
	$tempat_lahir = htmlspecialchars(string: $_POST['tempat_lahir']);
	$tgl_lahir = htmlspecialchars(string: $_POST['tgl_lahir']);
	$jk = htmlspecialchars(string: $_POST['jk']);
	$nickname = htmlspecialchars(string: $_POST['nickname']);
    $uid_game = htmlspecialchars(string: $_POST['uid_game']);
    $genkichi = htmlspecialchars(string: $_POST['genkichi']);

    if (empty($nama_anggota) || empty($tempat_lahir) || empty($tgl_lahir) || empty($jk) || empty($nickname) || empty($uid_game) || empty($genkichi)) {
        echo "<script>alert('Pastikan anda sudah mengisi semua formulir.');window.location='?p=anggota';</script>";
        exit;
    }

	$sql = $conn->query(query: "INSERT INTO tb_anggota 
		(nama_anggota, tempat_lahir, tgl_lahir, jk, nickname, uid_game, genkichi)
		VALUES ('$nama_anggota', '$tempat_lahir', '$tgl_lahir', '$jk', '$nickname', '$uid_game', '$genkichi')");

	if ($sql) {
		echo "<script>alert('Data Berhasil Ditambahkan.');window.location='?p=anggota';</script>";
	} else {
		echo "<script>alert('Data Gagal Ditambahkan.')</script>";
	}
}
?>

<h1 class="mt-4">Tambah Data Anggota</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
    <li class="breadcrumb-item active">tambah data anggota</li>
</ol>
<div class="card-header mb-5">
	
	<form action="" method="post">
	    <div class="form-group">
	        <label class="small mb-1" for="nama_anggota">Nama</label>
	        <input class="form-control" id="nama_anggota" name="nama_anggota" type="text" placeholder="Masukan nama anda"/>
	    </div>
	    <div class="form-group">
	        <label class="small mb-1" for="tempat_lahir">Tempat Lahir</label>
	        <input class="form-control" id="tempat_lahir" name="tempat_lahir" type="text" placeholder="Masukan asal anda"/>
	    </div>
	    <div class="form-group">
	        <label class="small mb-1" for="tgl_lahir">Tanggal Lahir</label>
	        <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
	    </div>
	    <div class="form-group">
	        <label class="small mb-1" for="jk">Jenis Kelamin</label>
	        <div class="custom-control custom-radio">
	          <input type="radio" id="customRadio1" name="jk" value="L" class="custom-control-input">
	          <label class="custom-control-label" for="customRadio1">Laki-Laki</label>
	        </div>
	        <div class="custom-control custom-radio">
	          <input type="radio" id="customRadio2" name="jk" class="custom-control-input" value="P">
	          <label class="custom-control-label" for="customRadio2">Perempuan</label>
	        </div>
	    </div>
	    <div class="form-group">
	        <label class="small mb-1" for="nickname">Nick Name</label>
	        <input class="form-control" id="nickname" name="nickname" type="text" placeholder="Masukan nickname game anda"/>
	    </div>
	    <div class="form-group">
	        <label class="small mb-1" for="uid_game">UID</label>
	        <input class="form-control" id="uid_game" name="uid_game" type="text" placeholder="Masukan uid game anda"/>
	    </div>
	    <div class="form-group">
	        <label class="small mb-1" for="genkichi">Genkichi</label>
	        <select name="genkichi" id="genkichi" class="form-control">
	            <option value="">-- Pilih Genkichi --</option>
	            <option value="genkichi1">Genkichi 1</option>
	            <option value="genkichi2">Genkichi 2</option>
	            <option value="genkichi3">Genkichi 3</option>
	            <option value="genkichi4">Genkichi 4</option>
	        </select>
	    </div>
	    <div class="form-group">
	    	<button type="submit" class="btn btn-primary" name="tambah">Tambah Data</button>
	    </div>
	</form>
</div>
