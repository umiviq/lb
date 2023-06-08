
<?php
session_start();
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/92ad0a40ce.js" crossorigin="anonymous"></script>
    <link href="/examples/libs/bootstrap-5/bootstrap.min.css" rel="stylesheet">
    <script defer src="/examples/libs/bootstrap-5/bootstrap.bundle.min.js">
    </script>
</head>
<body>
<div class="container"style="min-width: 90%">
<div class="header" style="height: 7vw;display: flex;justify-content: space-between;align-items: center">
    <div><img src="08a8ceb7-be0e-4e79-ae34-768730c54a1a.jfif" alt=""></div>

<div>
    <p style="color: #000000;font-weight: 700">Покупка и продажа <br>
        оборудования для бизнеса</p>
</div>
<div>
    <form  action="" style="display: flex;border: 1px solid #b2b2b2">
    <input type="search" style="    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
    border-collapse: collapse;
    margin: 0;
    font: inherit;
    color: inherit;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    box-sizing: border-box;
    -webkit-appearance: none;
    border: 1px solid #ebf0f4;
    border-radius: 4px;
    height: 48px;
    padding: 0 10px;
    width: 100%;
    outline: none;" name="text" id="autocomplete-search-hedaer" data-sub="/search/" placeholder="Найти оборудование" required="" autocomplete="off">
    <button style="width: 60px;background: none;border: none"><img style="mix-height: 200px;max-height: 15px" src="https://www.equipnet.ru/tm/assets/dev/img/search.svg" alt=""></button>
    </form>
</div>
    <div style="display: flex">
        <div style="margin-top: 8px">
            <?php if (!isset($_SESSION['login'])){
                ?><p><a href="reg.php">Регистрация</a></p><?
            }
            else{
            ?><p><?php echo $_SESSION['login'];?></p><?php
            }?>

        </div>
        <?php if (!isset($_SESSION['login'])){

         ?>
        <div>
            <span style="margin-left:20px ;    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
    box-sizing: border-box;
    margin: 0;
    border-collapse: collapse;
    display: inline-block;
    margin-bottom: 0;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    touch-action: manipulation;
    cursor: pointer;
    user-select: none;
    border: 1px solid transparent;
    color: #5c6f7f;
    font-size: 16px;
    font-family: 'Lato', sans-serif;
    line-height: 37px;
    padding: 0 28px;
    background: #ebf0f4;
    border-radius: 4px;
    border-bottom: 1px solid #e5ecf1;" class="btn btn__gray" data-toggle="modal" data-target="#auth" onclick="ym(164559, 'reachGoal', 'log-in');">Войти</span>
        </div>
        <?php }else{
            ?><a href="exit.php">Выход</a> <?php
        } ?>
    </div>
</div>
</div>
    <div class="nav" style="background: #015293;min-width: 100%;height: 5vw;display:justify-content: space-between;align-items: center">
        <div class="container" style="display: flex;min-width: 90%">
        <div class="dropdown">
            <button style="font-size: 1vw;background: none;border: none;height: 100%" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                ОБОРУДОВАНИЕ
            </button>
            <div class="dropdown-menu" style=";background: rgb(9,15,28)" aria-labelledby="dropdownMenuButton1">
                <li><div style="display: flex">
                    <div style="min-width: 500px">
                        <br>
                        <a style="margin-left: 30px;color: blue" href="">Перейти в раздел ></a><br>
                        <a style="margin-left: 30px;font-size: 14px;margin-top: 5px;color: white" href="">Автомобилестроение</a><br>
                        <a style="margin-left: 30px;font-size: 14px;color: white" href=""> Биотопливо и альтернативная энергетика</a><br>
                        <a style="margin-left: 30px;font-size: 14px;color: white" href="">Деревообрабатывающее оборудование</a><br>
                        <a style="margin-left: 30px;font-size: 14px;color: white" href=""> Добывающее и промысловое оборудование</a><br>
                        <a  style="margin-left: 30px;font-size: 14px;color: white"href=""> Измерительные приборы</a><br>
                        <a style="margin-left: 30px;font-size: 14px;color: white" href=""> Медицинское оборудование</a><br>
                        <a style="margin-left: 30px;font-size: 14px;color: white" href=""> Металлообрабатывающее оборудование</a><br>
                        <a style="margin-left: 30px;font-size: 14px;color: white" href=""> Оборудование бытового обслуживания</a><br>
                        <a  style="margin-left: 30px;font-size: 14px;color: white"href=""> Оборудование для автосервиса</a><br>
                        <a style="margin-left: 30px;font-size: 14px;color: white" href="">  Оборудование для производства напитков и табака</a><br>
                        <a style="margin-left: 30px;font-size: 14px;color: white"href=""> Оборудование для производства строительных материалов</a><br>
                        <a style="margin-left: 30px;font-size: 14px;color: white"href="">  Оборудование для развлекательных комплексов</a><br>
                        <a style="margin-left: 30px;font-size: 14px;color: white"href="">  Оборудование легкой промышленности</a><br>
                        <a style="margin-left: 30px;font-size: 14px;color: white"href=""> Переработка отходов и очистные сооружения</a><br>
                        <a style="margin-left: 30px;font-size: 14px;color: white"href="">  Переработка сельхозпродукции</a><br>
                        <a style="margin-left: 30px;font-size: 14px;color: white"href=""> Пищевое оборудование</a><br>
                        <a style="margin-left: 30px;font-size: 14px;color: white"href="">  Полиграфическое оборудование / Производство бумаги и картона</a><br>
                        <a style="margin-left: 30px;font-size: 14px;color: white" href="">  Промышленное холодильное оборудование</a><br>
                        <a style="margin-left: 30px;font-size: 14px;color: white"href=""> Сельское хозяйство</a><br>
                        <a style="margin-left: 30px;font-size: 14px;color: white"href=""> Складское оборудование</a><br>
                        <a style="margin-left: 30px;font-size: 14px;color: white"href="">  Спецтехника</a><br>
                        <a style="margin-left: 30px;font-size: 14px;color: white"href=""> Строительное оборудование</a><br>
                        <a style="margin-left: 30px;font-size: 14px;color: white"href=""> Телекоммуникационное, офисное оборудование</a><br>
                        <a style="margin-left: 30px;font-size: 14px;color: white"href="">  Торговое оборудование</a><br>
                        <a style="margin-left: 30px;font-size: 14px;color: white"href="">  Фармацевтика и химическая промышленность</a><br>
                        <a style="margin-left: 30px;font-size: 14px;color: white"href="">  Фасовочно-упаковочное оборудование</a><br>
                        <a style="margin-left: 30px;font-size: 14px;color: white"href="">  Электрооборудование</a><br>
                        <a style="margin-left: 30px;font-size: 14px;color: white"href=""> Оборудование для ЖКХ</a><br>
                    </div>

                    <div style="min-width: 350px;max-height:150px;border-left:1px solid white ">
                        <h5 style="margin-left: 30px;margin-top: 26px"><a style="color: blue" href="">Популярные категории</a><br></h5>
                        <a style="margin-left: 30px;font-size: 14px;color: white"href=""> Биотопливо и альтернативная энергетика</a><br>
                        <a style="margin-left: 30px;font-size: 14px;color: white"href=""> Сборка двигателей</a><br>
                    </div>

                </li>
            </div>
            </ul>

        </div>
            <div class="dropdown">
                <button style="font-size: 1vw;background: none;border: none;height: 100%" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    ПРЕДПРИЯТИЯ
                </button>
                <ul class="dropdown-menu"  style=";background: rgb(9,15,28)" aria-labelledby="dropdownMenuButton1">
                    <li>
                        <div style="min-width: 500px">
                            <a style="margin-left: 30px;color: blue" href="">Перейти в раздел ></a><br>
                            <a style="margin-left: 30px;font-size: 14px;margin-top: 5px;color: white" href="">Автомобилестроение</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href=""> Биотопливо и альтернативная энергетика</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href="">Деревообрабатывающее оборудование</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href=""> Добывающее и промысловое оборудование</a><br>
                            <a  style="margin-left: 30px;font-size: 14px;color: white"href=""> Измерительные приборы</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href=""> Медицинское оборудование</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href=""> Металлообрабатывающее оборудование</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href=""> Оборудование бытового обслуживания</a><br>
                            <a  style="margin-left: 30px;font-size: 14px;color: white"href=""> Оборудование для автосервиса</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href="">  Оборудование для производства напитков и табака</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white"href=""> Оборудование для производства строительных материалов</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white"href="">  Оборудование для развлекательных комплексов</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white"href="">  Оборудование легкой промышленности</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white"href=""> Переработка отходов и очистные сооружения</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white"href="">  Переработка сельхозпродукции</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white"href=""> Пищевое оборудование</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white"href="">  Полиграфическое оборудование / Производство бумаги и картона</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href="">  Промышленное холодильное оборудование</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white"href=""> Сельское хозяйство</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white"href=""> Складское оборудование</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white"href="">  Спецтехника</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white"href=""> Строительное оборудование</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white"href=""> Телекоммуникационное, офисное оборудование</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white"href="">  Торговое оборудование</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white"href="">  Фармацевтика и химическая промышленность</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white"href="">  Фасовочно-упаковочное оборудование</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white"href="">  Электрооборудование</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white"href=""> Оборудование для ЖКХ</a><br>

                        </div>
                    </li>

                </ul>
            </div>
            <div class="dropdown">
                <button style="font-size: 1vw;background: none;border: none;height: 100%" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    ДОСКА ОБЬЯВЛЕНИЙ
                </button>
                <ul class="dropdown-menu" style=";background: rgb(9,15,28)" aria-labelledby="dropdownMenuButton1">
                    <li><div style="min-width: 500px">
                            <a style="margin-left: 30px;color: blue" href="">Перейти в раздел ></a><br>

                            <a style="margin-left: 30px;font-size: 14px;margin-top: 5px;color: white" href="">Доска объявлений по пищевому оборудованию</a><br>
                                <a style="margin-left: 30px;font-size: 14px;color: white" href=""> Производство металлов / металлообрабатывающее оборудование</a><br>
                                    <a style="margin-left: 30px;font-size: 14px;color: white" href=""> Сварочное оборудование / сварочные материалы</a><br>
                                        <a style="margin-left: 30px;font-size: 14px;color: white" href=""> Электрооборудование и материалы</a><br>
                                            <a style="margin-left: 30px;font-size: 14px;color: white" href="">Деревообрабатывающее оборудование / лес / пиломатериалы</a><br>
                                                <a style="margin-left: 30px;font-size: 14px;color: white" href=""> Производство строительных материалов/ Строительных конструкций</a><br>
                                                    <a style="margin-left: 30px;font-size: 14px;color: white" href=""> Строительное оборудование</a><br>
                                                        <a style="margin-left: 30px;font-size: 14px;color: white" href=""> Спецтехника / Грузовой транспорт</a><br>
                                                            <a style="margin-left: 30px;font-size: 14px;color: white" href="">Складское оборудование / грузоподъемное оборудование</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href=""> Сельское хозяйство: техника, оборудование, материалы</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href="">  Упаковочное оборудование/ Фасовочное оборудование</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href="">   Холодильное оборудование и установки</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href="">   Бытовое оборудование / климатическое оборудование</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href="">   Медицинское оборудование и техника</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href="">   Лабораторное оборудование</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href="">   Фармацевтика</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href="">  Химическая промышленность: полимеры, эластомеры, нефтехимия</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href="">  Нефтегазовое и буровое оборудование</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href="">   Нефтепродукты, ГСМ</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href="">   Добывающее оборудование / горношахнтое оборудование</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href="">   Оборудование для автосервисов и АЗС</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href="">   Оборудование для опщепита, ресторанов и кафе</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href="">  Производство напитков</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href="">   Торговое оборудование / Выставочное оборудование</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href="">   Оборудование для легкой промышленности</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href="">   Полиграфическое оборудование и расходные материалы</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href="">   Музыкальное оборудование</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href="">   Переработка отходов / очистка стоков</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href="">    Контроль качества продукции</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href="">    Охрана труда / промышленная безопасность</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href="">   Услуги: страховые, бухгалтерские, грузоперевозки, лизинг</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href="">   Разное</a><br>
                        </div>></li>

                </ul>
            </div>
            <div class="dropdown">
                <button style="font-size: 1vw;background: none;border: none;height: 100%" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    БИЗНЕС ИДЕИ
                </button>
                <ul class="dropdown-menu" style="background: rgb(9,15,28)" aria-labelledby="dropdownMenuButton1">
                    <li><div style="min-width: 400px">
                            <a style="margin-left: 30px;color: blue" href="">Перейти в раздел ></a><br>

                            <a style="margin-left: 30px;font-size: 14px;color: white" href=""> Автобизнес</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href=""> Бизнес в интернете</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href=""> Бизнес идеи для села</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href=""> Бизнес идеи с минимальными вложениями</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href="">  Бизнес на дому</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href="">  Другие бизнес-идеи</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href=""> Общественное питание</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href=""> Производственный бизнес</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href=""> Развлечения</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href=""> Рейтинги бизнес-идей</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href=""> Строительство</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href=""> Торговля</a><br>
                            <a style="margin-left: 30px;font-size: 14px;color: white" href=""> Услуги</a><br>
                        </div></li>

                </ul>
            </div>
            <div><p style="color: white;font-size: 1vw;margin-top:1vw;">МАГАЗИН ЗАЯВОК</p></div>
            <div class="dropdown">
                <button style="margin-left: 12.5vw;font-size:0.9vw;font-weight: 600;background: none;border: none;height: 100%" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Новости
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Действие</a></li>
                    <li><a class="dropdown-item" href="#">Другое действие</a></li>
                    <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <button style="font-size:0.9vw;font-weight: 600;background: none;border: none;height: 100%" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Статьи
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Действие</a></li>
                    <li><a class="dropdown-item" href="#">Другое действие</a></li>
                    <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <button style="font-size:0.9vw;font-weight: 600;background: none;border: none;height: 100%" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Интервью
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Действие</a></li>
                    <li><a class="dropdown-item" href="#">Другое действие</a></li>
                    <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li>
                </ul>
            </div>
            <div><p style="color: white;font-size: 0.9vw;margin-top:1vw;">Реклама</p></div>
    </div>
</div>
<div class="container" style="min-width: 90%">
    <div style="display: flex;height: 6vw;align-items: center;flex-wrap: wrap;border-bottom: 1px solid black">
        <p style="font-size: 1vw"><a href="">Главная</a></p>
        <p style="margin-left: 0.7vw">/</p>
        <p style="font-size: 1vw;margin-left: 0.7vw"><a href="">Каталог оборудования</a></p>
        <p style="margin-left: 0.7vw">/</p>
        <p style="font-size: 1vw;margin-left: 0.7vw"><a href="">Оборудование для производства напитков и табака</a></p>
            <p style="margin-left: 0.7vw">/</p>
        <p style="font-size: 1vw;margin-left: 0.7vw"><a href=""> Газирование минеральной воды</a></p>
        <p style="margin-left: 0.7vw">/</p>

        <p style="font-size: 1vw;margin-left: 18vw"><a href="">< Вернуться назад</a></p>

    </div>
</div>
<div class="container" style="min-width: 90%;">
    <div style="display: flex;height: 6vw;justify-content: space-between;align-items: center">
        <div style="display: flex">
            <p style="color:#969696;">Просмотров: 2848</p>
            <p style="color:#969696;margin-left: 2vw"> Размещено: 17.03.2010</p>
        </div>
        <div>
            <img src="https://www.equipnet.ru/tm/assets/img/ic/ic_rate.png" alt="">
            <img src="https://www.equipnet.ru/tm/assets/img/ic/ic_rate.png" alt="">
            <img src="https://www.equipnet.ru/tm/assets/img/ic/ic_rate.png" alt="">
            <img src="https://www.equipnet.ru/tm/assets/img/ic/ic_rate.png" alt="">
            <img src="https://www.equipnet.ru/tm/assets/img/ic/ic_rate.png" alt="">
        </div>
    </div>
</div>
<div class="container" style="min-width: 90%;display: flex">
    <div>
        <img style="max-width: 25vw;max-height: 22vw" src="https://www.equipnet.ru/netcat_files/263/297/liniya_gazirovaniya.JPG" alt="">
        <img style="max-width: 100px;max-height: 100px" src="https://www.equipnet.ru/netcat_files/263/297/liniya_gazirovaniya.JPG" alt="">
    </div>
    <div style="margin-left: 2vw">
        <h3 style="font-size: 25px">Линия газирования напитков,<br> Агростроймонтаж</h3>
        <div style="display:flex;">
            <p><img style="max-height: 15px;max-height: 15px" src="https://www.equipnet.ru/tm/assets/dev/img/stock.svg" alt=""> В наличии</p>
            <p style="margin-left: 2vw"><img  style="max-height: 15px;max-height: 15px" src="https://www.equipnet.ru/tm/assets/dev/img/use.svg" alt="">Новое</p>
        </div>
        <div style="border-bottom: 1px solid black">
            <p style="font-size: 14px"><b>Код товара:</b> 16539</p>
            <p style="font-size: 14px"><b>Страна-производитель:</b> Агростроймонтаж-2, ООО</p>
            <p style="font-size: 14px"><b>Назначение: </b>Комплексы оборудования для обеспечения двуокисью углерода линий по газированию и консервации напитков, производства пива, шампанского:
                <br>
                - резервуары для хранения углекислоты РДХ 12,5-2,0; 22,5-2,0; 40-2,0; 50-2,0;<br>
                - резервуар для хранения и транспортировки углекислоты РХТУ 4-1,8;<br>
                - полуприцеп-цистерны для транспортировки углекислоты ЦЖУ 10-2,0; 18-2,0; 22-2,0;<br>
                - газификаторы производительностью до 1100 кг/ч;<br>
                - подогреватели производительностью до 1100 кг/ч;<br>
                - станции перекачивания (перелива) углекислоты;<br>
                - станции зарядки баллонов и огнетушителей углекислотой;<br>
                - редукторы;<br>
                - участки по ремонту и освидетельствованию баллонов.</p><br>
        </div>
        <div>
            <br>
            <h4>Цена 150 000 руб</h4>
            <div STYLE="display: flex">
                <div>
                    <button type="button" class="btn btn-warning">Заказать</button>
                </div>
                <div style="margin-left: 2vw">
                    <button style="border:1px solid black" type="button" class="btn btn-light">РАССЧИТАТЬ В ЛИЗИНГ</button>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div>
            <div style="display: flex;align-items: center">
                <img style="width: 100px;height: 70px;border: 1px solid black" src="qweqwe" alt="Агростро">
                <p><a style="color: black" href="">Агростроймонтаж-2</a></p>
            </div>
        </div>
        <div style="border-bottom: 1px solid black">
            <p><b>Адресс:</b> <br>
                    Самара, пр-кт Кирова, 24, оф. 66</p>
        </div>
    <div style="margin-left: 2vw;margin-top:2vw">
        <span style="    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
    box-sizing: border-box;
    margin: 0;
    border-collapse: collapse;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    touch-action: manipulation;
    cursor: pointer;
    user-select: none;
    text-transform: uppercase;
    color: #fff;
    display: inline-block;
    border-radius: 4px;
    border: none;
    background: #5ab772;
    font-family: 'Lato', sans-serif;
    font-weight: 700;
    text-shadow: none;
    line-height: 1.4;
    max-width: 100%;
    font-size: 14px;
    min-width: auto!important;
    padding: 10px 20px;
    width: 100%;
    margin-bottom: 10px;" class="btn btn__green btn__green-lg show-phone phone-click showPhone" data-id="16539" data-user="40684" onclick="">
                                              <span>Показать телефон</span>
                                              <br>
                                              <span>+7(987) XXX-XX-XX</span>
                                            </span>
    </div>
        <div style="display: flex;justify-content: end;border-bottom: 1px solid black">
            <p style="font-size: 1vw;color: red">Пожаловаться</p><br>
        </div>
        <div>
            <br>
            <div>
                
            </div>
            <div style="display: flex;justify-content: space-between">
                <div style="display: flex;flex-direction: column;align-items: center">
                    <img src="https://www.equipnet.ru/image/i1.svg" alt="">
                    <p>13 лет на сайте</p>
                  </div>
                <div style="display: flex;flex-direction: column;align-items: center">
                    <img src="https://www.equipnet.ru/image/i4.svg" alt="">
                    <p>Безопасная <br> сделка</p>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div style="display: flex">
        <div class="py-3">
            <a style="border: none;background: #c2c1c1" class="btn btn-primary" href="#" data-bs-toggle="collapse" data-bs-target="#collapse-1">Описание</a>
        </div>

        <div class="py-3">
            <a style="margin-left: 3px;border: none;background: #c2c1c1" class="btn btn-primary" href="#" data-bs-toggle="collapse" data-bs-target="#collapse-2">Технические характеристики</a>
        </div>

        <div class="py-3">
            <a style="margin-left: 3px;border: none;background: #c2c1c1" class="btn btn-primary" href="#" data-bs-toggle="collapse" data-bs-target="#collapse-3">Дополнительно</a>
        </div>

        <div class="py-3">
            <a style="margin-left: 3px;border: none;background: #c2c1c1" class="btn btn-primary" href="#" data-bs-toggle="collapse" data-bs-target="#collapse-4">Доставка и оплата</a>
        </div>

    </div>
    <!-- #collapse-1 -->
    <div class="collapse mb-3" id="collapse-1" style="">
        <div class="card card-body" style="">
            <div style="">
                <h3>Описание</h3>
                <br>
                <p>Проектирование, изготовление, монтаж и пуско-наладка оборудования для хранения, транспортировки, выдачи углекислоты, заправки её в баллоны и огнетушители. Оборудование для технического освидетельствования и ремонта баллонов и огнетушителей. Комплексы углекислотного оборудования для приготовления защитных сварочные смеси газов и заправки их в баллоны. Комплексы оборудования для подкормки растений углекислотой. Комплексы обеспечения углекислотой линии газирования напитков, линии производства пива: - резервуары для хранения углекислоты; - полуприцеп-цистерны для транспортировки углекислоты; - газификаторы производительностью до 1100 кг/ч; - подогреватели производительностью до 1100 кг/ч; - станции перекачивания (перелива) углекислоты; - станции зарядки баллонов и огнетушителей углекислотой; - редукторы; - участки по ремонту и освидетельствованию баллонов. Оборудование применяется в пищевой промышленности, металлургии, механической обработке металлов, производстве пенополиуретановых теплоизоляционных материалов, в обслуживании систем пожаротушения, сельском хозяйстве, парфюмерной и фармацевтической промышленности, а также во многих других видах деятельности.

                </p>
            </div>
        </div>
    </div>
    <div class="collapse mb-3" id="collapse-2">
        <div class="card card-body">Наши основные задачи: <br>
            1. Гибкие, герметичные металлорукава высокого давления Ду6-250, P до 280 <br>
            2. Рем.комплект и запасные части для зарядных и перекачивающих станций: комплект уплотнений, резиновые прокладки, рукава высокого давления, краны, быстросъемные соединения.
            <br>
            3. Производство оборудования для работы с техническими газами
            <br>
            4. Обслуживание и зарядка баллонов и огнетушителей
            <br>
            5. Ремонт и техническое обслуживание спецтехники
            <br>
            6. Разработка комплексов по производству сварочных смесей газов
            <br>
            7. Разработка комплексов обеспечения углекислотой линии по газированию напитков
            <br>
            8. Поставка техники для наземного обслуживания в аэропортах, техническое обслуживание, ремонт, диагностика, продление ресурса, поставка запасных частей для:
            АКЗС-75М, АКЗС-80, ЗСЖ, АПА, ВЗ, СКДС, АКДС, СПО-15, УПГ, УМП, МП, УВЗ.
            <br>
            9. Поставка промышленной арматуры: вентили, затворы, краны, задвижки, приводы, предохранительные клапаны, индикаторы уровня, мембраны разрывные, рукава высокого давления, манометры, ТЭНы, уплотнительные кольца.</div>
        <br>
    </div>
    <div class="collapse mb-3" id="collapse-3" style="">
        <div class="card card-body" style="">
            <div style="">
                <h3>Лицензии и сертификаты</h3>
                <br>
                <br>
                <br>
                <p>Нет</p>
                <br>
                <br>
                <span style="    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
    box-sizing: border-box;
    border-collapse: collapse;
    font-size: 14px;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    touch-action: manipulation;
    cursor: pointer;
    user-select: none;
    color: #fff;
    display: inline-block;
    border-radius: 4px;
    border: none;
    background: #5ab772;
    font-family: 'Lato', sans-serif;
    font-weight: 700;
    text-shadow: none;
    text-transform: none;
    text-decoration: none;
    margin: 0;
    padding: 0 20px;
    line-height: 36px;" data-src="#send-request-popup" data-fancybox="" class="btn btn__green send-request-btn">Связаться с продавцом</span>
                </p>
            </div>
        </div>
    </div>
    <div class="collapse mb-3" id="collapse-4" style="">
        <div class="card card-body" style="">
            <div style="">
                <h3>Доставка и оплата</h3>
            </div>
        </div>
    </div>

</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {

        const collapse = document.querySelector('#collapse-1')
        collapse.addEventListener('shown.bs.collapse', (e) => {
            const cardEl = e.target.querySelector('.card');
            cardEl.classList.add('');
            cardEl.classList.add('text-white');
        });
        collapse.addEventListener('hide.bs.collapse', (e) => {
            const cardEl = e.target.querySelector('.card');
            cardEl.classList.remove('.bg-light');
            cardEl.classList.remove('text-white');
        });

    });
</script>
</div>

<div class="container">
<div style="display: flex">
    <div class="py-3">
        <a style="border: none;background: #c2c1c1" class="btn btn-primary" href="#" data-bs-toggle="collapse" data-bs-target="#collapse-5">Отзывы</a>
    </div>

    <div class="py-3">
        <a style="margin-left: 3px;border: none;background: #c2c1c1" class="btn btn-primary" href="#" data-bs-toggle="collapse" data-bs-target="#collapse-6">Вопросы-ответы</a>
    </div>


</div>
<!-- #collapse-1 -->
<div class="collapse mb-3" id="collapse-5" style="">
    <div class="card card-body" style="">
        <div style="">
            <h3>Отзывы</h3>
            <br>
            <p>О компании "Агройстроймонтаж-2" пока нет отзывов</p>
            <br>
            <p>Хотите оставить отзыв?</p>
            <br>
            <span style="    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
    box-sizing: border-box;
    border-collapse: collapse;
    font-size: 14px;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    touch-action: manipulation;
    cursor: pointer;
    user-select: none;
    color: #fff;
    display: inline-block;
    border-radius: 4px;
    border: none;
    background: #5ab772;
    font-family: 'Lato', sans-serif;
    font-weight: 700;
    text-shadow: none;
    text-transform: none;
    text-decoration: none;
    margin: 0;
    padding: 0 20px;
    line-height: 36px;" data-src="#send-opinion-popup" data-fancybox="" class="btn btn__green send-opinion-btn" data-toggle="modal" data-target="#review">Оставить отзыв</span>
            </p>
        </div>
    </div>
</div>

<div class="collapse mb-3" id="collapse-6" style="">
    <div class="card card-body" style="">
        <div style="">
            <h3>Вопросы-ответы</h3>
            <br>
            <p>Нет вопросов</p>
            <br>
            <span style="    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
    box-sizing: border-box;
    border-collapse: collapse;
    font-size: 14px;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    touch-action: manipulation;
    cursor: pointer;
    user-select: none;
    color: #fff;
    display: inline-block;
    border-radius: 4px;
    border: none;
    background: #5ab772;
    font-family: 'Lato', sans-serif;
    font-weight: 700;
    text-shadow: none;
    text-transform: none;
    text-decoration: none;
    margin: 0;
    padding: 0 20px;
    line-height: 36px;" data-src="#question-popup" data-fancybox="" class="btn btn__green send-question-btn" data-toggle="modal" data-target="#question">Задать вопрос</span>
        </div>
    </div>
</div>

</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {

        const collapse = document.querySelector('#collapse-1')
        collapse.addEventListener('shown.bs.collapse', (e) => {
            const cardEl = e.target.querySelector('.card');
            cardEl.classList.add('');
            cardEl.classList.add('text-white');
        });
        collapse.addEventListener('hide.bs.collapse', (e) => {
            const cardEl = e.target.querySelector('.card');
            cardEl.classList.remove('.bg-light');
            cardEl.classList.remove('text-white');
        });

    });
</script>
</div>

<div class="container">
    <h2>Все оборудование поставщика</h2>
    <div style="display: flex;flex-wrap: wrap">
        <h6>КАТЕГОРИИ:</h6>
        <p style="color: red;font-size: 1vw;margin-left: 10vw"><a style="color: red" href=""> Газирование минеральной воды</a></p>
        <p style="color: red;font-size: 1vw;margin-left: 3vw"><a style="color: red" href=""> Другое</a></p>
        <p style="color: red;font-size: 1vw;margin-left: 3vw"><a style="color: red" href="">Производство технических и обработка природных газов</a></p>
        <br>
        <p style="color: red;font-size: 1vw;margin-left: 20px" ><a style="color: red" href=""> Уровнемеры</a></p>
    </div>
</div>
<div class="container">
    <div style="display: flex;align-items: center" >
        <img  src="https://www.equipnet.ru/netcat_files/cache_img/1/625/200x200/263_297_16123_1.JPG" alt="">
        <div style="min-width: 65%;margin-left: 2vw">
            <p><a href="">Полуприцеп-цистерны для транспортировки жидкой двуокиси углерода, ЦЖУ </a><br>
            Категория: <a style="color: black" href="">Производство технических и обработка природных газов</a> </p>
        </div>
        <div style="margin-left: 2vw">
                <b>500 000 руб</b>
        </div>
    </div>
    <div style="margin-top: 2vw;display: flex;align-items: center" >
        <img  src="https://www.equipnet.ru/netcat_files/cache_img/1/625/200x200/263_297_16454_1.JPG" alt="">
        <div style="min-width: 65%;margin-left: 2vw">
            <p><a href="">Резервуары для хранения жидкой двуокиси углерода, РДХ </a><br>
                Категория: <a style="color: black" href=""> Производство технических и обработка природных газов</a> </p>
        </div>
        <div style="margin-left: 2vw">
            <b>500 000 руб</b>
        </div>
    </div>
    <div style="margin-top: 2vw;display: flex;align-items: center" >
        <img  src="https://www.equipnet.ru/netcat_files/cache_img/1/625/200x200/263_297_16123_1.JPG" alt="">
        <div style="min-width: 65%;margin-left: 2vw">
            <p><a href="">Станция зарядки баллонов и огнетушителей, ремкомплект, запасные части, Агростроймонтаж</a><br>
                Категория: <a style="color: black" href=""> Производство технических и обработка природных газов</a> </p>
        </div>
        <div style="margin-left: 2vw">
            <b>120 000 руб</b>
        </div>
    </div>
    <div style="margin-top: 2vw;display: flex;align-items: center" >
        <img  src="https://www.equipnet.ru/netcat_files/cache_img/1/625/200x200/263_297_16456_1.JPG" alt="">
        <div style="min-width: 65%;margin-left: 2vw">
            <p><a href="">Станция перекачивания сжиженных газов, ремкомплект, запасные части, Агростроймонтаж </a><br>
                Категория: <a style="color: black" href="">Производство технических и обработка природных газов</a> </p>
        </div>
        <div style="margin-left: 2vw">
            <b>90 000 руб</b>
        </div>
    </div>
    <div style="margin-top: 2vw;display: flex;align-items: center" >
        <img style="max-height: 200px;max-width: 200px"  src="https://www.equipnet.ru/netcat_files/no_image.png" alt="">
        <div style="min-width: 65%;margin-left: 2vw">
            <p><a href="">Аэродромная наземная техника, АКЗС-75М, АКЗС-80 </a><br>
                Категория: <a style="color: black" href="">Другое</a> </p>
        </div>
        <div style="margin-left: 2vw">
            <b>Договорная</b>
        </div>
    </div>
</div>
<div class="container" style="min-width: 90%;height: 6vw;display: flex;align-items: center">
    <p style="font-size: 1vw"><a style="color: black" href="">Показать ещё оборудование поставщика ></a></p>
</div>
<div style="background: #f2f5f8;padding-bottom:50px;padding-top: 20px " >
    <div class="container" style="">
        <h3 style="margin-top: 3vw">Похожее оборудование</h3>
        <div style="margin-top: 2vw;display: flex;align-items: center">
        <div>
            <a href="">
            <div>
                <img src="https://www.equipnet.ru/netcat_files/cache_img/1/625/200x200/263_297_8570_2.jpg" alt="">
                <p><a href="">Автомат газированной воды - напольный</a></p>
                <br>
                <br>
                <br>
                <a style="font-size: 0.8vw" href="">Москва</a>
            </div>
            </a>
        </div>
            <div>
                <a href="">
                    <div>
                        <img src="https://www.equipnet.ru/netcat_files/cache_img/1/625/200x200/263_297_assept.JPG" alt="">
                        <p><a href="">Автомат газированной воды - напольный</a></p>
                        <br>
                        <br>
                        <br>
                        <a style="font-size: 0.8vw" href="">Краснодар</a>
                    </div>
                </a>
            </div>
            <div>
                <a href="">
                    <div>
                        <img src="https://www.equipnet.ru/netcat_files/cache_img/1/625/200x200/263_297_IMG_0299_05_06_17_03_10_1_kopiya_1.JPG" alt="">
                        <p><a href="">Автомат газированной воды - напольный</a></p>
                        <br>
                        <br>
                        <br>
                        <a style="font-size: 0.8vw" href="">Самара</a>
                    </div>
                </a>
            </div>
            <div style="display:flex;flex-direction: column;align-items: center">
                <a href="">
                    <div>
                        <img src="https://www.equipnet.ru/netcat_files/cache_img/1/625/200x200/325_355_liniya_gazirovaniya_0.JPG" alt="">
                        <p style="margin-top: 4vw"><a href="">Автомат газированной воды - напольный</a></p>
                        <br>
                        <br>
                        <br>
                        <a style="font-size: 0.8vw" href="">Самара</a>
                    </div>
                </a>
            </div>

    </div>
    </div>
</div>

<div class="div" style="background:#13334b">
    <div class="container" style="min-width: 90%; border-bottom: 1px solid #b2b2b2" >
        <div style=";display: flex;align-items: center;height: 6vw">
            <p ><a style="color: white"  href="">УПРАВЛЕНИЕ ПРЕДПРИЯТИЕМ</a></p>
            <p><a style="margin-left: 1.5vw;color: white" href=""> ПОЛИТИКА ПОРТАЛА</a></p>
            <p><a style="margin-left: 1.5vw;color: white" href=""> ВЫСТАВКИ</a></p>
            <p><a style="margin-left: 1.5vw;color: white" href=""> О ПРОЕКТЕ</a></p>
            <p><a style="margin-left: 1.5vw;color: white" href=""> НОВОСТИ КОМПАНИЙ</a></p>
            <p><a style="margin-left: 1.5vw;color: white" href=""> ОБЗОР РЫНКОВ</a></p>
            <p><a style="margin-left: 1.5vw;color: white"  href=""> ЛИЗИНГ</a></p>
        </div>
        <div>
        </div>
        <div>
        </div>
    </div>
    <div class="container" style="min-width: 90%;height: 8vw;display: flex;align-items: center" >
        <p style="color: white;font-size: 20px">ПРОДАЖА ОБОРУДОВАНИЯ</p>
    </div>
</div>
<div style="background: #0a2941">
    <div class="container" style="display: flex;align-items: center">
        <div>
        <p style="font-size: 12px;color: #6793A8">2000 — 2023 © «Гипер-Пресс» <br>
            Equipnet.ru — "Оборудование для бизнеса"</p>

        </div>
        <p Style="margin-left: 7vw;font-size: 12px;color: #6793A8">
            Все материалы данного сайта, авторские права на <br> которые принадлежат EquipNet.ru, не могут быть <br> скопированы.
        </p>
        <div>
            <p Style="margin-left: 7vw;font-size: 12px;color: #6793A8">
                Реклама: <span style="color: #B8C6D4">reklama@equipnet.ru</span> <br>
                Тех. поддержка: <span style="color: #B8C6D4">support@equipnet.ru </span><br>
                Редактор сайта: <span style="color: #B8C6D4">redaktor@equipnet.ru</span> <br>
            </p>
        </div>

        <div style="margin-left: 7vw;display: flex;justify-content: space-between;align-items: center">
            <div><img src="https://www.equipnet.ru/tm/assets/img/ic/ic_vk-footer.png" alt=""></div>
            <div style="margin-left: 1vw"><img src="https://www.equipnet.ru/tm/assets/img/ic/ic_yt-footer.png" alt=""></div>
        </div>

       
    </div>
</div>
</body>
</html>