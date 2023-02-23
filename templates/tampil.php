<style>
	table.table th, table.table td {
		border: 1px solid;
	}

</style>

<h2>Menu Crud</h2>

http://localhost:8080/wordpress/wp-admin//admin.php?page=menu-crud&act=edit&id=8


<?php

	$act = isset($_GET['act'] ) ? $_GET['act']: '';
	$nis = isset($_GET['nis'] ) ? $_GET['nis']: '';

	if ($act == 'edit') {
		
		//$get_row_data = 
		$andWhere = " AND nis='".$nis."'";
		$nama_table = 'sekolah';
		$get_row_data = get_row_data($andWhere);

		echo "<pre>";
		print_r($get_row_data);
		echo "</pre>";
	}
?>

<form action="" method="POST">
	<div class="form-group">
		<label>Nama</label>
		<input type="text" name="nama" placeholder="Masukan Nama">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" name="alamat" placeholder="Masukan Alamat">
	</div>
	<div class="form-group">
		<button type="submit" class="button button-primary">Simpan</button>
	</div>
</form>

<table class="table" border="1" width="100%">
	<tr>
		<th>Nis</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Aksi</th>
	</tr>
	<?php
	$no = 1;
	$tampil_data = tampilData( 'sekolah');
	foreach($tampil_data as $data):
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $data->nama; ?></td>
		<td><?php echo $data->alamat; ?></td>
		<td>
			<a class="link button button-primary" href="<?= admin_url(). '/admin.php?page=menu-crud&act=edit&id='.$data->nis ;?>">Edit</a>
			||
			<a class="link button button-primary" href="#">Hapus</a>
		</td>
	</tr>

	<?php endforeach ?>

</table>