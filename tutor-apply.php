<?php

//To Handle Session Variables on This Page
session_start();


//Including Database Connection From db.php file to avoid rewriting in all files
require_once("db.php");

//if user Actually clicked Add Post Button
if(isset($_POST)) {

	// New way using prepared statements. This is safe from SQL INJECTION. Should consider to update to this method when many people are using this method.



	$stmt = $conn->prepare("INSERT INTO tutor(name, subject, email, mobile, location, qual) VALUES (?,?, ?, ?, ?, ?)");

	$stmt->bind_param("ssssss",$name, $subject,$email,$number, $location, $qualification);
    $name = mysqli_real_escape_string($conn, $_POST['Name']);
	$subject = mysqli_real_escape_string($conn, $_POST['subject']);
	$email = mysqli_real_escape_string($conn, $_POST['inputEmail4']);
	$number = mysqli_real_escape_string($conn, $_POST['number']);
	$location = mysqli_real_escape_string($conn, $_POST['location']);
	$qualification = mysqli_real_escape_string($conn, $_POST['qualification']);
	


	if($stmt->execute()) {
		//If data Inserted successfully then redirect to dashboard
		$_SESSION['jobPostSuccess'] = true;
		echo "<script>";
		echo "alert('Thank You !! We will Get back to you soon.');";
		echo "window.location = 'index.php';"; // redirect with javascript, after page loads
		echo "</script>";
		exit();
	} else {
		//If data failed to insert then show that error. Note: This condition should not come unless we as a developer make mistake or someone tries to hack their way in and mess up :D
		echo "Error ";
	}

	$stmt->close();

	
	$conn->close();

} else {
	//redirect them back to dashboard page if they didn't click Add Post button
	header("Location: create-job-post.php");
	exit();
}