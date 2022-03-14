<?php $con = mysqli_connect('localhost','root','root');
    mysqli_select_db('iMM_Data', $con);
    $query = "SELECT * FROM $User";
	$result = mysqli_query($query);
?>