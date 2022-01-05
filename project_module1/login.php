<!DOCTYPE html>
<html>
<head>
<title>UMP-myKids</title>
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<meta name="viewport" content="width=device-width initial-scale =1">
<meta name="description" content="how to create a toggle for light and dark mode using html,css and javascript">
<meta name="description" content="toggle dark/light mode">
<meta name="tags" content="toggle,darkmode,web design,admin dashboard,glassmorphism,codepen">
<meta name="description" content="design a website">
<meta name="description" content="create a glassmorphism website">
<meta name="keyword" content="dark mode, html,css,javascript, coding, programming, how to,learn">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--<link rel="stylesheet" href="css/index.css">-->
</head>
<style>
	:root{
	--for-heading:#3b026b;
	--main-color:#bb969e;
	--color-dark:#1d2231;
	--text-grey:#8390a2;
	--dark-BG:#001623;
	--content-BG:#022d47;
	--dark-text:#b200ff;
	--off-white:#f1f5f9;
	--icon-color:#520293;
	--purple:linear-gradient(45deg,#99013e,#7f02ed);
	--pink:linear-gradient(45deg,#c40051,#ff0066);
	--orange:linear-gradient(45deg,#ff9000,#ffd400);
	--moon:linear-gradient(45deg,#ff9000,#7f02ed);
	--moon-only:linear-gradient(45deg,#fff,#7f02ed);
	--sun:linear-gradient(45deg,#ffc700,#8300ff);
	--new-BG:rgba(255,255,255,.3);
	--new-content:rgba(255,255,255,.4);
}

*{
	padding:0;
	margin:0;
	font-family:'Rajdhani', sans-serif;
	box-sizing:border-box;
	outline:none;
	user-select:none;
	list-style-type:none;
	text-decoration:none;
	transition:all 400ms;
	overflow-x:hidden;
}

input[type=text], input[type=password], select 
{
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	box-sizing: border-box;
    color:black;
    font-size: 15px;

}

.button {
    background-color: #C3C3C3;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 2px 2px;
    cursor: pointer;
    border-radius: 4px;
}

.container 
{
	padding: 20px;
}

header
{
/* 	background:#fff; */
	background: var(--new-BG);
    display:flex;
	justify-content:space-between;
	padding:20px 1.5rem;
	box-shadow:2px 2px 5px rgba(0,0,0,.2);
	position:fixed;
	width:calc(100% - 250px);
	top:0;
	z-index:100;
	transition:left 300ms;
}


.main-content
{
	text-align: center;
}

.main-content header
{
	width: 100%;
}


.heading{
	padding-top: 5px;
	color:#fff;
	text-align: center;
}

main
{
	margin-top:75px;
	padding:2rem 1.5rem;
/* 	background:var(--off-white); */
	background:var(--new-BG);
	min-height:calc(100vh - 75px);
}

body
{
	background:var(--off-white);
	background:url(https://www.teahub.io/photos/full/214-2147832_3840x2160-beautiful-hills-4k-nature-wallpaper-data-4k.jpg);
	backdrop-filter:blur(10px);
	background-size:cover;
	background-repeat:no-repeat;
}
form
{
    background-color: #E5E5E5;
    text-align: center;
    border-radius: 9px;
    padding: 50px;
    font-size: 20px;
	margin-left:25%;
    margin-right:25%;
    align-items: center;
}

.login
{
	padding: 20px;
}

footer{
	display:flex;
	width:100%;
	align-content:flex-end;
	color:#fff;
	background:var(--new-content);
}

footer p{
	padding:0;
	margin:0;
	width:100%;
	font-size:1.3rem;
	text-align:center;
}

</style>

<?php include('function.php'); ?>

<body>
<div class="main-content">
<header class="main-content">
    <h2 class="heading" id="dashboard">
        
        UMP-myKids
    </h2>
</header>


<main>

<form action="login.php" method="post" style="color: black;">
<?php include ('error.php'); ?>
<div class="login">
	<h1>LOGIN</h1><br>
<img src="img/ump.png" alt="" height="150px" width="105px"><br><br>
	<input type="text" placeholder="Enter UserID" id="userID" name="userID" required><br><br>
	<input type="password" placeholder="Enter Password" id="userPassword" name="userPassword" required><br><br>
	<select id="userType" name="userType">
		<option value="admin">Admin</option>
		<option value="owner">Owner</option>
		<option value="UMP Staff">UMP Staff</option>
	</select><br><br>
	<input type="submit" name="login" class="button" value="LOGIN">

</div>

		
</form>
</main>

<footer id="footer">
	
	<p>Copyright 2021, All Right Reserved</p>
	
</footer>


</div>

</body>
</html>