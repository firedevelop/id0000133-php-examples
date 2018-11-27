<?php 
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "cms";

$connect = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
if(mysqli_connect_error()){
    echo mysqli_connect_error();
    exit;
}
$query = "SELECT * FROM article";
$result = mysqli_query($connect, $query);
if($result === false){
    echo mysqli_error($connect);
}else {
    $articles = mysqli_fetch_all($result,MYSQLI_ASSOC);
}
?>
<!DOCTYPE html>
<html>
<body> 
<?php if(empty($articles)): ?>
	<p>No articles found</p>
	<?php else:?>
	<ul>
	<?php foreach($articles as $article): ?>
		<li><?= $article['published_at'];?></li>
		<?php endforeach;?>
		<?php endif;?>
	</ul>
</body>
</html>