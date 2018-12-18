<?php
require 'includes/database.php';

$sql = "SELECT *
        FROM cms
        ORDER BY first_name;";

$results = mysqli_query($link, $sql);

if ($results === false) {
    echo mysqli_error($link);   
} else {
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
}

?>
<?php require 'includes/header.php'; ?>

<?php if (empty($articles)): ?>
    <p>No articles found.</p>
<?php else: ?>

    <ul>
        <?php foreach ($articles as $article): ?>
            <li>
                <article>
                    <h2><a href="article.php?id=<?= $article['id']; ?>"><?= $article['first_name']; ?></a></h2>
                    <p><?= $article['last_name']; ?></p>
                </article>
            </li>
        <?php endforeach; ?>
    </ul>

<?php endif; ?>

<?php require 'includes/footer.php'; ?>
