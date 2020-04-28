<?php
include "Config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>C&S Car Share</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<p class="generalart"><img src="/Photoes/carsharing.jpg" width="100%"></p>
<?php
$car = mysqli_query($con, "SELECT * FROM `car` WHERE `id` = " . $_GET['id']);
?>

<?php
$carid = mysqli_fetch_assoc($car);
?>

<div>
    <p class="art"><img src="/Photoes/<?php echo $carid['CarImage']; ?>" width="800"></p>
    <p class="h1"><?php echo $carid['CarName']; ?></p>
    <p class="text"><?php echo $carid['CarDescription']; ?></p>
</div>

<a class="button" href="Comment.php?id=<?php echo $carid['id'] ?>">Comment</a><br>

        <?php

        $com = mysqli_query($con, "SELECT * FROM `comments`");

        while ($comments = mysqli_fetch_assoc($com)){
        ?>
            <p class="inf"><?php echo $comments['nickname']; ?><br><?php echo $comments['text']; ?></p>
    <?php
        }
    ?>

    <p class="text">Go to main page:</p>
    <a class="button" href="CarShare.php">Main</a><br>
    <p class="inf">Contacts:<br>+678 876 76 76<br>
        Lunacharskogo str. Kyiv Ukraine.<br>
        © 2010 - 2019  ООО «Car Service»</p>

</body>

</html>
