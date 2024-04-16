<?php
include '../config/configDB.php';

function getContact() {
	global $conn;

	$sql="SELECT * FROM contact";

$result = $conn->query($sql);

	$i=1;
		$results = array();
	while ($row = mysqli_fetch_object($result)) {
		array_push($results, $row);
	}
	return $results;
}

function getContactUS() {
	global $conn;

	$sql="SELECT * FROM contact_form";

$result = $conn->query($sql);

	$i=1;
		$results = array();
	while ($row = mysqli_fetch_object($result)) {
		array_push($results, $row);
	}
	return $results;
}
