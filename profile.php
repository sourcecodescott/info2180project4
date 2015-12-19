<?php
	//Start session
	session_start();
	
	if(!isset($_SESSION['SESS_ID']) || (trim($_SESSION['SESS_ID']) == '')) {
		header("location: index.php");
		exit();
	};

	require_once('connection.php');
				$id=$_SESSION['SESS_ID'];
				$result3 = mysql_query("SELECT * FROM user where id='$id'");
				$result4 = mysql_query("SELECT * FROM message where user_id='$id'");
				$result5 = mysql_query("SELECT * FROM message_read where reader_id='$id'");
				while($row3 = mysql_fetch_array($result3))
				{ 
				$fname=$row3['FirstName'];
				$lname=$row3['LastName'];
				$username=$row3['username'];

				}
				$val1 = mysql_num_rows($result4);
				$val2 = mysql_num_rows($result5);
				

?>


<html>
<head>

  <meta charset="UTF-8">

  <title>Cheapo Mail- Login Page</title>
    <link rel="stylesheet" href="css/style.css">

</head>



<body>



  <div class="mycontent">
<div align="center"><a href="logout.php"><button>Log Out</button></a></div>
<form method="POST" action="message.php">

	<div id="div_read" name="read" style="float:left"  >
	
		<h2>Messages</h2>
<?php
		

$sql="SELECT body,subject,user_ID FROM message where recipient_ids=$id LIMIT 10";


$result= mysql_query($sql) or die(mysql_error());

echo'<table border="1">','<tr>','<th> Sender</th>','<th> Subject </th>','<th> Message</th>','</tr>';


while($row3=mysql_fetch_array($result)){	

		 		$userid=$row3['user_ID'];
		 		$subject=$row3['subject'];
				$body=$row3['body'];
				
				echo '<tr>','<td>'.$userid.'</td>','<td>'.$subject.'</td>','<td>'.$body.'</td>','</tr>';
}

 echo '</table>','<br>';
?>

	</div>
	
	<div id="div_send" name="send" style="float:right" >
<h2>Send Message</h2>
		<p>Recipient ID:<input type="number" style="width:50px" id="recipient_ids" name="recipient_ids" required></p>
		<p>Subject:<input type="text" id="subject" name="subject" required ></p>
		<p>Body:<textarea type="text" id="body" name="body" required placeholder="Enter Message"></textarea> </p>
		<p><input type="submit"></p>
		
		<div>	<?php
		
		$messageSent = "";
		   if(!empty($_GET["q"]))
			$messageSent = $_GET["q"];
		    
		if($messageSent == "message")
		{
			echo("Message sent successfully!");
		}
?></div>

	</div> 
</form>
<div style="clear:both;"></div>
</div>




</div>


</body>

</html>


</html>
