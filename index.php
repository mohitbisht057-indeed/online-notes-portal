<!DOCTYPE html>
<html>
<head>
<title>Notes Portal</title>

<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
}

body{
font-family:'Segoe UI',sans-serif;
min-height:100vh;
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

.navbar{
background:rgba(255,255,255,0.15);
backdrop-filter:blur(15px);
padding:30px;
font-size:50px;
font-weight:bold;
color:white;
box-shadow:0 5px 15px rgba(0,0,0,0.3);
}

.container{
margin-top:100px;
}

.card{
width:75%;
margin:auto;
background:rgba(255,255,255,0.15);
backdrop-filter:blur(20px);
padding:60px;
border-radius:25px;
box-shadow:0 8px 30px rgba(0,0,0,0.3);
}

h1{
color:white;
font-size:55px;
margin-bottom:25px;
}

p{
color:white;
font-size:24px;
line-height:1.8;
margin-bottom:40px;
}

.btn{
display:inline-block;
text-decoration:none;
background:#00c6ff;
color:white;
padding:18px 40px;
font-size:24px;
border-radius:10px;
margin:15px;
transition:.4s;
}

.btn:hover{
background:#0072ff;
transform:translateY(-8px);
box-shadow:0 8px 20px rgba(0,0,0,.4);
}

.footer{
margin-top:40px;
font-size:18px;
color:white;
}
</style>

</head>

<body>

<div class="navbar">
📚 Notes Portal
</div>

<div class="container">

<div class="card">

<h1>Welcome to Notes Portal</h1>

<p>
Notes Portal is a modern web-based platform developed using PHP and MySQL to help students upload, manage and access study materials online. Users can securely register, login, upload PDF notes and view educational resources anytime and anywhere.
</p>

<a href="register.php" class="btn">Register</a>

<a href="login.php" class="btn">Login</a>

<div class="footer">
Developed by Mohit Bisht ❤️
</div>

</div>

</div>

</body>
</html>