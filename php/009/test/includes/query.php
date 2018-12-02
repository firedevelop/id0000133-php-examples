<?php
$query = "SELECT * FROM article";
$result = mysqli_query($connect, $query);
if($result === false){
    echo mysqli_error($connect);
}else{
    $article = mysqli_fetch_all($result,MYSQLI_ASSOC);
}