<?php 
require 'include/database.php';
$query = "SELECT * FROM cms";
$result = mysqli_query($link, $query);
if($result === false){
    echo mysqli_error($link);
}else{
    $article = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>
<?php require 'include/header.php';?>
	<?php if(empty($article)): ?>
	<p>Not found articles</p>
	<?php else:?>
	<?php foreach ($article as $article):?>
	
	<?php echo $article['first_name'] . '<br>' ;?>
	<p><a href="article.php?id=<?= $article ['id'];?>"><?php echo $article['last_name'];?></a></p>
	<?php endforeach;?>
	<?php endif;?>
<?php require 'include/footer.php'?>