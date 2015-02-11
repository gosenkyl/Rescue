<?php

include_once 'db_connect.php';

$sql = "select animal_id, name, image, age, approximate_flag, breed,
		sex, size, activity, with_dogs, with_cats, with_children, house_trained,
		fee, description, created_date
		from animal
		where animal_id = ?";

if($dogSQL = $db->prepare($sql)){
    $dogSQL->bindValue(1, $_GET['animal_id'], PDO::PARAM_STR);
    $dogSQL->execute();
    $dog = $dogSQL->fetch();
}

?>

<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">

    <title>Rescue Me</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/animal-detail.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/hover.css" media="all">
    <link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>

</head>

<body style="background: #e5e5e5;">

    <?php include 'menu.php'; ?>

    <div class="wrapper">
        <div class="name">
            <?= $dog['name']; ?>
        </div>

        <div class="main-img"></div>

        
        <div class="info-wrapper">
            <div><label class="info-label">Rescue Me ID:</label><span class="info-desc"><?= $dog['animal_id']; ?></span></div>
            <div><label class="info-label">Age:</label><span class="info-desc"><?= $dog['age']; ?></span></div>
            <div><label class="info-label">Breed:</label><span class="info-desc"><?= $dog['breed']; ?></span></div>
            <div><label class="info-label">Sex:</label><span class="info-desc"><?= $dog['sex']; ?></span></div>
            <div><label class="info-label">Size:</label><span class="info-desc"><?= $dog['size']; ?></span></div>
            <div><label class="info-label">Activity Level:</label><span class="info-desc"><?= $dog['activity']; ?></span></div>
            <div><label class="info-label">Good w/ Dogs?:</label><span class="info-desc"><?= $dog['with_dogs']; ?></span></div>
            <div><label class="info-label">Good w/ Cats?:</label><span class="info-desc"><?= $dog['with_cats']; ?></span></div>
            <div><label class="info-label">Good w/ Children?:</label><span class="info-desc"><?= $dog['with_children']; ?></span></div>
            <div><label class="info-label">House Trained?:</label><span class="info-desc"><?= $dog['house_trained']; ?></span></div>
            <div><label class="info-label">Fee:</label><span class="info-desc"><?= $dog['fee']; ?></span></div>

            <div><label class="info-label">Description:</label><span class="info-desc"><?= $dog['description']; ?></span></div>
        </div>
        
    </div>


</body>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>

<script src="js/main.js"></script>

</html>