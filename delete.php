

 <?php
header('Content-type: text/html; charset=utf-8');

$mesaj = ''; 


if (isset($_POST['id'])) {

$_POST = array_map("strip_tags", $_POST);
$_POST = array_map("trim", $_POST);

if(!isset($eroare)) {
 include 'connection.php';
 $id= $_POST['id'];
 
 try {
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to delete a record
  $dbh->prepare("DELETE FROM liceu WHERE id=?")->execute([$id]);
  
  echo "Record deleted successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$dbh = null;
}
}
                        
?>

