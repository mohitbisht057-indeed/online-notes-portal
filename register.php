<?php
include("db.php");

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(name,email,password)
            VALUES('$name','$email','$password')";

    mysqli_query($conn,$sql);

  header("Location: login.php");
exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title> register</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:'Segoe UI',sans-serif;
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;

    background:linear-gradient(-45deg,#0f2027,#203a43,#2c5364,#6a11cb,#2575fc);
    background-size:400% 400%;
    animation:bg 12s ease infinite;
}

@keyframes bg{
    0%{background-position:0% 50%;}
    50%{background-position:100% 50%;}
    100%{background-position:0% 50%;}
}

.card{
    width:550px;
    background:rgba(255,255,255,0.15);
    backdrop-filter:blur(15px);
    border-radius:20px;
    padding:40px;
    text-align:center;
    box-shadow:0 8px 30px rgba(0,0,0,0.3);
}

h1{
    color:white;
    margin-bottom:15px;
}

p{
    color:white;
    line-height:1.6;
    margin-bottom:25px;
}

input[type=file]{
    width:100%;
    padding:12px;
    background:white;
    border:none;
    border-radius:8px;
    margin:20px 0;
}

input[type=submit]{
    background:#00c6ff;
    color:white;
    border:none;
    padding:12px 30px;
    border-radius:8px;
    cursor:pointer;
    font-size:18px;
    transition:0.3s;
}

input[type=submit]:hover{
    background:#0072ff;
    transform:scale(1.05);
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
</style>

</head>

<body>
    <div class="back">
<a href="login.php">← Back</a>
</div>

<div class="card">

<h1>👤 Create Account</h1>

<p>
Create your Notes Portal account and access study notes anytime.
</p>

<form method="POST">

<input type="text" name="name" placeholder="Enter Name" required>

<br><br>

<input type="email" name="email" placeholder="Enter Email" required>

<br><br>

<input type="password" name="password" placeholder="Enter Password" required>

<br><br>

<input type="submit" name="submit" value="Register">

</form>
</div>

</body>
</html>

