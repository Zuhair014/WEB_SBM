<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Artikel</title>

    <link rel="stylesheet" href="assets/css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

<section class="form-section">

    <form action="save-article.php"
          method="POST"
          enctype="multipart/form-data"
          class="article-form">

        <h1>Tambah Artikel</h1>

        <input type="text"
               name="title"
               placeholder="Judul Artikel"
               required>

        <textarea name="content"
                  placeholder="Isi Artikel"
                  rows="10"
                  required></textarea>

        <input type="file"
               name="image"
               required>

        <button type="submit">
            Simpan Artikel
        </button>

    </form>

</section>

</body>
</html>