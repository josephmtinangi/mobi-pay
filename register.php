<?php

require __DIR__.'/bootstrap/app.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$phone_number = $_POST['phone_number'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

	// validate phone number
	function checkPhoneNumber($conn, $phone_number) {
		$sql = "SELECT phone_number FROM users WHERE phone_number = :phone_number";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':phone_number', $phone_number);
		$stmt->execute();

		$stmt->fetchAll();

		return $stmt->rowCount() == 1;
	}

	if (checkPhoneNumber($conn, $phone_number)) {

		$errors = [
			'That phone number is already taken.',
		];

		$_SESSION['errors'] = $errors;

		header("Location: register.php");
	}

	$sql = "INSERT INTO users (first_name, last_name, phone_number, password) VALUES (:first_name, :last_name, :phone_number, :password)";

	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':first_name', $first_name);
	$stmt->bindParam(':last_name', $last_name);
	$stmt->bindParam(':phone_number', $phone_number);
	$stmt->bindParam(':password', $password);

	if( ! $stmt->execute()) {
		echo $stmt->errorCode();die();
	}else{

		$sql = "SELECT * FROM users WHERE phone_number = :phone_number";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':phone_number', $phone_number);
		$stmt->execute();

		$_SESSION['user'] = $stmt->fetch(PDO::FETCH_ASSOC);

		header('Location: home.php');
	}
}

include "templates/header.php";
include "register.view.php";
include "templates/footer.php";
