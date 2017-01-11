<?php include_once('../connection.php'); ?>
<?php 
	if($_SERVER["REQUEST_METHOD"]=="POST") {
		$content = $_POST['content'];
		$contentID = $_POST['contentID'];

		if($contentID != ''){
			$statement = $db->prepare("UPDATE autosave SET content=? WHERE contentID=?");
			$statement->execute(array($content , $contentID));
		} else {
			$statement = $db->prepare("INSERT INTO autosave (content , status) VALUES (?,?)");
       		$statement->execute(array($content,"draft"));
       		$statement = $db->prepare("SELECT `auto_increment` FROM INFORMATION_SCHEMA.TABLES WHERE table_name = 'autosave'");
			$statement->execute(array());
			$lastID = $statement->fetch()["auto_increment"];
			$lastID = $lastID - 1 ;
			echo $lastID ; 
			exit() ;
		}
		
	}
?>