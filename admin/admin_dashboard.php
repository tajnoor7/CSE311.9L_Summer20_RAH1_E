<?php
 include 'config.php';
 
 
?>

<!tutorial>
<html>
<head>
<link rel="stylesheet" href="style.css"></link>
<title>admin</title>




<style>
        body{ background-image:linear-gradient(rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.3)),url(pic/dash.jpg);
        height: 100vh;
        background-size: cover;
        background-position: center;
        font-family: sans-serif;
        margin: 0;
        padding: 0;
      }
 
     </style>




<h2 align="center" class="i">Welcome to Bangladesh Railway</h2>

</head>

 

 <h2 align="center" class="m">
 	Admin Dashboard
 </h2>

<body>
<center>
<div id="k">



<center><form action="admin_dashboard.php" method="POST">


<!button work>


<a href="fare_query.html"><input name="back" type="button" id="dash" value="Set Fare Query">
</input>


<a href="train_info.html"><input name="back" type="button" id="dash" value="Set Train Information">
</input>


<a href="route.html"><input name="back" type="button" id="dash" value="Set Train Route">
</input>


<a href="purchase_history.php"><input name="back" type="button" id="dash" value="Purchase History">
</input>


<a href="admin.php"><input name="back" type="button" id="dash" value="Admin List">
</input>



<input name="logout" type="submit" id="log" value="LOG-OUT">
</input>



</form></center>

</center>
<?php
  if(isset($_POST['logout'])){
	  
	  echo"
				<script>
				alert('You are Successfully  Logged out');
				window.location.href='admin_login.php';
				</script>
				";
				
	  
	  
  }else{}





?>




</div>
</body>

</html>