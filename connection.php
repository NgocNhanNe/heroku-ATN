<?php
// $conn = mysqli_connect('localhost','root','','decora_shopping')
// or die("Can not connect database".mysqli_connect_error());
$conn = pg_connect("postgres://ipijbtzcoqlnuk:a86c62292c911fd8455bbc40b47269efb24c3ff0d80eb61f1854c8960f724f37@ec2-34-226-18-183.compute-1.amazonaws.com:5432/db5qtgu9v7l9bv");

	if(!$conn)
	{
		die("Could not connect to database");
	}
?>