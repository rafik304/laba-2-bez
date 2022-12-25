<?php 
$db_host='localhost'; 
$db_name='labbez'; 
$db_user='root'; 
$db_pass=''; 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name); 
$mysqli->set_charset("utf8mb4"); 

$result = $mysqli->query('SELECT * FROM `index`'); 
while($row = $result->fetch_assoc())
{
    echo '<p>'.$row['tittle'].'<br>  '.$row['content'].'</p>';
}
 ?>