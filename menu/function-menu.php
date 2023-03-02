<?php
//Menu Admin
add_action('admin_menu','menuCrud');
function menuCrud() {
	add_menu_page(
		'Crud Sekolah', 				//page title
		'Crud Sekolah', 				//menu title
		'manage_options', 				//capability
		'menu-crud',					//slug url
		'callbackCrud', 				//callback
		'dashicons-welcome-learn-more', //menu icon
		6 								//posisi menu
	);
}

function callbackCrud() {
		//Ambil Data Get Url ketika edit 
		$act = isset($_GET['act']) ? $_GET['act'] : '';
		$id = isset($_GET['id']) ? $_GET['id'] : '';

		//form submit
		$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
		$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';

		if(!empty($nama) && !empty ($alamat) ) {

		$nama_table = 'sekolah';
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
		);

		if( $act == 'edit') {
			//update data
			$where = array( 'id' => $id);
			$update = update_data($nama_table,$data,$where);

		if ($update) {
			//alihkan kehalaman
			$url_redirect = admin_url().'admin.php?page=menu-crud';
			wp_redirect($url_redirect);
			exit;
		}
	
		}else{
			//insert data
			$insert = insert_data($nama_table,$data);
		}
	}

include TEMP_DIR . 'tampil.php';
}
?>
