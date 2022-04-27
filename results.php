<?php
	// get the users number and random number
	$usersNum = $_POST['userNum'];
  $generatedNum = rand(1,6);

   if ($usersNum == $generatedNum) {
              // display the results if they guessed right 
              echo "<h4>Wow, you guessed correctly!</h4>";
            } elseif($usersNum != $generatedNum){
              // display the results if they guessed wrong
              echo "<h4>Unfortunately, you guessed incorrectly!</h4>";
            }

?>
