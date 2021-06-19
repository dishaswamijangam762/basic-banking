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

    <title>Basic Banking System</title>
    <link rel="shortcut icon" href="images/cm.png">
   
	 <link rel="stylesheet" href="index_button.css">
	<style>
	button{
		background-color:#ff0000;
	}
	body
	{
		text-align:center;
	}
		body{
		background-image:url("images/ss.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
          .button1 {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
width: 100%;
border-radius: 50%;
}
p.dotted {border-style: dotted;}
	</style>
</head>
<body >

	<div id="header">
       <br><header class="w3-center w3-margin-bottom">
  
       <h1 style=" font-family:Agency FB; font-size: 70px; text-shadow: 2px 2px black;"> <p class="dotted"><b>Sparks Foundation Internship Project</b></p> </h1>
       <h2 style=" font-family:Agency FB; font-size: 55px;color:#ee10ee;text-shadow: 2px 2px black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Basic Banking System </h2>
    </div>
        <div id="section">
            <table>
                <tr></tr>
                <tr><br>
				<a href="getdetail.php">
               <button class="button1" id="button "type="button" href="getdetail.php">View users</button>
                </a>

               
                </tr>

                <tr>        
               <br> <br> <br>
			   <a href="transfer.php">
			   <button class="button1" id="button" type="button">Credit Transfer</button>
               </a>
               
               </tr>
			   
			    <tr>        
               <br> <br> <br>
			   <a href="transaction.php">
			   <button class="button1" id="button" type="button">All Transaction</button>
               </a>

            </table>
    </div>
	           
</body>
</html>