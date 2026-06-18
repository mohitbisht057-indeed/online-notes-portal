<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
session_start();

if(!isset($_SESSION['user']))
{
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Notes Portal Dashboard</title>

<style>

body{
    font-family:Arial,sans-serif;
    min-height:100vh;
    margin:0;
    text-align:center;
    background:linear-gradient(-45deg,#0f2027,#203a43,#2c5364,#6a11cb,#2575fc);
    background-size:400% 400%;
    animation:bg 12s ease infinite;
}

@keyframes bg{
0%{background-position:0% 50%;}
50%{background-position:100% 50%;}
100%{background-position:0% 50%;}
}

.back{
position:absolute;
top:20px;
left:20px;
}

.back a{
color:white;
text-decoration:none;
font-size:20px;
font-weight:bold;
}

.navbar{
background:rgba(255,255,255,0.15);
backdrop-filter:blur(10px);
padding:25px;
font-size:35px;
font-weight:bold;
color:white;
}

.container{
margin-top:70px;
}

.card{
background:rgba(255,255,255,0.95);
width:75%;
margin:auto;
padding:40px;
border-radius:20px;
box-shadow:0 8px 25px rgba(0,0,0,0.3);
}

.btn{
display:inline-block;
text-decoration:none;
background:#007bff;
color:white;
padding:15px 30px;
border-radius:8px;
margin:10px;
font-size:20px;
transition:0.3s;
}

.btn:hover{
background:#0056b3;
transform:scale(1.05);
}

</style>

</head>

<body>
<div style="position:absolute; top:20px; left:20px; z-index:999;">
    <a href="login.php" style="color:white; text-decoration:none; font-size:22px;">
        ← Back
    </a>
</div>

<div class="navbar">
    📚 Notes Portal
</div>

<div class="container">

<div class="card">

<h2>WELCOME TO NOTES PORTAL</h2>

<p>
Notes Portal is a modern web-based platform developed using PHP and MySQL
to help students manage their study materials efficiently.
The system provides secure user authentication, note uploading,
PDF viewing and easy access to educational resources.
Students can store and organize their notes online and access them anytime, anywhere.
</p>

<p>
The main objective of this project is to create a centralized platform
for academic content management and improve the overall study experience.
</p>

<a href="upload.php" class="btn">Upload Notes</a>

<a href="view.php" class="btn">View Notes</a>

<a href="logout.php" class="btn">Logout</a>

</div>

</div>

</body>
</html>