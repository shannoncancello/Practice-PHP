<?php
require_once('mysql_connect.php');

echo "<p>Copyright &copy; 1989-blah blah blah shannoncancello.com</p>";

$sth = $dbh->prepare("SELECT tracking_number, order_number FROM orders ORDER BY order_number LIMIT 30");
$sth->execute();
/*print_r($result);*/

if($sth){
echo '<table align="left" cellspacing="5" cellpadding="8">
<tr><td align="left"><b>Tracking Number</b></td>
<td align="left"><b>Order Number</b></td></tr>';
	
	while($row = $sth->fetch(PDO::FETCH_ASSOC))
	{
	echo '<tr><td align="left">' .
	$tracking_number = $row['tracking_number'] . '</td><td align="left">' . 
	$order_number = $row['order_number'] . '</td><td align="left">'; 
	echo '</tr>';
	}

echo '</table>';

} else {

echo "Couldn't issue database query<br />";
}

?>

