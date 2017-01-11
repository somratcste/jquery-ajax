<?php include_once('../connection.php'); ?>
<?php 
	if($_SERVER["REQUEST_METHOD"]=="POST") {
		$content = $_POST['content'];
		$contentID = $_POST['contentID'];

		if($contentID != ''){
			$statement = $db->prepare("UPDATE autosave SET content=? WHERE contentID=?");
			$statement->execute(array($contentID));
		} else {
			$statement = $db->prepare("INSERT INTO autosave (content , status) VALUES (?,?)");
       		$statement->execute(array($content,"draft"));
		}
		
	}
?>