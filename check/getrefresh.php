<?php 
include_once('../connection.php'); 
	
$statement = $db->prepare("SELECT * FROM refresh ORDER BY id DESC");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
$body = "";
foreach ($result as $row) {
	$body .=  "<br />".  $row['body'];
}
echo $body ;
?>