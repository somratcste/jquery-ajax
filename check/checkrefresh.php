<?php include_once('../connection.php'); ?>
<?php 
	if($_SERVER["REQUEST_METHOD"]=="POST") {
		$body = $_POST['body'];

		$statement = $db->prepare("INSERT INTO refresh (body) VALUES (?)");
        $statement->execute(array($body));
		
	}
?>