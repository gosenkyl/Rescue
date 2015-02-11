<?php

include_once 'db_connect.php';

$sql = "insert into animal values(null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, now())";

$type = $image = $name = $age = $approx = $breed = $sex = $size = $activity = $goodWithDogs = $goodWithCats = $goodWithChildren = $houseTrained = $fee = $description = null;

if(isset($_POST['type'])){
    $type = $_POST['type'];
}

if(isset($_POST['image'])){
    $image = $_POST['image'];
}

if(isset($_POST['name'])){
    $name = $_POST['name'];
}

if(isset($_POST['age'])){
    $age = $_POST['age'];
}

if(isset($_POST['approx']) && $_POST['approx'] == 'true'){
    $approx = 1;
} else {
    $approx = 0;
}

if(isset($_POST['breed'])){
    $breed = $_POST['breed'];
}

if(isset($_POST['sex'])){
    $sex = $_POST['sex'];
}

if(isset($_POST['size'])){
    $size = $_POST['size'];
}

if(isset($_POST['activity'])){
    $activity = $_POST['activity'];
}

if(isset($_POST['goodWithDogs'])){
    $goodWithDogs = $_POST['goodWithDogs'];
}

if(isset($_POST['goodWithCats'])){
    $goodWithCats = $_POST['goodWithCats'];
}

if(isset($_POST['goodWithChildren'])){
    $goodWithChildren = $_POST['goodWithChildren'];
}

if(isset($_POST['houseTrained'])){
    $houseTrained = $_POST['houseTrained'];
}

if(isset($_POST['fee'])){
    $fee = $_POST['fee'];
}

if(isset($_POST['description'])){
    $description = $_POST['description'];
}

if($animal = $db->prepare($sql)){
    $animal->bindValue(1, $type, PDO::PARAM_STR);
    $animal->bindValue(2, $image, PDO::PARAM_STR);
    $animal->bindValue(3, $name, PDO::PARAM_STR);
    $animal->bindValue(4, $age, PDO::PARAM_STR);
    $animal->bindValue(5, $approx, PDO::PARAM_INT);
    $animal->bindValue(6, $breed, PDO::PARAM_STR);
    $animal->bindValue(7, $sex, PDO::PARAM_STR);
    $animal->bindValue(8, $size, PDO::PARAM_STR);
    $animal->bindValue(9, $activity, PDO::PARAM_STR);
    $animal->bindValue(10, $goodWithDogs, PDO::PARAM_STR);
    $animal->bindValue(11, $goodWithCats, PDO::PARAM_STR);
    $animal->bindValue(12, $goodWithChildren, PDO::PARAM_STR);
    $animal->bindValue(13, $houseTrained, PDO::PARAM_STR);
    $animal->bindValue(14, $fee, PDO::PARAM_STR);
    $animal->bindValue(15, $description, PDO::PARAM_STR);

    $animal->execute();

    if($type == 'Dog')
        $forward = 'dogs.php';
    else if($type == 'Cat')
        $forward = 'cats.php';
    else
        $forward = 'index.php';

    header('Location: '.$forward);
}