<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
<a href="/">Home</a>
<a href="/about">About</a>
<a href="/contact">Contact</a>
<a href="/blog">Blog</a>
</html><?php
    $articles = [
        ['title' => 'Article 1', 'content' => 'This is the content of article 1.'],
        ['title' => 'Article 2', 'content' => 'This is the content of article 2.'],
        ['title' => 'Article 3', 'content' => 'This is the content of article 3.'],
        ['title' => 'Article 4', 'content' => 'This is the content of article 4.'],
        ['title' => 'Article 5', 'content' => 'This is the content of article 5.']
    ];

    foreach ($articles as $article) {
        echo "<h2>" . $article['title'] . "</h2>";
        echo "<p>" . $article['content'] . "</p>";
    }
?>
