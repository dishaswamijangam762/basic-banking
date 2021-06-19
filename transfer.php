<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
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
	<title>Select User</title>
	<link rel="stylesheet" href="button.css">
	<style>
	body{
		text-align:center;
	}
	body{
		background-color: rgb(47,137,158);
		background-image:url("images/12.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size:cover;
		object-fit:cover;

	}
	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
    vertical-align: middle;
	}
	.center{
		display:inline-block;
		 background-color: #009879;;
		padding:50px;
		border:2px ridge red;
border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
	}
	.ho{
		padding-top:50px;
	}
	.butto1{
		background-color:#bebebe;
	}
	.button{
		border-radius:10px;
		border: 1px solid black;
		height: 51px;
		width: 218px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		color: #28048a;
		font-size:17px;
		font-weight:bold;
		background:#26abff;
	}
	.button:hover{
		background-color:#26abff;
	}

                                 
	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="shweta"){
				 var arr=["aditya","shrddha","kajal","sonali","vaishnavi","priti","Nishant","sneha","suraj"];
				 }
				 else if(a==="aditya"){
					var arr=["shweta","shrddha","kajal","sonali","vaishnavi","priti","Nishant","sneha","suraj"];
				}
				else if(a==="shrddha"){
					var arr=["shweta","aditya","kajal","sonali","vaishnavi","priti","Nishant","sneha","suraj"];
				}
				else if(a==="kajal"){
					var arr=["shweta","aditya","shrddha","sonali","vaishnavi","priti","Nishant","sneha","suraj"];
				 }
				 else if(a==="sonali"){
					var arr=["shweta","aditya","shrddha","kajal","vaishnavi","priti","Nishant","sneha","suraj"];
				 }
				 else if(a==="vaishnavi"){
					var arr=["shweta","aditya","shrddha","kajal","sonali","priti","Nishant","sneha","suraj"];
				 }
				 else if(a==="priti"){
					var arr=["shweta","aditya","shrddha","kajal","sonali","vaishnavi","Nishant","sneha","suraj"];
				 }
				 else if(a==="Nishant"){
					var arr=["shweta","aditya","shrddha","kajal","sonali","vaishnavi","priti","sneha","suraj"];
				 }
				 else if(a==="sneha"){
					var arr=["shweta","aditya","shrddha","kajal","sonali","vaishnavi","priti","Nishant","suraj"];
				 }
				 else if(a==="suraj"){
				 var arr=["shweta","aditya","shrddha","kajal","sonali","vaishnavi","priti","Nishant","sneha"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>
	<h1 style=" font-size:45px;color:33FFB0;text-shadow: 1.5px 1.5px black;">Transfer Amount</h1><br>
	<div class="center">
 
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left">Senders Name: &nbsp;</label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="shweta">shweta</option>
			<option value="aditya">aditya</option>
			<option value="shrddha">shrddha</option>
			<option value="kajal">kajal</option>
			<option value="sonali">sonali</option>
			<option value="vaishnavi">vaishnavi</option>
			<option value="priti">priti</option>
			<option value="Nishant">Nishant</option>
			<option value="sneha">sneha</option>
			<option value="suraj">suraj</option>
		</select><br><br>
		<label for="receiver" align="left">Receiver Name:&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
		</select><br><br>
		<label for="transfer" align="left">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
		<div class="button1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOver="this.style.color='red'"onMouseOut="this.style.color='#28048a'"type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">
		</div>
	</form> 
	</div><br><br><br>
	<div class="buttons">
	<a href="index.php">
    <button class="glow-on-hover">HOME</button>
	</a>
</div>
</body>
</html>