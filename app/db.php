<?php 
	
	$fname = '';
	$lname = '';
	$cell = '';


	$conn = new PDO('mysql:host=localhost;dbname=pdo', 'root', '' );

	if ($conn) {
		echo "connected";
	}

	$sql = "INSERT INTO users (fname, lname, cell) VALUES (:fname, :lname, :cell)";
	$stmt = $conn ->prepare($sql);
	$stmt -> execute([
		
		':fname' => $fname,
		':lname' => $fname,
		':cell' => $fname,


	]);




 ?>