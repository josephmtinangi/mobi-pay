<?php

require __DIR__.'/bootstrap/app.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$phone_number = $_POST['phone_number'];
	$password = sha1($_POST['password']);

	$sql = "SELECT * FROM users WHERE phone_number = :phone_number AND password = :password;";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':phone_number', $phone_number);
	$stmt->bindParam(':password', $password);
	$stmt->execute();

	if($stmt->rowCount() != 1) {
		$errors = ['Invalid phone number or password'];
		$_SESSION['errors'] = $errors;
		header("Location: login.php");
	}

	$_SESSION['user'] = $stmt->fetch(PDO::FETCH_ASSOC);
	header("Location: home.php");
}

include "templates/header.php";
include "login.view.php";
include "templates/footer.php";
