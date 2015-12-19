<?php
session_start();
include('connection.php');
	$id=$_SESSION['SESS_ID'];
	$subject=$_POST['subject'];
	$body=$_POST['body'];
	$recipient_ids=$_POST['recipient_ids'];
	$m_id=mysql_query("SELECT MAX(message_id) FROM message_read");
	$date=mysql_query("SELECT NOW()");
mysql_query("INSERT INTO message (body, subject, recipient_ids, user_ID)VALUES('$body', '$subject', $recipient_ids, $id)");
mysql_query("INSERT INTO message_read (message_id, reader_id, date)VALUES( $m_id, $recipient_ids, (SELECT now()))");
header("location: profile.php?q=message");
?>
<html>

</html>