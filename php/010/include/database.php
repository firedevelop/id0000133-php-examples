<<<<<<< HEAD
<?php 
$db_hostname = "localhost";
=======
<?php
$db_host = "localhost";
>>>>>>> 43c34103557c4d14969d0c319846037190564fe1
$db_user = "root";
$db_pass = "123456";
$db_name = "cms";

<<<<<<< HEAD
if(mysqli_connect){
    echo database connected;
}


=======
$connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if(mysqli_connect_error()){
    echo mysqli_connect_error();
    exit();
}
>>>>>>> 43c34103557c4d14969d0c319846037190564fe1
?>