<?php
ob_start(); //Turns on output buffering
session_start();

date_default_timezone_set('Asia/Manila');

$con = mysqli_connect("localhost", "root", "jl04232001", "reservationsystem1"); //Connection variable

if (mysqli_connect_errno()) {
	echo "Failed to connect: " . mysqli_connect_errno();
}