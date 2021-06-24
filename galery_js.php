<html>
<head>
    <title>Условия, функции</title>
    <style>
        .window_img{
            position: relative;
            display: flex;
        }
        .mini_img{
            width: 250px;
            margin: 10px;
            border-radius: 5px;
            box-shadow: 0 0 5px #a3a3a3;
        }
        .d_open_mw{
            display: flex;
            justify-content: center;
            width: 200px;
            height: 50px;
        }
        .open_mwindow{
            width: 50px;
            height: 20px;
            background: #c3c3c3;
            border: 1px solid #2c3e50;
            text-align: center;
            font-size: 14px;
            font-family: "Adobe Arabic";
        }

        .model_w{

            position: absolute;
            display: none;
            width: 820px;
            height: 600px;
            background: rgba(255 0 0 0.5);
        }
        .img_model_w{
            margin: 5px;
            width: 500px;
            height: 500px;
        }
        .d_close_mw{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 10px;
            height: 15px;
            border-radius: 50%;
        }
        .close_mwindow{
            margin: 2px;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 10px;
            height: 15px;
            border-radius: 50%;
            background: #c3c3c3;
            border: 1px solid #2c3e50;
            font-size: 25px;
            font-family: "Adobe Arabic"
            }
    </style>
    <script>
        window.addEventListener('load', function() {
            let buttonClose = document.querySelector('.close_mwindow')
            let buttonOpen = document.querySelector('.open_mwindow')
            let windowImg = document.querySelector('.window_img')
            let modelW = document.querySelector('.model_w')
            let imgModelW = document.querySelector('.img_model_w')
            let miniAture = document.getElementsByClassName('mini_img')


            function op(item){
                let src = item.getAttribute("src");
                let new_src = src.substring(0,10);
                modelW.style.display = 'flex';
                imgModelW.src = `${new_src}_prev.jpg`
            }
            document.addEventListener('click', (event) => {
                let target = event.target
                if(target == buttonClose){
                    modelW.style.display = 'none';

                }
                else if(target == buttonOpen){
                        target = target.parentNode.previousElementSibling
                        op(target)
                }
                else {
                    let arrMiniAture = Array.from(miniAture)
                    arrMiniAture.forEach(function(item){
                        if(target == item) {
                            op(item)}
                        })
                    }
                })
        });
    </script>
</head>
<body>
<header>
</header>
<div class="window_img">
    <div>
        <?php
        $sumItems = array_slice(scandir('./job3/'),2);
        const GALLERY_DIR = "./job3/";
        foreach ($sumItems as $item){
            if(!strpos($item,'prev')){ ?>
                <img class="mini_img" src="<? echo GALLERY_DIR.$item ?>" alt="картинка лета">
         <div class="d_open_mw">
            <button class="open_mwindow">Open</button>
        </div>
          <?  }?>
        <?} ?>
    </div>
    <div class="model_w" >
        <img src="" alt="" class="img_model_w">
        <div class="d_close_mw">
            <button class="close_mwindow">&times;</button>
        </div>
    </div>
</div>
<footer><?= date("Y-m-d").' '.date("H:i:s").' '.date("e");?>
</footer>
</body>
</html>
