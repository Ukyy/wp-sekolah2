<?php
//Menu Admin
add_action('admin_menu','menuCrud');
function menuCrud() {
	add_menu_page(
		__( 'Crud Sekolah' ), 			//page title
		'Crud Sekolah', 				//menu title
		'manage_options', 				//capability
		'menu-crud',					//slug url
		'callbackCrud', 				//callback
		'dashicons-welcome-learn-more', //menu icon
		6 								//posisi menu
	);
}

function callbackCrud() {
	$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
	$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';

	if(!empty($nama) && !empty ($alamat) ) {

	$nama_table = 'sekolah';
	$data = array(
		'nama' => $nama,
		'alamat' => $alamat,
	);

	$insert = insert_data($nama_table,$data);
	}

include TEMP_DIR . 'tampil.php';
}
?>
