<?php
$articles = json_decode(file_get_contents('data/articles.json'), true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel Kuliner</title>

    <link rel="stylesheet" href="assets/css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body>

<?php include 'components/navbar.php'; ?>

<section class="artikel-page">

    <div class="artikel-header">
        <h1>Artikel Kuliner</h1>

        <a href="add-article.php" class="add-btn">
            <i class="fa-solid fa-plus"></i>
            Tambah Artikel
        </a>
    </div>

    <div class="artikel-container">

        <?php foreach($articles as $index => $article): ?>

        <div class="artikel-card">

            <img src="uploads/<?php echo $article['image']; ?>">

            <div class="artikel-content">

                <span class="artikel-date">
                    <?php echo $article['date']; ?>
                </span>

                <h3>
                    <?php echo $article['title']; ?>
                </h3>

                <p>
                    <?php echo substr($article['content'], 0, 120); ?>...
                </p>

                <a href="article-detail.php?id=<?php echo $index; ?>"
                class="btn-artikel">

                    Baca Selengkapnya

                </a>

            </div>

        </div>

        <?php endforeach; ?>

    </div>

</section>

</body>
</html>