<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Saya</title>
</head>
<body>
    
</body>
<a href="/">Home</a>
<a href="/about">About</a>
<a href="/contact">Contact</a>
<a href="/blog">Blog</a>
</html><?php
    $contact = [
        'name' => 'Baka Yaro',
        'email' => 'baka@gmail.com',
        'phone' => '1232312312'
    ];

    echo "<h1>Contact Me</h1>";
    echo "<p>Name: " . $contact['name'] . "</p>";
    echo "<p>Email: " . $contact['email'] . "</p>";
    echo "<p>Phone: " . $contact['phone'] . "</p>";
?>
