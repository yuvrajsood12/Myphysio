<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "myphysio";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
if(isset($_POST['submit']))
{
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $phone = $_POST['phone'];
	 $message = $_POST['message'];
	 $sql = "INSERT INTO contact (name,email,phone,message)
	 VALUES ('$name','$email','$phone','$message')";
	 if (mysqli_query($conn, $sql)) {
		//echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light static-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.png" alt="..." style="width:70px;height:40px;margin-top:-10px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 40%;">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php" style="margin-left: 90px;">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php" style="margin-left:15px;">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php" style="margin-left:15px;">TREATMENTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php" style="margin-left:15px;">BOOK AN APPOINTMENT</a>
                    </li>
            </div>
        </div>
    </nav>
    <img src="images/251-2519949_thankyou-thank-you.jpg" alt="thank you" style="width: 50%;margin-left: 25%;margin-top: -10px;">
    <h2 style="text-align: center;font-size:45px;">THANK YOU FOR CONTACTING US</h2>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);margin-top:180px;">
        © 2022 Copyright:
        <a class="text-reset fw-bold" href="index.php">MyPhysio.com</a>
    </div>
</body>
</html>
