<?php 
error_reporting(-1); #Report all PHP errors
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset='utf-8'>
    <title>Password Generator check box test</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	
</head>

<body>

	<section class='mainContent'>

		<h1>Generate Your xkcd Password</h1> <br>


		<div class="formBox">
			<h2>One Word</h2>
			<form method="GET" action="oneWord.php">
				Add Number? <input type="radio" name="additions" value="number" /> <br>
    			Add Special Character? <input type="radio" name="additions" value="character" /> <br>
    			Add Number and Special Character? <input type="radio" name="additions" value="both" /> <br>
    			
				<input type="submit" value="Generate Password" />
			</form>
		</div>

		<div class="formBox">
			<h2>Two Words</h2>
			<form method="GET" action="twoWord.php">
				Add Number? <input type="radio" name="additions" value="number" /> <br>
    			Add Special Character? <input type="radio" name="additions" value="character" /> <br>
    			Add Number and Special Character? <input type="radio" name="additions" value="both" /> <br>
    			
				<input type="submit" value="Generate Password" />
			</form>
		</div>

		<div class="formBox">
			<h2>Three Words</h2>
			<form method="GET" action="threeWord.php">
				Add Number? <input type="radio" name="additions" value="number" /> <br>
    			Add Special Character? <input type="radio" name="additions" value="character" /> <br>
    			Add Number and Special Character? <input type="radio" name="additions" value="both" /> <br>
    			
				<input type="submit" value="Generate Password" />
			</form>
		</div>

		<div class="formBox">
			<h2>Four Words</h2>
			<form method="GET" action="fourWord.php">
				Add Number? <input type="radio" name="additions" value="number" /> <br>
    			Add Special Character? <input type="radio" name="additions" value="character" /> <br>
    			Add Number and Special Character? <input type="radio" name="additions" value="both" /> <br>
    			
				<input type="submit" value="Generate Password" />
			</form>
		</div>

		<div class="formBox">
			<h2>Five Words</h2>
			<form method="GET" action="fiveWord.php">
				Add Number? <input type="radio" name="additions" value="number" /> <br>
    			Add Special Character? <input type="radio" name="additions" value="character" /> <br>
    			Add Number and Special Character? <input type="radio" name="additions" value="both" /> <br>
    			
				<input type="submit" value="Generate Password" />
			</form>
		</div>

		<div class="formBox">
			<h2>Six Words</h2>
			<form method="GET" action="sixWord.php">
				Add Number? <input type="radio" name="additions" value="number" /> <br>
    			Add Special Character? <input type="radio" name="additions" value="character" /> <br>
    			Add Number and Special Character? <input type="radio" name="additions" value="both" /> <br>
    			
				<input type="submit" value="Generate Password" />
			</form>
		</div>

		<div class="formBox">
			<h2>Seven Words</h2>
			<form method="GET" action="sevenWord.php">
				Add Number? <input type="radio" name="additions" value="number" /> <br>
    			Add Special Character? <input type="radio" name="additions" value="character" /> <br>
    			Add Number and Special Character? <input type="radio" name="additions" value="both" /> <br>
    			
				<input type="submit" value="Generate Password" />
			</form>
		</div>

		<div class="formBox">
			<h2>Eight Words</h2>
			<form method="GET" action="eightWord.php">
				Add Number? <input type="radio" name="additions" value="number" /> <br>
    			Add Special Character? <input type="radio" name="additions" value="character" /> <br>
    			Add Number and Special Character? <input type="radio" name="additions" value="both" /> <br>
    			
				<input type="submit" value="Generate Password" />
			</form>
		</div>

		<div class="formBox">
			<h2>Nine Words</h2>
			<form method="GET" action="nineWord.php">
				Add Number? <input type="radio" name="additions" value="number" /> <br>
    			Add Special Character? <input type="radio" name="additions" value="character" /> <br>
    			Add Number and Special Character? <input type="radio" name="additions" value="both" /> <br>
    			
				<input type="submit" value="Generate Password" />
			</form>
		</div>

		<br><br>
	
		<a href="http://xkcd.com/936/">View the xkcd Comic Here</a> <br><br>
	
		<img src="img/comic.png">

	</section>

</body>
</html>