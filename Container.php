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
			<div>
				<p class="generalart"><img src="Photoes/carsharing.jpg" width="100%"></p>
				<p class="h1">Chose beetwen the best</p>
				<p class="text">We have german, reliable, modern, brand-new cars, which comply with eco standards and will make your trip comfortable.</p>
				<p class="h1">Our cars</p>

                <?php
                    $result = mysqli_query($con, "SELECT * FROM `car`");
                ?>

                <?php
                    while( $art = mysqli_fetch_assoc($result)){
                ?>
                        <div class="blok">
                            <a href="Car.php?id=<?php echo $art['id']; ?>">
                            <div class="teaser1">
                                <p class="art"><img src="/Photoes/<?php echo $art['CarImage']; ?>" width="380"></p>
                                <h2 class="h3"><?php echo $art['CarName']; ?></h2>
                            </div>
                            </a>
                        </div>
                <?php
                    }
                ?>
			<p class="h1">Any questions?</p>
			<p class="text">Check out our Frequently Asked Questions:</p>
			<a class="button">FAQs</a><br>
			<p class="inf">Contacts:<br>+678 876 76 76<br>  
Lunacharskogo str. Kyiv Ukraine.<br>                
© 2010 - 2019  ООО «Car Service»</p>
			</div>

	</body>

</html>