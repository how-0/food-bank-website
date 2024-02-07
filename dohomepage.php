<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://kit.fontawesome.com/c9e4130094.js" crossorigin="anonymous"></script>
<head><title>Donation</title></head>
<style>
body{
  margin: 0;
  padding: 0;
  background-color: #EDEDED !important;
}

.navbar {
    display: flex;
    align-items: center;
    justify-content: center;
    top: 0px;
    cursor: pointer;
}

.nav-list {
    width: 50%;
    display: flex;
}

.nav-list li {
    list-style: none;
    padding: 26px 30px;
    font-size:25px;
}

.nav-list li a {
    text-decoration: none;
    color: white;
}

.nav-list li a:hover {
    color: black;
}

.rightNav {
    width: 50%;
    text-align: right;
}

#search {
    padding: 10px;
    font-size: 17px;
    border-radius: 9px;
    border-style: 5 px solid #fff;
	border: 1px solid #ccc;
	width: 200px;
	margin-top:20px;
}

.background {
    background: grey;
    background-blend-mode: darken;
    background-size: cover;
}
.login{
	float:right;
	color:white;
	padding:20px;
	margin: 10px;
	height: 15px;
}


/* Centered text */
.centered {
  position: absolute;
  top: 50%;
  left: 70%;
  transform: translate(-50%, -50%);
  font-size:100px;
}


.footer {
    display: flex;
	justify-content:space-between;
    cursor: pointer;
	background: grey;
    background-blend-mode: darken;
    background-size: cover;
}

.col-1{
	width:33%;
	height:auto;
	margin:50px;
}

.col-1 a{
display:inline-block;
text-decoration:none;
color:#efefef;
margin-bottom:10px;
}

.col-1 a:hover{
color:red;
transition: 0.3s ease-out;
cursor:pointer;
}

.col-2{
width:33%;
height:auto;
margin:50px;
}

.col-2 a{
display:inline-block;
text-decoration:none;
color:#efefef;
margin-bottom:10px;
}

.col-2 a:hover{
color:red;
transition: 0.3s ease-out;
cursor:pointer;
}

.footer div{
	text-align:center;
}

.col-3{
	width:33%;
	height:auto;
	margin:50px;
}
.social-icons{
text-decoration:none;
margin-top:30px;
}

.social-icons i{
font-size:22px;
margin:10px;
cursor:pointer;
}

.facebook{
text-decoration:none;
color:white;
}
.twitter{
text-decoration:none;
color:white;
}
.instagram{
text-decoration:none;
color:white;
}
.pinterest{
text-decoration:none;
color:white;
}

.content{
text-align:center;
border:2px solid black;
padding:2px;
    margin-left: 350px; 
	margin-right: 350px; 

}

.button {
  background-color: grey;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.container {
    align-items: center;
    justify-content: center;
  }

.img {
    max-width: 25%;
    max-height:15%;
	float:center;
  }
  
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

.desc {
	text-align:center;
  padding-left: 300px;  
	  padding-right: 300px;  

}
</style>
<body>
<nav class="navbar background">
 <a href="homepage.php"><img class="logo" src="pictures\Screenshot 2023-07-25 074837.png" width="200px" height="auto" />
            <ul class="nav-list">
                <li><a href="record.php">Records</a></li>
                <li><a href="feedme.php">Feed Me</a></li>
				<li><a href="dohomepage.php">Donate</a></li>
                <li><a href="volunteer.php">Volunteer</a></li>
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
		<img src="pictures\depositphotos_655727758-stock-photo-organ-donation-charity-volunteer-giving.jpg" class="center">
<div class="desc">
<h1 style="font-family: sans-serif"><u>Donate for us</u></h1>
<p>
We are reaching out to kindly request your support 
through donations of money or food. 
Your contributions can make a significant difference 
in the lives of those less fortunate. 
Financial donations enable us to provide important services.
Meanwhile, food donations directly help combat hunger and ensure that 
individuals and families have access to nutritious meals. 
Your generosity will help us create a positive impact 
and bring hope to our community.
</p>
</div>
</div>

</section>

<div class="content">
<h2>Donation</h3>
<p>Feel free to donate either food or money</p>
<a href="food6.2.php" class="button">Donate Food Here</a>
<a href="money6.2.php" class="button">Donate Money Here</a>



</div>


<br><br><br>



<section>
<div class="footer">
	<div class = "col-1">
	<h3>Contact</h3>
	<i class="fa-solid fa-location-dot"></i>
	<a href = "#">No. 9 Jalan 7/118B,<br> Desa Tun Razak, Cheras,<br> ​56000 Kuala Lumpur MALAYSIA</p></a><br>
	<i class="fa-solid fa-phone"></i>
	<a>03-44559901</a><br><br>
	<i class="fa-solid fa-inbox"></i>
	<a href="www.google.com">info@whiteflagfoundation.org</a>
	</div>
	<div class = "col-2">
	<h3>Links</h3>
	<a href = "#">Food Drives/Food Banks</a><br>
	<a href = "#">Food Rescue</a><br>
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