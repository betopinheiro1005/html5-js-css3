<?php

	echo "<h1>Dados coletados</h1>";

	if($_POST["secretKey"]){
		$secretKey = $_POST["secretKey"];
		echo "<p>Secret key: $secretKey</p>";
	} else {
		echo "<p>secretKey não recebido</p>";
	}
	
	if($_POST["password"]){
		$password = $_POST["password"];
		echo "<p>Password: $password</p>";
	} else {
		echo "<p>password não recebido</p>";
	}
	
	if($_POST["firstName"]){
		$firstName = $_POST["firstName"];
		echo "<p>First name: $firstName</p>";
	} else {
		echo "<p>firstName não recebido</p>";
	}

	if($_POST["lastName"]){
		$lastName = $_POST["lastName"];
		echo "<p>Last name: $lastName</p>";
	} else {
		echo "<p>lastName não recebido</p>";
	}

	if($_POST["favouriteWebsite"]){
		$favouriteWebsite = $_POST["favouriteWebsite"];
		echo "<p>Favourite website: $favouriteWebsite</p>";
	} else {
		echo "<p>favouriteWebsite não recebido</p>";
	}

	if($_POST["age"]){
		$age = $_POST["age"];
		echo "<p>Age: $age anos</p>";
	} else {
		echo "<p>age não recebido</p>";
	}

	if($_POST["experience"]){
		$experience = $_POST["experience"];
		echo "<p>Experience: $experience</p>";
	} else {
		echo "<p>experience não recebido</p>";
	}

	if($_POST["recommend"]){
		$recommend = $_POST["recommend"];
		echo "<p>Recommend: $recommend</p>";
	} else {
		echo "<p>recommend não recebido</p>";
	}

	if($_POST["otherComments"]){
		$otherComments = $_POST["otherComments"];
		echo "<p>Other comments: $otherComments</p>";
	} else {
		echo "<p>otherComments não recebido</p>";
	}

	if($_POST["email"]){
		$email = $_POST["email"];
		echo "<p>Email: $email</p>";
	} else {
		echo "<p>email não recebido</p>";
	}

?>