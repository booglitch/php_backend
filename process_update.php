<?php
$conn = mysqli_connect('localhost', 'root', '1234', 'opentutorials');


settype($_POST['id'], 'integer');
$filtered = array(
	'id' => mysqli_real_escape_string($conn, $_POST['id']),
	'title'=>mysqli_real_escape_string($conn, $_POST['title']),
	'description'=>mysqli_real_escape_string($conn, $_POST['description'])

);


$sql = "UPDATE topic SET title = '{$filtered['title']}',
		         description = '{$filtered['description']}'
			WHERE
			 id = {$filtered['id']}
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
