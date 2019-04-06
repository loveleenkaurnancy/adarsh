<?php

// $con = mysqli_connect("www.kitkatstudio.com", "adarsheye", "adarsheye", "adarsheye");
$con = mysqli_connect("localhost", "root", "", "adarsh");

if(!$con)
{
	echo mysqli_error($con);
}
?>