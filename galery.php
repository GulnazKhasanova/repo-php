<html>
<head>
    <meta charset="utf-8">
    <title>Лето</title>
    <style>
        img{
            width: 250px;
            border: 1px solid #2c3e50;
            border-radius: 7px;
        }
    </style>
</head>
<body>
<header>
    <h1>Лето</h1>
</header>
<?php
$sumItems = array_slice(scandir('./job2/'),2);
const GALLERY_DIR = "./job2/";
foreach ($sumItems as $item){
       if(!strpos($item,'prev')){
        echo '<img class="mini_img" src="'.GALLERY_DIR. $item .'" alt="картинка лета">';
    }
}
?>
<footer>
</footer>
</body>
</html>
