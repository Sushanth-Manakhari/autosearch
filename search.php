<?php
require_once('app/connect.php');

if(isset($_GET['action']) && $_GET['action'] == 'go_search'){

$value = $_GET['value'];

echo "<ul>";

$searchQuery = $db->prepare("SELECT name FROM places WHERE name LIKE :val");

$searchQuery->execute(array('val'=>$value.'%'));



while($row = $searchQuery->fetch(PDO::FETCH_ASSOC)){
	$name = $row['name'];

	echo '<li><a href="#">'.$name.'</a></li><hr />';
}

echo "</ul>";		
	
}
?>