<?php
$connect=mysqli_connect("localhost","root","","ajax");

$userId = $_POST['userId'];
$delete ="DELETE FROM ajax_crud WHERE id=$userId";
$query=mysqli_query($connect,$delete);

?>