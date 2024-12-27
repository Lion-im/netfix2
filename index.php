<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <style type="text/css">
        .textcolor{
            background: linear-gradient(to right,#e66465,#9198e5);
            background-clip: text;
            color: transparent;
        }
    </style>
</head>
<body>
<?php
    $film = [
        "name" => "Downtown Abbey",
        "description"=>"Это сериал, обнажающий снобизм и интриганство внутри исчезающей классовой системы Англии, рассказывает о событиях жизни семьи Кроули и ее слуг.",
        "year"=> 2015,
        "image"=>"downtownabbey.webp",
    ]
?>
 <!--шапка-->
 <div class="bg-dark p-3 col-12">
        <div class="row">
            <div class="col-1">
                <img src="logo.png" alt="" class="w-100">
            </div>
            <div class="col-7 pt-2">
                <a href="" class="text-light ml-3 text-decoration-none">Главная</a>
                <a href="" class="text-light ms-3 text-decoration-none">Сериалы</a>
                <a href="" class="text-light ms-3 text-decoration-none">Фильмы</a>
                <a href="" class="text-light ms-3 text-decoration-none">Новые и популярные</a>
                <a href="" class="text-light ms-3 text-decoration-none">Мой список</a>
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>
    <div class="col-12" style="height: 900px; background-image: url(<?php echo $film['image']?>); background-size: 100%;">
        <div class="col-3 ms-5 text-light" style="padding-left: 60px; padding-top: 100px;">
            <h1><?php echo $film['name']?></h1>
            <p><?php echo $film['description']?></p>
            <p>Год выпуска: <?php echo $film['year']?></p>
            <button class="btn btn-light">Смотреть</button>
            <button class="btn btn-secondary">Поподробнее</button>
        </div>
    </div>

    <div class="col-12 bg-dark p-4" style="height: 400px">
        <div class="col-3" style="height: 50px">
            <h3  class="textcolor">Топ сериалов на данный момент:</h3>
        </div>
        <div class=" d-flex" style="height: 225px">
            <div class="col-2 ml-2 ms-4" style="height: 225px">
                <div class="col-12 d-flex">
                    <div class="col-5" style="height: 225px">
                        <h1 style="font-size: 170px; text-align: center" class="textcolor">
                            1
                        </h1>
                    </div>
                    <div class="col-7" style="height: 225px; margin-left: auto;">
                        <div>
                            <img src="ST.jpg" class="col-12">
                        </div>  
                    </div>
                </div>
            </div>
            <div class="col-2 ml-2 ms-4" style="height: 225px">
                <div class="col-12 d-flex">
                    <div class="col-5" style="height: 225px">
                        <h1 style="font-size: 170px; text-align: center" class="textcolor">
                            2
                        </h1>
                    </div>
                    <div class="col-7" style="height: 225px; margin-left: auto;">
                        <div>
                            <img src="Arcane.webp" class="col-12">
                        </div>  
                    </div>
                </div>
            </div>
            <div class="col-2 ml-2 ms-4" style="height: 225px">
                <div class="col-12 d-flex">
                    <div class="col-5" style="height: 225px">
                        <h1 style="font-size: 170px; text-align: center" class="textcolor">
                            3
                        </h1>
                    </div>
                    <div class="col-7" style="height: 225px; margin-left: auto;">
                        <div>
                            <img src="Black_Mirror.webp" class="col-12">
                        </div>  
                    </div>
                </div>
            </div>
            <div class="col-2 ml-2 ms-4" style="height: 225px">
                <div class="col-12 d-flex">
                    <div class="col-5" style="height: 225px">
                        <h1 style="font-size: 170px; text-align: center" class="textcolor">
                            4
                        </h1>
                    </div>
                    <div class="col-7" style="height: 225px; margin-left: auto;">
                        <div>
                            <img src="blue.jpg" class="col-12">
                        </div>  
                    </div>
                </div>
            </div>
            <div class="col-2 ml-2 ms-4" style="height: 225px">
                <div class="col-12 d-flex">
                    <div class="col-5" style="height: 225px">
                        <h1 style="font-size: 170px; text-align: center" class="textcolor">
                            5
                        </h1>
                    </div>
                    <div class="col-7" style="height: 225px; margin-left: auto;">
                        <div>
                            <img src="dark.jpg" class="col-12">
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>
</html>