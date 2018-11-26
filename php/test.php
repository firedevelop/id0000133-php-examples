<?php 
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "employees";
// hi
$connect =  mysqli_connect($db_host,$db_user,$db_pass,$db_name);
if(mysqli_connect_error()){
    echo mysqli_connect_error();
    exit;
}
$query = "SELECT * FROM employees";
$result = mysqli_query($connect, $query);
if ($result===false) {
    echo mysqli_error($connect);
}else{
    $articles = mysqli_fetch_all($result,MYSQLI_ASSOC);
}
?>
<!DOCTYPE html>
<html>
<body>
<?php if(empty($articles))?>
</body>

</html>