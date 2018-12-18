<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Book Cover Generator</title>
  
  
      <link rel="stylesheet" href="css/style1.css">

  
</head>

<?php

//Getting Parameters

if (empty($_GET['BookTitle'])) {
	$BookTitle ="";   
}
else
{
$BookTitle = $_GET['BookTitle'];
}
//------------------
if (empty($_GET['BookSub'])) {
	$BookSub ="";   
}
else
{
$BookSub = $_GET['BookSub'];
}
//-------------------
if (empty($_GET['Author'])) {
	$Author ="";   
}
else
{
$Author = $_GET['Author'];
}
//---------------------

if (empty($_GET['Color'])) {
	$Color ="#ffffff";   
}
else
{
$Color = $_GET['Color'];
}

//---------------------
if (empty($_GET['Pub'])) {
	$Pub ="";   
}
else
{
$Pub = $_GET['Pub'];
}
//---------------------
if (empty($_GET['PubYear'])) {
	$PubYear ="";   
}
else
{
$PubYear = $_GET['PubYear'];
}
//---------------------

?>

<body>
<script src="http://code.jquery.com/jquery-2.1.0.min.js" ></script>

<body>
<div id="formWrapper">

<div id="form">
	<form action="index.php" method="get">
			<div class="logo">
			<img src="img/Closed_Book_Icon.svg" alt="Book Cover Generator" style="width:100px;height:auto;" >
			</div>

		<div class="form-item">
			<p class="formLabel">Book Title</p>
			<input type="text" name="BookTitle" id="BookTitle" class="form-style" autocomplete="off"/>
		</div>

		<div class="form-item">
			<p class="formLabel">Book Subtitle</p>
			<input type="text" name="BookSub" id="BookSub" class="form-style" />	
		</div>

		<div class="form-item">
			<p class="formLabel">Author Name</p>
			<input type="text" name="Author" id="Author" class="form-style" />	
		</div>

		<div class="form-item">
			<p class="formLabel">Background Color</p>
			<input type="color" name="Color" id="Color" class="form-style" value="#ffffff" style="height: 3rem;" />	
		</div>

		<div class="form-item">
			<p class="formLabel">Publisher</p>
			<input type="text" name="Pub" id="Pub" class="form-style" />	
		</div>

		<div class="form-item">
			<p class="formLabel">Publishing Year</p>
			<input type="text" name="PubYear" id="PubYear" class="form-style" />	
		</div>
		
	

		<div class="form-item">
		<input type="submit" class="login pull-right" value="Generate">
		<div class="clear-fix"></div>
		</div>

	</form>






</div>
</div>

<?php
echo "<div id=\"window\" align=\"center\" style=\"background-color:$Color;\">";
echo "<br>";






//Formating

echo "<h1>$BookTitle</h1>";
echo "<h2>$BookSub</h2>";



echo "<br><br><br><br><br><br><br><br><br><br><br><br><br>";
echo "<p>written by</p>";
echo "<p>$Author</p>";

echo "<br><br><br><br><br><br><br>";

echo "<h3>$Pub</h3>";
echo "<h3>$PubYear</h3>";


/*echo "<p>$Color</p>";*/



echo "</div>";
?>

</body>
</html>

<script src="js/index.js"></script>

</body>
</html>
