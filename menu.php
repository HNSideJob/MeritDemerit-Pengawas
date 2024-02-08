<!DOCTYPE html>
<?php
include('db.php');

?>

<!-- menu -->

<html>
<head>


<title>Sistem Merit Demerit Pengawas</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body style="background:#f3eaaf">

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-wide w3-padding w3-card" style="background:#fae29c " >
    <a href="menu.php" class="w3-bar-item w3-button"> Sistem Merit Demerit Pengawas </a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="Admin.php" class="w3-bar-item w3-button">Admin</a>
      <a href="Murid.php" class="w3-bar-item w3-button">Murid</a>
      <a href="Rekod.php" class="w3-bar-item w3-button">Rekod</a>
      <a href="Amalan.php" class="w3-bar-item w3-button">Amalan</a>
      <a href="logout.php" class="w3-bar-item w3-button">Log Out</a>
    </div>
  </div>
</div>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px; " id="home">
  <img class="w3-image" src="img/enlarge_menu.jpg" alt="menu" width="1500" height="800">
  <div class="w3-display-topmiddle" style="margin-top:190px" >
    <b class="w3-xxlarge "><span class="w3-padding w3-black w3-opacity-min">BORN TO LEAD</b>
  </div>
   
</header>
</body>
</html>