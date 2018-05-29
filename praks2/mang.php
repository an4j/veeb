<?php
/**
 * Created by PhpStorm.
 * User: anneli.jarvi
 * Date: 29.05.2018
 * Time: 20:19
 */
echo '
    <form method="post" action="'.$_SERVER["PHP_SELF"].'">
        Insert a number between [0, 50]:
        <input type="number" name="user_input"><br />
        <input type="submit" value="Check">
        </form>
    ';

if (!empty($_POST['user_input'])) {
	$num_to_guess = 42;
	$message = "";
	$guess = $_POST['user_input'];
	
	if (!isset($guess)) {
		$message = "Welcome to the guessing machine!";
	}
	elseif ($guess > $num_to_guess) {
		$message = "$guess is too big! Try a smaller number.";
	}
	elseif ($guess < $num_to_guess) {
		$message = "$guess is too small! Try a larger number.";
	}
	else {
		$message = "Well done! The number is $guess.";
	}
	if ($guess != $num_to_guess and abs($guess - $num_to_guess) < 5) {
		$message .= " You are really close!";
	}
	echo $message;
}
else $_POST['counter'] = 0;
?>