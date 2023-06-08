<?php
$connect = mysqli_connect('localhost','root','','main');



?>
<style>
    .input{
        margin: auto;
        min-width: 500px;
        margin-top: 20px;
    }
</style>

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

<nav class="navbar bg-body-tertiary" style="border: 1px solid #e3e2e2">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1"><a href="allFasad.php">Просмотр</a></span>
    </div>
</nav>

<div class="container" style="display: flex;flex-direction: column;border: 1px solid #cbcaca;margin-top: 100px">
    <h3 style="margin: auto;margin-top: 20px">Регистрация</h3>
    <form action="uploadFasad.php" method="POST" enctype="multipart/form-data" style="display: flex;flex-direction: column;max-width: 100%" >
        <div class="mb-3">
            <input style="border: none" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="file" name="file" placeholder="файл">

        </div>
        <div class="mb-3">
            <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" name="name" PLACEHOLDER="Название">

        </div>
        <div class="mb-3">
            <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" name="post" placeholder="Регион">
        </div>

        <div class="mb-3">
            <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" name="desc" placeholder="Описание">

        </div>

        <div class="mb-3">
            <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="number" name="cost" placeholder="Цена">
        </div>
        <input class="btn btn-primary" style="margin-top: 20px"  type="submit" value="Загрузить" name="upload">

    </form>
</body>
</html>
