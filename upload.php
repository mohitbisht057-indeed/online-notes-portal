<?php
session_start();
include("db.php");

if(isset($_POST['upload']))
{
    $filename = $_FILES['pdf']['name'];
    $tempname = $_FILES['pdf']['tmp_name'];

    move_uploaded_file($tempname, "uploads/".$filename);
    echo $_SESSION['name'];
echo "<br>";
echo $_SESSION['email'];

    $name = $_SESSION['name'];
    $email = $_SESSION['email'];

    $sql = "INSERT INTO notes(filename,Name,Email)
            VALUES('$filename','$name','$email')";

    mysqli_query($conn,$sql);

    header("Location: view.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Upload Notes</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:Arial,sans-serif;
    background:#f4f6f9;
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.container{
    width:600px;
    background:white;
    padding:60px;
    border-radius:15px;
    box-shadow:0 10px 20px rgba(0,0,0,0.15);
    text-align:center;
    position:relative;
}

.back-btn{
    position:absolute;
    top:20px;
    left:20px;
    background:#28a745;
    color:white;
    text-decoration:none;
    padding:10px 18px;
    border-radius:8px;
    font-size:16px;
}

.back-btn:hover{
    background:#218838;
}

h1{
    color:#007bff;
    font-size:50px;
    margin-bottom:20px;
}

p{
    color:#666;
    font-size:22px;
    margin-bottom:35px;
}

input[type=file]{
    width:100%;
    padding:15px;
    border:1px solid #ccc;
    border-radius:10px;
    margin-bottom:30px;
    font-size:16px;
}

input[type=submit]{
    background:#007bff;
    color:white;
    border:none;
    padding:15px 40px;
    border-radius:10px;
    font-size:20px;
    cursor:pointer;
}

input[type=submit]:hover{
    background:#0056b3;
}

</style>

</head>
<body>

<div class="container">

<a href="dashboard.php" class="back-btn">
⬅ Back
</a>

<h1>📚 Upload Notes</h1>

<p>
Upload your PDF notes and access them anytime.
</p>

<form method="POST" enctype="multipart/form-data">

<input type="file" name="pdf" required>

<input type="submit" name="upload" value="Upload">

</form>

</div>

</body>
</html>