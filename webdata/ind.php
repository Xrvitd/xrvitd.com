<?php
header("Content-type: text/html;charset=utf-8");
$q=$_GET["q"];

$dbhost = 'localhost:3306';  
$dbuser = 'root';            
$dbpass = '997370';          
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
    die('Could not connect: ' . mysqli_error());
}
//echo '数据库连接成功！';
mysqli_query($conn , "set names utf8");

$sql = 'SELECT nr
       
        FROM blog1 where id='.(string)$q;
 
mysqli_select_db( $conn, 'BLOG' );
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
    die('无法读取数据: ' . mysqli_error($conn));
}


while($row = mysqli_fetch_array($retval, MYSQLI_NUM))
{
    echo "{$row[0]}";
   
}

mysqli_close($conn);
?>
