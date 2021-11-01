<?php 
	include '../../db.php';

	$list = mysqli_query($koneksi, "SELECT * FROM konfirmasi INNER JOIN register ON konfirmasi.id_user = register.id_user ");
	$no=1;

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Laporan Penabung</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="listpenabung.css">
</head>
<body>

   <?php include '../navbar/nav.php'; ?>

    <header>
		<h1>Laporan Penabung</h1>
	</header>
	<main>
		<table>
			<thead>
				<tr>
					<th>No.</th>
					<th>Nama</th>
					<th>NIS</th>
					<th>Pesan</th>
					<th>Konfirmasi</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<?php 	foreach ($list as $key): ?>
					<td><?php echo $no++; ?></td>
					<td><?php echo $key['nama']; ?></td>
					<td><?php echo $key['nis']; ?></td>
					<td><?php echo $key['pesan']; ?></td>
					<td>
						<button class="btn btn-dark border border-2 border-danger text-danger" type="submit" value="<?php echo $key["id_konfirmasi"]; ?>">✓</button>
					</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>

</body>
</html>
 
 
<!-- <body>
	<?php include '../navbar/nav.php'; ?> -->
    


<!-- 

	<div>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>No.</th>
					<th>Nama</th>
					<th>Nis</th>
					<th>Pesan</th>
					<th>Konfirm</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($list as $key ): ?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $key["nama"] ?></td>
						<td><?php echo $key["nis"] ?></td>
						<td>
							<p><?php echo $key["pesan"] ?></p>
						</td>
						<td>
							<button class="btn btn-dark border border-2 border-danger text-danger" type="submit" value="<?php echo $key["id_konfirmasi"]; ?>">Konfirmasi</button>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
	
	
</body> -->