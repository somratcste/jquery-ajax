<?php include_once('../connection.php'); ?>
<?php 
	if($_SERVER["REQUEST_METHOD"]=="POST") {
		$search = $_POST['search'];

		$statement = $db->prepare("SELECT * FROM livesearch WHERE username LIKE '%$search%' ");
		$statement->execute();		
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);

		$data = "";
		$data .= "<table>
				  <tr>
					<th>Id</th>
					<th>UserName</th>
					<th>Name</th>
					<th>Email</th>
				 </tr>
				 </table>"; 

		if($result){
			foreach($result as $row) {
				$data .= "<table>
						  <tr>
							<td>".$row['id']."</td>
							<td>".$row['username']."</td>
							<td>".$row['name']."</td>
							<td>".$row['email']."</td>
						  </tr>
						  </table>" ;
			}
			echo $data ;
		}  else {
			echo "Data Doesn't Match." ;
		}
	}
?>