<?php
$conn = mysqli_connect('localhost', 'root', '1234', 'opentutorials');

$filtered = array(
	'name'=>mysqli_real_escape_string($conn, $_POST['name']),
	'profile'=>mysqli_real_escape_string($conn, $_POST['profile'])

);


$sql = "INSERT INTO author
	(name, profile)
	VALUES(
	  '{$filtered['name']}',
	  '{$filtered['profile']}'
	)";

$result = mysqli_query($conn, $sql);
if($result === false){
	echo 'error';
	error_log(mysqli_error($conn));
}else{
	header('Location: author.php'); //Redirection to author.php page
}

?>
