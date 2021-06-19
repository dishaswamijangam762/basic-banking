<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$q="select *from mini_statement";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="index.php" class="w3-bar-item w3-button">HOME</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="getdetail.php" class="w3-bar-item w3-button">VIEW USERS</a>
      <a href="transfer.php" class="w3-bar-item w3-button">CREDIT TRANSFER</a>
      <a href="transaction.php" class="w3-bar-item w3-button">ALL TRANSACTION</a>
    </div>
  </div>
</div>
		<title>Transaction</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="button.css">
<style>

		}table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:4px solid gray;
			border-collapse:collapse;
			}
		body{
		background-image:url("images/12.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:4px solid gray;
			border-collapse:collapse;
			}
.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
</style>
	</head>
	<body><center>
		<ul class="nav-ul">
	<a href="index.php">
		<li class="nav-li"><button class="btn"><i class="fa fa-home"></i></button></li>
	</a>
	</ul><br><br><br><br><br><br>
		
		<table class="styled-table">
  <thead>
			<tr class="active-row">
				<th>Sender</th>
				<th>receiver</th>
				<th>Amount</th>
			</tr>
  </thead>
			<tr class="active-row">
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr class="active-row">
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["receiver"]; ?></td>
				<td><?php echo $row["amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<br>
		<form action="index.php" method="post">
			<div class="buttons">
				<button class="glow-on-hover" type="submit" name="name">BACK</button>
			</div>
		</form>
		</center>
	</body>
</html>