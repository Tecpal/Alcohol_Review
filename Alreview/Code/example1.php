<?PHP
$host = "localhost";
$userName="root";
$password = "ts836209A!";
$db_name = "test";
$tbl_name ="test1";


$conn = mysqli_connect("$host", "$userName")or die(mysqli_error($con)); 
mysqli_select_db($conn,"$db_name")or die(mysqli_error($con));

$username="a"; 
$password="1"; 

$sql="SELECT * FROM test1 WHERE username=a and password=1";

echo $sql;
$result=mysqli_query($conn,"SELECT * FROM test1 WHERE username=a");
mysqli_query($conn,"CREATE table test2 like test1");


// Mysql_num_row is counting table row
$count=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM test1 WHERE userName='a' AND PASSWORD = '1' "));
echo $count;
if($count == 1){
    echo "Log in";
}
else{
    echo "Prolem with connection";
}
?>