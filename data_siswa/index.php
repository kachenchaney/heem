<!DOCTYPE html>
<html>
<?php
$koneksi = new mysqli ("localhost","root","","data_siswa");
?>

<head>
	<title>APLIKASI CRUD</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>

	<div class="container">
		<div class="col-lg-12">
			<div class="page-header">
				<br>
				<br>
				<h2>CRUD DATA SISWA
					<a href="add.php" class="btn btn-success">Tambah Data</a>
				</h2>
			</div>
			<br>
			<div>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>NO</th>
							<th>NIS</th>
							<th>NAMA SISWA</th>
							<th>JENIS KELAMIN</th>
							<th>JURUSAN</th>
							<th>FOTO</th>
							<th>AKSI</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$sql_tampil = "SELECT * FROM tb_siswa";
							$query_tampil = mysqli_query($koneksi, $sql_tampil);
							$no=1;
							while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
						?>
						<tr>
							<td>
								<?php echo $no; ?>
							</td>
							<td>
								<?php echo $data['nis']; ?>
							</td>
							<td>
								<?php echo $data['nama']; ?>
							</td>
							<td>
								<?php echo $data['jekel']; ?>
							</td>
							<td>
								<?php echo $data['jurusan']; ?>
							</td>
							<td>
								<img src="foto/<?php echo $data['foto']; ?>" width="70px" />
							</td>


							<td>
								<a href="edit.php?kode=<?php echo $data['nis']; ?>" class='btn btn-warning btn-sm'>Ubah</a>
								<a href="del.php?kode=<?php echo $data['nis']; ?>" onclick="return confirm('Hapus Data Ini ?')"
								 class='btn btn-danger btn-sm'>Hapus</a>
							</td>
						</tr>
						<?php
							$no++;
							}
						?>
					</tbody>
				</table>

			</div>
		</div>
	</div>

</body>

</html>
<!-- Elseif Channel -->