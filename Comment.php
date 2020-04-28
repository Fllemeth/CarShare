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

    <form name="feedback" method="POST" action="">
        <input type="text" name="nickname" placeholder="Nickname"><br>
        <textarea name="text" placeholder="Text"></textarea><br>
        <input type="submit" name="send" value="Send">
    </form>
    <?php
    mysqli_query($con, "INSERT INTO `comments` (`nickname`, `text`) VALUES ('".$_POST['nickname']."', '".$_POST['text']."')");
    ?>

<a class="button" href="/Car.php?id=<?php echo $_GET['id'] ?>#comment">Back</a><br>

</body>

</html>
