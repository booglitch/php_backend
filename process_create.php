<?php
$conn = mysqli_connect('localhost', 'root', '1234', 'opentutorials');

//print_r($_POST);
$filtered = array(
	'title'=>mysqli_real_escape_string($conn, $_POST['title']),
	'description'=>mysqli_real_escape_string($conn, $_POST['description']),
	'author_id'=>mysqli_real_escape_string($conn, $_POST['author_id'])

);


$sql = "INSERT INTO topic 
	(title, description, created, author_id) 
	VALUES(
		'{$filtered['title']}',
		'{$filtered['description']}', 
		NOW(),
		{$filtered['author_id']}
	)
";

$result = mysqli_query($conn, $sql);
if($result === false){
	echo 'error';
	error_log(mysqli_error($conn));
}else{
	echo 'success query <a href="index.php">back_to_index_page</a>';
}

echo $sql;
?>
