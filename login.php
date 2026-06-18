<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

session_start();
include("db.php");

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users
            WHERE email='$email'
            AND password='$password'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0)
    {
        $row = mysqli_fetch_assoc($result);

        $_SESSION['user'] = $email;
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];

        header("Location: dashboard.php");
        exit();
    }
    else
    {
        $error = "❌ Incorrect Email or Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

body{
font-family:'Segoe UI',sans-serif;
display:flex;
justify-content:center;
align-items:center;
height:100vh;

background:linear-gradient(-45deg,#0f2027,#203a43,#2c5364,#6a11cb,#2575fc);
background-size:400% 400%;
animation:bg 12s ease infinite;
}

@keyframes bg{
0%{background-position:0% 50%;}
50%{background-position:100% 50%;}
100%{background-position:0% 50%;}
}

.container{
width:420px;
padding:50px;
text-align:center;

background:rgba(255,255,255,0.15);
backdrop-filter:blur(20px);

border-radius:20px;

box-shadow:0px 8px 30px rgba(0,0,0,0.3);
}

h2{
color:white;
font-size:45px;
margin-bottom:15px;
}

p{
color:white;
font-size:18px;
margin-bottom:25px;
line-height:1.5;
}

input{
width:100%;
padding:15px;
margin:12px 0;
border:none;
border-radius:10px;
font-size:16px;
}

input[type=submit]{
background:#00c6ff;
color:white;
font-size:20px;
cursor:pointer;
transition:0.3s;
}

input[type=submit]:hover{
background:#0072ff;
transform:scale(1.05);
}

.error{
color:#ff4d4d;
font-size:18px;
margin-bottom:15px;
font-weight:bold;
}

a{
color:white;
text-decoration:none;
font-size:17px;
}

a:hover{
text-decoration:underline;
}

.back{
position:absolute;
top:20px;
left:20px;
}

</style>

</head>
<body>

<div class="back">
<a href="index.php">← Back</a>
</div>

<div class="container">

<h2>🔐 Login</h2>

<p>
Access your study notes securely anytime and anywhere.
</p>

<?php
if(isset($error))
{
echo "<div class='error'>$error</div>";
}
?>

<form method="POST">

<input type="email"
name="email"
placeholder="Enter Email"
required>

<input type="password"
name="password"
placeholder="Enter Password"
required>

<input type="submit"
name="login"
value="Login">

</form>

<br>

<a href="register.php">
Create New Account
</a>

</div>

</body>
</html>