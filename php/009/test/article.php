<?php
require 'includes/database.php';
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
$query = "SELECT * FROM article WHERE id = " . $_GET['id'];
$result = mysqli_query($connect, $query);
if($result === false){
    echo mysqli_error($connect);
}else{
    $article = mysqli_fetch_assoc($result);
}
}else{
    $article = null;
}
require 'includes/header.php';?>

<?php if(empty($article)):?>
 <p>no articles found</p>
   
<?php else: ?>
       <?php foreach ($article as $key): ?>
       <h2><?php echo $key['title'];?></h2><br>
       <?php echo $key['content'] . "<br>"; ?>
       <?php endforeach; ?>
       <?php endif; ?>

<?php require 'includes/footer.php'; ?>
