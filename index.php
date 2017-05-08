<?php


require'db.php';
require'news.php';
 
$db = new db();
$news = new News();
$results = $news->getNews();
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <?php foreach ($results as $row) : ?>
    

   <div class="row">
      <div class="col-md-3 col-md-offset-1 col-xs-6">
        <a href="#" class="thumbnail">
            <img src="<?php  echo $row["image"]?>" class="news_img" alt="">
        </a>
      </div>
      <div class="col-md-7 col-xs-6"">
      <h4><a href="post.php?post_id<?=$row["id"]?>"><?php  echo $row["title"]?></a></h4>
        <p class="news_content">
         <?php  echo (mb_substr($row["content"],0,128,'UTF-8')."...")?>
        </p>
        <p><a class="btn btn-info btn-sm" href="view.php?id=<?php echo $row["id"];?>">Детальіше</a></p>
        <br/>
        <ul class="list-inline">
            <li><i class="glyphicon glyphicon-user"></i> Ярослав </li>
            <li><i class="glyphicon glyphicon-calendar"></i> <?php  echo $row["datetime"]?></li>
            
        </ul>
      </div>
  </div>
<hr>
    <?php endforeach; ?>
</body>
</html>