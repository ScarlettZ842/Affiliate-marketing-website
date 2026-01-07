<?php

$conn = mysqli_connect("db","root","root","electronix");

if(mysqli_connect_errno()){
	
	echo"Failed to connect : " . mysqli_connect_error(); 
	
}

