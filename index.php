<?php include 'india.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>	(live) COVID-19 CORONAVIRUS TRACKER INDIA</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="COVID-19 CORONAVIRUS TRACKER INDIA,corona,corona india">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Fredoka+One&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-light bg-light fixed-top">
  <span class="navbar-brand mb-0" style="font-family: 'Bree Serif', serif;">CORONAVIRUS TRACKER INDIA <img src="./1.png" style="height: 30px; width: 40px;"></span>
</nav>
<br>
<br>
<br>
<h3 class="text-center" style="font-family: 'Fredoka One', cursive; ">Coronavirus Cases:</h3>
<h3 class="text-center" style="font-family: 'Fredoka One', cursive;  color: #a5a5a5"><?php echo $cases;  ?></h3>
<br>
<h3 class="text-center" style="font-family: 'Fredoka One', cursive;">Deaths:</h3>
<h3 class="text-center" style="font-family: 'Fredoka One', cursive; color: #ff5c6a"><?php echo $deaths;  ?></h3>
<br>
<h3 class="text-center" style="font-family: 'Fredoka One', cursive;">Recovered:</h3>
<h3 class="text-center" style="font-family: 'Fredoka One', cursive; color: #77dd77"><?php echo $recovered;  ?></h3>
<br>
<h3 class="text-center" style="font-family: 'Fredoka One', cursive;">Active Cases:</h3>
<h3 class="text-center" style="font-family: 'Fredoka One', cursive; color: #4b7fff">
	<?php echo $active;  ?>
</h3>
<br>
<h3 class="text-center" style="font-family: 'Fredoka One', cursive;">Todays Cases:</h3>
<h3 class="text-center" style="font-family: 'Fredoka One', cursive; color: #542a66"><?php echo $todayCases;  ?></h3>


<div class="d-flex justify-content-center">
	<a href="./pre.html"><button type="button" class="btn btn-primary text-center ml" >Precautions</button></a>&nbsp;&nbsp;
	<a href="./index.php"><button type="button" class="btn btn-success text-center">Refresh Data</button></a>&nbsp;&nbsp;
	<a href="./index2.php"><button type="button" class="btn btn-primary text-center">World Tracker</button></a>
</div>
<div class="fixed-bottom" style=" background-color: black; color: white; font-size: 13px;"> This tracker is developed in <a href="http://www.vbspu.ac.in/"> V.B.S. Purvanchal University Jaunpur</a> <br>developer : <a href="https://www.linkedin.com/in/veer-pratap-singh-67aa4352/">&copy; Veer Pratap Singh </a></div>






<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>