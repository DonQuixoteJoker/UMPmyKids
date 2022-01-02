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
<link rel="stylesheet" href="css/index.css">
</head>
<style>
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
	left:250px;
	width:calc(100% - 250px);
	top:0;
	z-index:100;
	transition:left 300ms;
}

.main-content
{
	margin-left:25%;
    margin-right:25%;
    

}

.main-content header
{
	width:calc(100% - 70px);
	margin-left:0;
    margin-right:0;
    
}

.heading{
	padding-top: 5px;
	color:#fff;
    text-align: center
}

main
{
	margin-top:84px;
	padding:2rem 1.5rem;
/* 	background:var(--off-white); */
	background:var(--new-BG);
	min-height:calc(100vh - 90px);
}

body
{
	background:var(--off-white);
	background:url(https://www.teahub.io/photos/full/214-2147832_3840x2160-beautiful-hills-4k-nature-wallpaper-data-4k.jpg);
	backdrop-filter:blur(10px);
	background-size:cover;
	background-repeat:no-repeat;
}

</style>

<?php include('function.php'); ?>

<body>
<div class="main-content" style="text-align: center;">
<header class="main-content">
    <h2 class="heading" id="dashboard">
        
        UMP-myKids
    </h2>
</header>


<main>

<form action="login.php" method="post" style="color: black;">
	<div>
		<?php include ('error.php'); ?>
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
</footer>
</div>
</body>
</html>