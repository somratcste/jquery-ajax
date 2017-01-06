<?php 
include_once('../connection.php'); 
if($_SERVER["REQUEST_METHOD"]=="POST") {
	$skill = $_POST['skill'];

	$statement = $db->prepare("SELECT * FROM skills WHERE skill LIKE '%$skill%' ");
	$statement->execute();
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);
	$suggestSkill = "";
	if($result){
		foreach ($result as $row) {
			$suggestSkill .= " " . $row['skill'];
		}
	} else {
		$suggestSkill = "No result Found" ;
	}
	echo $suggestSkill ; 
}
?>