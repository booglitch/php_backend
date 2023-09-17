<?php
$conn = mysqli_connect('localhost', 'root', '1234', 'opentutorials');

$sql = "INSERT INTO topic (title, description, created) VALUES('{$_POST['title']}','{$_POST['description']}',NOW())";

$result = mysqli_query($conn, $sql);
if($result === false){
	echo 'error';
	error_log(mysqli_error($conn));
}else{
	echo 'success query <a href="index.php">back_to_index_page</a>';
}

echo $sql;
?>
