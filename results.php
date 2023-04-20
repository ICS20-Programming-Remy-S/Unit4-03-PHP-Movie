<?php
  // create a variable for the movie age limit if statment text
  $result = "";
  
	// Use age user has entered for results
	$userAge = $_POST['userAge'];

?>
  
<?php
  // Display if the user can see R movies
if ($userAge >= 18) {

    echo 'You can go see R rated Movies by Yourself.';

}
  //Display if the user can go see pg-13 movies
else if ($userAge >= 13) {

    echo 'You can go see Pg-13 Movies by Yourself.';

}
  //Display if the user can go see pg movies
else if ($userAge >= 5) {

    echo 'You can go see Pg Movies by Yourself';

}
  //Display if the user can't go to movies
else if ($userAge >= 0) {

    echo 'You cannot go see Movies by Yourself';

}
//Display if user did not entre valid age
else {
     echo 'You cannot go see Movies by Yourself';
}

?> 