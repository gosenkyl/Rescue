<?php

include_once 'db_connect.php';

$sql = "select animal_id, name, image, age, approximate_flag, breed,
		sex, size, activity, with_dogs, with_cats, with_children, house_trained,
		fee, description, created_date
		from animal
		where type = 'Dog'
		order by created_date asc";

if($dogs = $db->prepare($sql)){
	$dogs->execute();
	$dogList = $dogs->fetchAll(PDO::FETCH_ASSOC);
}

?>

<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">

        <title>Rescue Me</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="css/dogs.css">
		<link rel="stylesheet" href="css/all.css">
		<link rel="stylesheet" href="css/hover.css" media="all">
		<link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
	</head>
	<body style="background: #e5e5e5;">

		<?php include 'menu.php'; ?>

		<div class="wrapper">
		
			<ul class="flex-container">

				<?php foreach($dogList as $dog){ ?>

			  		<li class="flex-item">
						<div class="item-header">
							<?= $dog["name"]; ?>
						</div>
						<div class="item-photo">
							<img src="img/doge2.png" />
						</div>
						<div class="item-detail">
							detail
						</div>
						<div class="detail-content">
							<!--<ul>
								<li><div class="item"><div class="label">Rescue Me ID:</div><div class="desc"><?/*= $dog['animal_id']; */?></div></div></li>
								<li><div class="item"><div class="label">Age:</div><div class="desc"><?/*= $dog['age']; */?></div></div></li>
								<li><div class="item"><div class="label">Breed:</div><div class="desc"><?/*= $dog['breed']; */?></div></div></li>
								<li><div class="item"><div class="label">Sex:</div><div class="desc"><?/*= $dog['sex']; */?></div></div></li>
								<li><div class="item"><div class="label">Size:</div><div class="desc"><?/*= $dog['size']; */?></div></div></li>
								<li><div class="item"><div class="label">Activity:</div><div class="desc"><?/*= $dog['activity']; */?></div></div></li>
								<li><div class="item"><div class="label">Good with Dogs:</div><div class="desc"><?/*= $dog['with_dogs']; */?></div></div></li>
								<li><div class="item"><div class="label">Good with Cats:</div><div class="desc"><?/*= $dog['with_cats']; */?></div></div></li>
								<li><div class="item"><div class="label">Good with Children:</div><div class="desc"><?/*= $dog['with_children']; */?></div></div></li>
								<li><div class="item"><div class="label">House Trained:</div><div class="desc"><?/*= $dog['house_trained']; */?></div></div></li>
								<li><div class="item"><div class="label">Adoption Fee:</div><div class="desc"><?/*= $dog['fee']; */?></div></div></li>
							
								<li><div class="item"><div class="label">Description:</div><div class="desc"><?/*= $dog['description']; */?></div></div></li>
								
							</ul>-->

							<ul>
								<li>Age:&nbsp;<?= $dog['age']; ?></li>
								<li>Breed:&nbsp;<?= $dog['breed']; ?></li>
								<li>Sex:&nbsp;<?= $dog['sex']; ?></li>
								<li>Adoption Fee:&nbsp;$<?= $dog['fee']; ?></li>
							</ul>

							<div class="more">
								<a href="animal_detail.php?animal_id=<?= $dog['animal_id']; ?>" class="more">more</a>
							</div>
						</div>

						<input type="hidden" value="<?= $dog['animal_id']; ?>" id="animal-id" />
					</li>
				<?php } ?>
			</ul>
		</div>
		
	</body>
	
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>

	<script src="js/main.js"></script>
	
	<script>
		$('.item-detail').on('click', function() {

			$(this).siblings('.detail-content').toggleClass('is-active');
		});

		$('.item-header').on('click', function() {

			var animalId = $(this).siblings('#animal-id');

			window.location = 'animal_detail.php?animal_id='+animalId[0].value;

		});

	</script>
	
	
	
</html>









