<?php
SESSION_START();
?>
<!DOCTYPE html>

<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://kit.fontawesome.com/c9e4130094.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="styles.css">
<body>
<nav class="navbar background">
 <a href="adminhomepage.php"><img class="logo" src="pictures\Screenshot 2023-07-25 074837.png" width="200px" height="auto" /></a>
            <ul class="nav-list" >
                <li style="font-size:21px"><a href="rec1.4.php">Records</a></li>
                <li style="font-size:21px"><a href="asg6.4.php">Feed Me</a></li>
                <li style="font-size:21px"><a href="food6.4.php">Food Donation</a></li>
				<li style="font-size:21px"><a href="money6.4.php">Money Donation</a></li>
                <li style="font-size:21px"><a href="volunteer6.4.php">Volunteer</a></li>
            </ul>
            <div class="rightNav">
                <input type="text" name="search" id="search" />
		<a href="login.php" class = "login">
                <i class="fa-solid fa-user"></i>
        </a>
            </div>
</nav>
<section>
<div class="container">
  <img src="pictures\close-up-hands-holding-food-jar_23-2149182010.avif" alt="Food" style="width:100%;height:550px;">
</div>
</section>
<section>
<div class = "container2">
<h1>ENDING HUNGER, NOURISHING HOPE.</h1>
<p><?php
if(isset($_SESSION["userName"]))
    echo "Welcome, " . $_SESSION["userName"].".";
else
    echo "Welcome. ";
?></p>
</div>
</section>
<section>
<div class = "aboutus">
<h1>ABOUT US</h1>
<img style="float: left; margin: 30px 15px 15px 0px; height: auto; width: 325px;" src = "pictures\1204543.jpg"/>
<p>
At our food bank, we're not just an organization; we're a community of caring hearts determined 
to make a real difference in people's lives. We understand the struggles faced by those dealing with
 hunger, and that's why we go the extra mile to lend a helping hand. Our team is like one big family,
 and we treat everyone who comes through our doors with warmth and compassion. From the kids who need
 a healthy meal to hardworking parents trying to make ends meet, we're here to provide not just food
 but also hope and support. Through our various programs, we aim to nourish both the body and the soul,
 offering not just meals but also the tools and resources needed to break the cycle of hunger. We've
 witnessed incredible transformations and heartwarming stories of people overcoming adversity, and each 
 success fuels our passion to do more. Together, let's build a stronger, more caring community where no 
 one has to face an empty stomach alone. Join us, and let's make a positive impact, one meal, one smile,
 and one life at a time.
 </p>
</div>
<section>
<div class="footer">
	<div class = "col-1">
	<h3>Contact</h3>
	<i class="fa-solid fa-location-dot"></i>
	<a href = "#">No. 9 Jalan 7/118B, Desa Tun Razak, Cheras, ​56000 Kuala Lumpur MALAYSIA</p></a><br>
	<i class="fa-solid fa-phone"></i>
	<a>03-44559901</a><br><br>
	<i class="fa-solid fa-inbox"></i>
	<a href="www.google.com">info@whiteflagfoundation.org</a>
	</div>
	<div class = "col-2">
	<h3>Links</h3>
	<a href = "record.php">Food Drives/Food Banks</a><br>
	<a href = "feedme.php">Food Rescue</a><br>
	<a href = "login.php">Login</a><br>
	</div>
	<div class = "col-3">
	<h3>Follow Us</h3>
		<div class = "social-icons">
			<a href="https://www.facebook.com/" class = "facebook">
				<i class="fa-brands fa-facebook"></i>
			</a>
			<a href="https://twitter.com/" class = "twitter">
				<i class="fa-brands fa-twitter"></i>
			</a>
			<a href="https://instagram.com/" class = "instagram">
				<i class="fa-brands fa-instagram"></i>
			</a>
			<a href="https://pinterest.com/" class = "pinterest">
				<i class="fa-brands fa-pinterest"></i>
			</a>
	</div>
</div>
</section>
</body>
</html>