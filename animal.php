<?php

?>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">

    <title>Rescue Me</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
</head>

<style>

    body{
        background: #e5e5e5;
        margin-left: 150px;
        margin-right: 150px;
    }

    .header{
        text-align: center;
        color: #3B8686;
        font-family: 'Francois One', sans-serif;
        font-weight: 800;
        font-size: 24px;
    }

    .wrapper{
        color: #FFFFFF;
        background: #3B8686;
        padding: 20px;
    }

    .input-element{
        margin-top: 20px;
    }

    label{
        display: inline-block;
        width: 30%;
        text-align: right;
        vertical-align: top;
        padding-right: 15px;
    }

    .submit{
        background: #e5e5e5;
        color: #3B8686;
    }


</style>


<html>
    <body>
        <form action="add_animal.php" method="post" id="input-form" class="input-form">

            <div class="header">
                Add A Pet
            </div>

            <div class="wrapper">
                <div class="input-element">
                    <label>Rescue Me ID:</label>
                    <?php if(isset($_POST['id'])){ echo $_POST['id']; } ?>
                </div>

                <div class="input-element">
                    <label>Type:</label>
                    <select name="type">
                        <option value="Dog">Dog</option>
                        <option value="Cat">Cat</option>
                    </select>
                </div>

                <div class="input-element">
                    <label>Image:</label>
                    <input type="text" name="image" readonly="true" value="doge2.png" />
                </div>

                <div class="input-element">
                    <label>Name:</label>
                    <input type="text" name="name" />
                </div>

                <div class="input-element">
                    <label>Age:</label>
                    <input type="text" name="age" />

                    <input type="checkbox" value="true" name="approx" />
                    <label style="text-align: left;">Approximate</label>
                </div>

                <div class="input-element">
                    <label>Breed:</label>
                    <input type="text" name="breed" />
                </div>

                <div class="input-element">
                    <label>Sex:</label>
                    <select name="sex">
                        <option value""></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div class="input-element">
                    <label>Size:</label>
                    <input type="text" name="size" />
                </div>

                <div class="input-element">
                    <label>Activity:</label>
                    <input type="text" name="activity" />
                </div>

                <div class="input-element">
                    <label>Good with Dogs:</label>
                    <select name="goodWithDogs">
                        <option value""></option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                        <option value="Unknown">Unknown</option>
                    </select>
                </div>

                <div class="input-element">
                    <label>Good with Cats:</label>
                    <select name="goodWithCats">
                        <option value""></option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                        <option value="Unknown">Unknown</option>
                    </select>
                </div>

                <div class="input-element">
                    <label>Good with Children:</label>
                    <select name="goodWithChildren">
                        <option value""></option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                        <option value="Unknown">Unknown</option>
                    </select>
                </div>

                <div class="input-element">
                    <label>House Trained:</label>
                    <select name="houseTrained">
                        <option value""></option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div class="input-element">
                    <label>Adoption Fee:</label>
                    <input type="text" name="fee" />
                </div>

                <div class="input-element">
                    <label>Description:</label>
                    <textarea name="description" cols="50" rows="10" ></textarea>
                </div>

                <div style="text-align: center; padding: 20px;">
                    <input type="submit" value="Submit" class="submit"/>
                </div>
            </div>
        </form>
    </body>
</html>
