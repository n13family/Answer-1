<?php
include('config.php');
if(isset($_POST['id'])){
	$id = $_POST['id'];
	$query = "SELECT * from `candidates` WHERE id = '$id'";
	$result = mysqli_query($connection, $query);
	$data = mysqli_fetch_array($result);

	$voted = $data[2];

	$voc = $voted + 1;
	$query2 = "UPDATE candidates SET earned_vote=$voc WHERE id=$id";
	$update = mysqli_query($connection, $query2);

	if($update){
		die("{\"status\":0, \"msg\":".$voc."}");
	} else {
		("{\"status\":-1, \"msg\":\"".mysqli_error($connection)."\"}");
	}
} else {
	header('Location: /');
}