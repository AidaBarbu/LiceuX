<?php
	require_once 'connection.php';
 
	if(ISSET($_POST['save'])){
 
		$clasa = $_POST['clasa'];
		$nume = $_POST['nume'];
		$descriere = $_POST['descriere'];
 
 
		try{
			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO liceu(clasa, nume, descriere)  VALUES ('$clasa', '$nume', '$descriere')";
			$dbh->exec($sql);
		}catch(PDOException $e){
			echo $e->getMessage();
		}
 
		$dbh = null;
 
		header("Location: dateLiceu.php");
 
	}
?>
