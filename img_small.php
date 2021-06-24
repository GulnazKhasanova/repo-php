<html>
<head>
    <meta charset="utf-8">
    <title>Картинка в новом окне</title>
    <style>
        a{
            display: flex;
            border-radius: 7px;
            width: 250px;
            box-shadow: 0 0 5px #c3c3c3;
        }
        img{
            width: 250px;
            border: 1px solid #2c3e50;
            border-radius: 7px;
            }
        a:active{
            box-shadow: 0 0 10px coral;
        }
        a:active img{
            opacity: 0.5;
        }
    </style>
</head>
<body>
<header>
    <h1>Миниатюра</h1>
</header>
<?php $img = 'http://localhost/my_php/small_image.jpg'
?>
<a href="img_prev.php">
    <img src="<?php echo $img?>" alt="миниатюра">
</a>
<footer>    
</footer>
</body>
</html>