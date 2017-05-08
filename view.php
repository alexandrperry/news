<?php
$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

require 'db.php';
require 'news.php';

$db = new db();
$news = new News();
$results = $news->getById($_GET['id']);
?>


<!DOCTYPE html>
<?php foreach ($results as $row) : ?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    
    


      <h4><a href=""><?php  echo $row["title"]?></a></h4>
      
    <?php endforeach; ?>
</body>
</html>