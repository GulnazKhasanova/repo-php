<html>
<head>
    <meta charset="utf-8">
    <title>Картинка в новом окне</title>
    <style>
        img{
            width: 800px;
            border: 1px solid #2c3e50;
            border-radius: 7px;
        }
    </style>
</head>
<body>
<header>
    <h1>Изображение</h1>
</header>
<?php $img2 = 'http://localhost/my_php/image.jpg'
?>
<img src="<?php echo $img2?>" alt="изображение">
<footer>
</footer>
</body>
</html>