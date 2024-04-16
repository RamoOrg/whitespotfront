<?php
include '../config/configDB.php';
include '../config/configURL.php';
include '../layout/header.php';

if(empty($_GET) && $_GET['id'] == '') {
	header('Location:view_index.php');
}

$id = $_GET['id'];

$sql='DELETE FROM contact WHERE id = '.$id;
$result=$conn->query($sql);
	$_SESSION['msg_type']='success';
	$_SESSION['msg']='data delected successfully';
	header('Location:view_index.php');

if($result) {
	header('Location:view_index.php');
}


?>
