<?php
include("db.php");

$result = mysqli_query($conn,"SELECT * FROM notes");
?>

<!DOCTYPE html>
<html>
<head>
<title>View Notes</title>

<style>
body{
    font-family:Arial,sans-serif;
    background:#f4f6f9;
    padding:40px;
}

h2{
    color:#333;
}

table{
    width:90%;
    border-collapse:collapse;
    background:white;
}

th{
    background:#007bff;
    color:white;
    padding:15px;
}

td{
    padding:15px;
    border-bottom:1px solid #ddd;
    text-align:center;
}

tr:hover{
    background:#f5f5f5;
}

a{
    text-decoration:none;
    color:#007bff;
    font-weight:bold;
}
.back-btn{
    background:#28a745;
    color:white;
    padding:10px 18px;
    border-radius:5px;
    text-decoration:none;
    font-size:16px;
}

.back-btn:hover{
    background:#218838;
}
</style>

</head>

<body>

<h2>📚 Uploaded Notes</h2>
<a href="dashboard.php" class="back-btn">
🏠 Back to Dashboard
</a>
<br><br>

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>File Name</th>
<th>Open</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['Name']; ?></td>

<td><?php echo $row['Email']; ?></td>

<td><?php echo $row['filename']; ?></td>

<td>
<a href="uploads/<?php echo $row['filename']; ?>" target="_blank">
Open PDF
</a>
</td>

</tr>

<?php
}
?>

</table>

</body>
</html>