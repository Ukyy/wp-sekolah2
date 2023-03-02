<style>
	table.table {
		width: 100%;
	}
	table.table th, table.table td {
		border: 1px solid;
	}
	form.form-group {
		display: block;
	}
	form.form-group {
		margin-bottom: 10px;
	}
	form {
		margin-bottom: 30px;
	}
</style>

<h2>Menu Crud</h2>


<?php
	//Ambil Data Get Url
	$act = isset($_GET['act']) ? $_GET['act'] : '';
	$id = isset($_GET['id']) ? $_GET['id'] : '';

	//Kasih kondisi ketika edit
	if ($act == 'edit') {
		$andWhere = "AND id= '".$id."'";
		$nama_table = 'sekolah';
		$get_row_data = get_row_data($nama_table,$id);

		$id = $get_row_data->id;
		$nama = $get_row_data->nama;
		$alamat = $get_row_data->alamat;

	}else if($act = 'delete'){
		$id = $id;
		$nama_table = 'sekolah';
		$delete = delete_data($nama_table,$id);

	}
?>

<form action="" method="POST">

	<?php 
	/** 
	 * Beri kondisi dan tambah input hidden 
	 **/  
	?>

	<?php if($act == 'edit'): ?>
		<input type="hidden" name="id" value="<?= $id ?>">
	<?php endif; ?>

	<div class="form-group">
		<label>Nama</label>
		<input type="text" name="nama" placeholder="Masukan Nama" value="<?= $nama; ?>">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" name="alamat" placeholder="Masukan Alamat" value="<?= $alamat; ?>">
	</div>
	<div class="form-group">
		<button type="submit" class="button button-primary">Simpan</button>
	</div>
</form>

<table class="table" border="1" width="100%" cellpadding="3" cellspacing="0">
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
			<a class="link button button-primary" href="<?= admin_url(). '/admin.php?page=menu-crud&act=edit&id='.$data->id ;?>">Edit</a>
			||
			<a class="link button button-primary" href="<?= admin_url(). '/admin.php?page=menu-crud&act=delete&id='.$data->id ;?>">Hapus</a>
		</td>
	</tr>

	<?php endforeach ?>

</table>