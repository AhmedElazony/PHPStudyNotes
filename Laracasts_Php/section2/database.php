<?php

// make access to the database

$dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;password=helloworld;charset=utf8mb4";

$pdo = new PDO($dsn);

$statement = $pdo->prepare("select * from posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo '<li>' . $post['title'] . '</li>';
}
