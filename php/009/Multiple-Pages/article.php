<?php

require 'includes/database.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {

    $sql = "SELECT *
            FROM cms
            WHERE id = " . $_GET['id'];

    $results = mysqli_query($link, $sql);

    if ($results === false) {

        echo mysqli_error($link);

    } else {

        $article = mysqli_fetch_assoc($results);

    }

} else {
    $article = null;
}

?>
<?php require 'includes/header.php'; ?>

<?php if ($article === null): ?>
    <p>Article not found.</p>
<?php else: ?>

    <article>
        <h2><?= $article['first_name']; ?></h2>
        <p><?= $article['last_name']; ?></p>
    </article>

<?php endif; ?>

<?php require 'includes/footer.php'; ?>
