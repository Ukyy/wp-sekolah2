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
	$my_id = $wpdb->insert_id;
	
	return $insert_id;
}

//get row data
function get_row_data($nama_table,  $andWhere="") {

	global $wpdb;
	$table = $wpdb->prefix.$nama_table;
	$sql = "SELECT * FROM ".$table." WHERE nis".$andWhere;
	$row = $wpdb->get_row( $sql );

	return $row;
}
?>