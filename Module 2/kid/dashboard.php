<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kid Mainpage</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <style>
* {
  box-sizing: border-box;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  height: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    height:25%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 12px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
</head>
<body>
<ul>
  <li><img src="logo.png" width="150px"></li>
  <li><a href="Dashboard.php">Dashboard</a></li>
  <li><a href="../parent_1/Dashboard.php">Parent</a></li>
  <li><a href="dashboard.php">Kid</a></li>
  
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
<div id = "parent_card">
<div class="row">
  <div class="column">
    <div class="card">
    <a href="register.php"><h3>Register Kid</h3></a>
    </div>
  </div>



  <div class="column">
    <div class="card">
    <a href="kid_list_upd.php"><h3>Update Kid Profile</h3></a>
    </div>
  </div>
 
  
  
  <div class="column">
    <div class="card">
    <a href="kid_list_del.php"><h3>Delete Kid Profile</h3></a>
    </div>
  </div>
  

  
  <div class="column">
    <div class="card">
    <a href="kid_list_view.php"><h3>View Kid Profile</h3></a>
    </div>
  </div>



  <div class="column">
    <div class="card">
    <a href="kid_list.php"><h3>Report</h3></a>
    </div>
  </div>

</div>
</div>
</div>
    
</body>
</html>