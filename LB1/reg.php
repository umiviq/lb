<?php
session_start();
$connect = mysqli_connect('localhost','root','','main');

if (isset($_POST['submit'])) {

    if (empty($_POST['fullName'])) {
        $_SESSION['fullName'] = 2;
        $q = 1;
    }
    if (empty($_POST['date'])) {
        $_SESSION['date'] = 2;
        $q = 1;
    }
    if (empty($_POST['address'])) {
        $_SESSION['address'] = 2;
        $q = 1;
    }
    if (empty($_POST['gender'])) {
        $_SESSION['gender'] = 2;
        $q = 1;
    }
    if (empty($_POST['desc'])) {
        $_SESSION['desc'] = 2;
        $q = 1;
    }
    if (empty($_POST['refer'])) {
        $_SESSION['refer'] = 2;
        $q = 1;
    }
    if (empty($_POST['blood'])) {
        $_SESSION['blood'] = 2;
        $q = 1;
    }
    if (empty($_POST['factor'])) {
        $_SESSION['factor'] = 2;
        $q = 1;
    }
    if (empty($_POST['password'])) {
        $_SESSION['password1'] = 2;

    }

    if (isset($_POST['password']))
        $preg = '/[a-zA-Z_0-9]+/';
    $check = preg_match($preg, $_POST['password']);
    if($check !== true) {
        $_SESSION['password2']=2;
    }

    if (isset($_POST['password'])) {
        if (strlen($_POST['password']) < 6) {
            $_SESSION['password3'] = 2;
        }
    }


    if (!isset($q)) {

        $fullName = $_POST['fullName'];
        $date = $_POST['date'];
        $blood = $_POST['blood'];
        $factor = $_POST['factor'];
        $refer = $_POST['refer'];
        $desc = $_POST['desc'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];
        $address = $_POST['address'];

        $selectId = mysqli_query($connect,"select MAX(id) from `users`");
        $fetchId = mysqli_fetch_assoc($selectId);
        $id =$fetchId['MAX(id)'] +1;
        mysqli_query($connect, "INSERT INTO `users`(`id`, `fullName`, `date`, `address`, `gender`, `desc`, `refer`, `blood`, `factor`, `password`) values ('$id','$fullName','$date','$address','$gender','$desc','$refer','$blood','$factor','$password')");
        $_SESSION['login'] = $fullName;
        header('Location:index.php');
    }
}


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

    </head>
    <body>

    <div class="container"style="min-width: 90%">
        <div class="header" style="display: flex;justify-content: space-between;align-items: center">
            <div><img src="logo.jpg" alt=""></div>

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


    <div class="container" style="margin-top: 50px;display: flex;flex-direction: column;border: 1px solid #cbcaca">
        <h3 style="margin: auto;margin-top: 20px">Регистрация</h3>
        <form action="" method="post" style="display: flex;flex-direction: column;max-width: 100%" >
            <div class="mb-3">
                <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" name="fullName" placeholder="ФИО">

                <?php
                if (isset($_SESSION['fullName'])){
                    ?><p style="color: red">Введите ФИО</p><?php
                    unset($_SESSION['fullName']);
                }
                ?>
            </div>
            <div class="mb-3">
                <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" name="date" PLACEHOLDER="Дата рождения в виде 2000-10-20">
                <?php
                if (isset($_SESSION['date'])){
                    ?><p style="color: red">Введите дату</p><?php
                    unset($_SESSION['date']);
                }
                ?>
            </div>
            <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" name="address" placeholder="Адрес">
            <?php
            if (isset($_SESSION['address'])){
                ?><p style="color: red">Введите адресс</p><?php
                unset($_SESSION['address']);
            }
            ?>
            <div style="margin-top: 20px" class="mb-3">
                <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" name="gender" placeholder="Пол">
                <?php
                if (isset($_SESSION['gender'])){
                    ?><p style="color: red">Введите пол</p><?php
                    unset($_SESSION['gender']);
                }
                ?>
            </div>
            <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" name="desc" placeholder="Интересы">
            <?php
            if (isset($_SESSION['desc'])){
                ?><p style="color: red">Введите интересы</p><?php
                unset($_SESSION['desc']);
            }
            ?>
            <div style="margin-top: 20px" class="mb-3">
                <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" name="refer" placeholder="Ссылка на вк">
                <?php
                if (isset($_SESSION['refer'])){
                    ?><p style="color: red">Введите ссылку на вк</p><?php
                    unset($_SESSION['refer']);
                }
                ?>
            </div>
            <select  class="form-control" aria-label="Пример выбора по умолчанию" name="blood">
                <option selected>Выберете группу крови</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <?php
            if (isset($_SESSION['blood'])){
                ?><p style="color: red">Введите группу крови</p><?php
                unset($_SESSION['blood']);
            }
            ?>

            <select style="margin-top: 20px" class="form-control" aria-label="Пример выбора по умолчанию" name="factor">
                <option selected>Выберете резус-фактор</option>
                <option value="Rh-">Rh-</option>
                <option value="Rh+">Rh+</option>

            </select>
            <?php
            if (isset($_SESSION['factor'])){
                ?><p style="color: red">Введите резус-фактор</p><?php
                unset($_SESSION['factor']);
            }
            ?>

            <input style="margin-top: 20px" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" name="password" placeholder="Пароль">
            <?php
            if (isset($_SESSION['password1'])){
                ?><p style="color: red">Введите пароль</p><?php
                unset($_SESSION['password1']);
            }
            if(isset($_SESSION['password3'])){
                ?><p style="color: red">маленький пароль</p><?php
                unset($_SESSION['password3']);
            }


            ?>
            <button style="margin-top: 20px" class="btn btn-primary"  type="submit" name="submit">Отправить</button>

        </form>

