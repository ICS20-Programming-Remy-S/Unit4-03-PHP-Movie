<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Movies ages with if else statements">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Ms Raffin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>What movies you can see</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>What movies you can see by yourself</h1>";
			echo "<h3>Please enter your age</h3>";
		?>
		 <!--- A side --->
      <form action="./results.php" method="post" target="results">
        <label for="userAge">Please Enter your Age:</label>
        <input type="number" id="user-age" placeholder="Ex. 19" step="1" min="0" max="120" name="userAge"><br><br>
        <input type="submit" value="Get Results">
      </form>
			<!-- iframe for the results to show on the web page. -->
			<iframe id="results" name="results">			
	    </iframe>
    <h1>
    <img src="./images/Movies.jpg" width="500" height="300" alt="Movies">
    </h1>
	</body>
</html>