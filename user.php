<?php 
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$name1=$_POST['name'];
$q="select * from users where name='$name1'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
$mail=$row['email'];
$amount=$row['amount'];
$_SESSION['name']=$name1;

?>
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
	<title><?php echo $name1?></title>
	<link rel="stylesheet" href="button.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <body>
	<ul class="nav-ul" style="height:53px;">
	<a href="index.php">
		<li class="nav-li"><button class="btn"><i class="fa fa-home" style="font-size:24px"></i></button></li>
	</a>
		<li class="nav-li" style="float:right;height:53px;text-align:center;font-size:20px" ><a class="nav-link"><?php echo $name1?></a></li>
	</ul>
	<br><br><br>
    <div class="view"><center>
       <table class="styled-table"><thread>
			<tr class="active-row">
				<th>Name</th>
				<td><?php echo $name1?></td>
			</tr>
			</thread>
			<tr class="active-row">
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<th>Email</th>
				<td><?php echo $mail?></td>
			</tr>
           
           <tr class="active-row">
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<th> Credits</th>
				<td><?php echo $amount?></td>
			</tr>


        </table>
</center>
        </div>
		<br>
        <br><center>
     <div class="buttons">
	<a href="transfer_to.php">
		<button class="glow-on-hover"> Transfer To</button>
	</a>
	</div>
	<br>
	<br>

               
    <div class="buttons">
		<a href="ministatement.php">
		<button class="glow-on-hover">Mini Statement</button>
		</a>
	</div>
               
</center>

    </body>
</html>