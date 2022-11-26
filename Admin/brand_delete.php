<?php
	// Getting photo ID to unlink from folder
	$statement = $pdo->prepare("SELECT * FROM sanpham WHERE MASP=?");
	$statement->execute(array($_REQUEST['id']));
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
	foreach ($result as $row) {
		$p_featured_photo = $row['URL_IMAGE'];
		unlink('../Asset/DB-Picture/'.$p_featured_photo);
	}


	// Delete from tbl_photo
	$statement = $pdo->prepare("DELETE FROM sanpham WHERE MASP=?");
	$statement->execute(array($_REQUEST['id']));

	
	header('location: view_brands.php');
?>