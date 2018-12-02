<?php
require 'includes/database.php';
require 'includes/query.php';
require 'includes/header.php';?>

<?php if(empty($article)):?>
 <p>no articles found</p>
   
<?php else: ?>
       <?php foreach ($article as $key): ?>
       <h2><a href="article.php?id=<?php echo $key['id']?>"><?php echo $key['title'];?></a></h2><br>
       <?php echo $key['content'] . "<br>"; ?>
       <?php endforeach; ?>
       <?php endif; ?>

<?php require 'includes/footer.php'; ?>
