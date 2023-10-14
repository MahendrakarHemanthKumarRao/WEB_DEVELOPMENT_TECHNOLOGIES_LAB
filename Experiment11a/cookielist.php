<html>
<head>
<title> Choose List Cookies </title>
<style>
#footer {
Position: fixed;
padding: 10px 10px 0px 10px;
bottom: 0;
width: 100%;
/* Height ofthe footer*/
height: 40px;
}
</style>
</head>
<body>
<form action="displaycookie.php" method="POST"/>
<input type="submit" name="submit" value="List Cookies"/>
</form>
<?php
setcookie("Name","Hemanth");
setcookie("Address","Hyderabad");
?>
<div id = "footer">
<p align = "center"> &copy; Venkatesh K allrights --reserved </p>
</div>
</body>
</html>