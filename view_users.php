

<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
		<head>
			 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>

  <meta charset="UTF-8">

  <title>Cheapo Mail- Login Page</title>
    <link rel="stylesheet" href="css/style.css">

</head>



<body>



  <div class="mycontent">
    <?php

// databae connection info 
include ('connection.php');

//sql statement to selete what to search 

$sql="SELECT Id,FirstName,LastName,username FROM user";

// run sql statement
$result= mysql_query($sql) or die(mysql_error());

echo '<h1> Users </h1>';


echo'<table border="1">','<tr>','<th> User ID</th>','<th> User First Name </th>','<th> User Last Name</th>','<th>Username</th>','</tr>';


while($row3=mysql_fetch_array($result)){	

		 		$userid=$row3['Id'];
		 		$fname=$row3['FirstName'];
				$lname=$row3['LastName'];
				$username=$row3['username'];

				
				
				echo '<tr>','<td>'.$userid.'</td>','<td>'.$fname.'</td>','<td>'.$lname.'</td>','<td>'.$username.'</td>','</tr>';
}

 echo '</table>','<br>';
echo '<a href="admin.php"><button>Back</button> </a> <br>';


mysql_close();

?>


</div>


</body>

</html>
