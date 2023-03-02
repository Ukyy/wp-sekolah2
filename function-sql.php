<?php
// Tampil Data
function tampilData( $nama_table, $andWhere="" ) {

	global $wpdb;
	$table_name = $wpdb->prefix.$nama_table;
	$sql = " SELECT * FROM " . $table_name .  " WHERE 1 ". $andWhere;
	$query = $wpdb->get_results($sql);

	return $query;
}

//insert data
function insert_data($nama_table,$data=array()) {
	
	global $wpdb;
	$table = $wpdb->prefix. $nama_table;
	$wpdb->insert($table,$data);
	$id_insert = $wpdb->id_insert;
	
	return $id_insert;
}

//get row data
function get_row_data($nama_table,$andWhere) {

	global $wpdb;
	$table = $wpdb->prefix.$nama_table;
	$sql = "SELECT * FROM ".$table." WHERE id=$andWhere";
	$row = $wpdb->get_row( $sql );

	return $row;
}

//hapus data
function delete_data($nama_table,$id){
	global $wpdb;
	$table = $wpdb->prefix.$nama_table;
	$delete = $wpdb->delete( $table, array( 'id' => $id ) );

	return $delete;
}


//update database
function update_data($nama_table,$data=array(),$where=array()){
	global $wpdb;

	$table = $wpdb->prefix.$nama_table;

	$update = $wpdb->update($table, $data, $where);

	return $update;
}
?>