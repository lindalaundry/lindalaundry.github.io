<?php 

$koneksi = new mysqli("localhost", "root", "", "laundry_native");

function query($query) {
	global $koneksi;
	$result = $koneksi->query($query);
	$rows = [];
	while ($row = $result->fetch_assoc()) {
		$rows[] = $row;
	}
	return $rows;
}

?>