<?php
	include("configuration.php");
	if(isset($_GET['cid']) && !empty($_GET['cid'])){
		$query="DELETE FROM location where id='".$_GET['cid']."'";
		$result= mysqli_query($link,$query);
		if($result){
			$msg="Data deleted successfully";
			header("Location:index.php?msg=".$msg);
		}
	}
?>
