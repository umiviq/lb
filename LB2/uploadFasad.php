<?php


$dir = "img";
if(!is_dir($dir)) {
    mkdir($dir, 0777, true);
}
if (isset($_POST['upload'])){
    echo 'qwe';
    $connect = mysqli_connect('localhost','root','','main');
    if (!empty($_FILES['file'])){

        $file = $_FILES['file'];
        $name = $file['name'];
        $pathFile = __DIR__ . '/img/' .$name;

        if (!move_uploaded_file($file['tmp_name'], $pathFile)){
            echo 'Что-то не так';
        }else {
            $post = $_POST['post'];
            $desc = $_POST['desc'];
            $cost = $_POST['cost'];
            $name2 = $_POST['name'];

            $selectMaxId = mysqli_query($connect, "select MAX(id) from `img`");
            $fetchId = mysqli_fetch_assoc($selectMaxId);
            $id = $fetchId['MAX(id)'] + 1;
            mysqli_query($connect, "INSERT INTO `img`(`id`,`name`,`path`,`description`,`cost`,`post`)values ('$id','$name2','$name','$desc','$cost','$post')");

            mysqli_query($connect, "select `name` from `postavshik` where `name`='$post'");
            echo mysqli_affected_rows($connect);
            if (mysqli_affected_rows($connect) >= 1) {
                $selectIdPost = mysqli_query($connect,"select `id` from `postavshik` where `name` = '$post'");
                $fetchId = mysqli_fetch_assoc($selectIdPost);
                $id1 = $fetchId['id'];
                echo $id1;
                mysqli_query($connect, "INSERT INTO `postavshik`(`id`,`name`,`id_tovara`)values('$id1','$post','$id')");
            }else{
                $selectMaxId = mysqli_query($connect, "select MAX(id) from `postavshik`");
                $fetchId = mysqli_fetch_assoc($selectMaxId);
                $id2 = $fetchId['MAX(id)'] + 1;
                mysqli_query($connect, "INSERT INTO `postavshik`(`id`,`name`,`id_tovara`)values('$id2','$post','$id')");
            }
        }

        header('Location:/addFasad.php');
    }
}
