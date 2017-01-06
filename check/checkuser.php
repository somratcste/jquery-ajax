<?php include_once('../connection.php'); ?>
<?php 
	if($_SERVER["REQUEST_METHOD"]=="POST") {
		$username = $_POST['username'];

		$statement = $db->prepare("SELECT * FROM users WHERE username = ?");
		$statement->execute(array($username));
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);

		if($username == ""){
			echo "Please Enter your User Name";
		} elseif ($result) {
			echo "Username " . $username . " not Available";
		} else {
			echo "Available User Name" ;
		}
	}
?>