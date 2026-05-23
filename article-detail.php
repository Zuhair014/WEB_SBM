<?php

$articles = json_decode(
    file_get_contents('data/articles.json'),
    true
);

$id = $_GET['id'];

$article = $articles[$id];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $article['title']; ?></title>

    <link rel="stylesheet" href="assets/css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

<?php include 'components/navbar.php'; ?>

<section class="detail-artikel">

    <img src="uploads/<?php echo $article['image']; ?>"
         class="detail-image">

    <div class="detail-content">

        <span>
            <?php echo $article['date']; ?>
        </span>

        <h1>
            <?php echo $article['title']; ?>
        </h1>

        <p>
            <?php echo nl2br($article['content']); ?>
        </p>

    </div>

</section>

</body>
</html>