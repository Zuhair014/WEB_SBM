<?php

$title = $_POST['title'];
$content = $_POST['content'];

$imageName = time() . '_' . $_FILES['image']['name'];

$tmpName = $_FILES['image']['tmp_name'];

move_uploaded_file($tmpName, 'uploads/' . $imageName);

$articles = json_decode(
    file_get_contents('data/articles.json'),
    true
);

$newArticle = [

    "title" => $title,
    "content" => $content,
    "image" => $imageName,
    "date" => date('d M Y')

];

$articles[] = $newArticle;

file_put_contents(
    'data/articles.json',
    json_encode($articles, JSON_PRETTY_PRINT)
);

header("Location: articles.php");

?>