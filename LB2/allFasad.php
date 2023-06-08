<?php
$connect = mysqli_connect('localhost','root','','main');

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
<nav class="navbar bg-body-tertiary" style="border: 1px solid #e3e2e2">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1"><a href="addFasad.php">Добавить</a></span>
    </div>
</nav>

<div class="container" style="margin-top: 40px">
    <form action="" method="post">
        <div class="mb-3" style="display:flex;">

            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="search" PLACEHOLDER="Поиск товара...">
            <button type="submit" class="btn btn-primary" name="submit">Поиск</button>
        </div>


    </form>
</div>
<?php if (!isset($_POST['submit'])){
$i=1;
$selectAllDrugs = mysqli_query($connect,"select * from `img`");
?>
<table class="table" style="margin-top: 30px">
    <thead>
    <tr>
        <th scope="col"></th>
        <th scope="col">Изображение</th>
        <th scope="col">Название</th>
        <th scope="col">Описание</th>
        <th scope="col">Цена</th>
    </tr>
    </thead>
    <tbody>
    <?php while ($product = mysqli_fetch_assoc($selectAllDrugs)){

        ?>
        <tr>
            <th scope="row"><?php echo $i?></th>
            <td><img src="img/<?php echo $product['path'] ?>" style="max-height: 200px;max-width: 200px" alt="..." class="img-thumbnail"></td>
            <td><?php echo $product['name']?></td>
            <td><?php echo $product['description']?></td>
            <td><?php echo $product['cost']; $i++;?></td>
        </tr>
        <?php
    }}else{

    $name = $_POST['search'];



    $selectAllDrugs = mysqli_query($connect,"select * from `img` where `name` like  '%$name%'");

    ?>
    <table class="table" style="margin-top: 30px">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Изображение</th>
            <th scope="col">Название</th>
            <th scope="col">Описание</th>
            <th scope="col">Цена</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($product = mysqli_fetch_assoc($selectAllDrugs)){

            ?>
            <tr>
            <th scope="row">1</th>
            <td><img src="img/<?php echo $product['path'] ?>" style="max-height: 200px;max-width: 200px" alt="..." class="img-thumbnail"></td>
            <td><?php echo $product['name']?></td>
            <td><?php echo $product['description']?></td>
            <td><?php echo $product['cost']?></td>
            </tr><?php
        }}
        ?>
    </table>


</body>
</html>
