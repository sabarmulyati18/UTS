<?php
include_once 'admin.php';
include_once 'dbconfig.php';
	$id = $_GET['delete_id'];
	$crud->delete($id);
	header("Location: index.php?dihapus");
?>
