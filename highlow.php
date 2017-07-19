<?php
// game picks a random number between 1 and 100
$randomNumber =(mt_rand(1,100));
echo $randomNumber;
$numberofTries = 1;

do {
	// prompts user to guess the number
	fwrite(STDOUT, 'Guess');
	// Get the input from user
	$playerAnswer = fgets(STDIN);
// if user's guess is less than the number, it outputs "LOWER"
	if ($playerAnswer < $randomNumber){
	echo "HIGHER!" . PHP_EOL;
	$numberofTries++;
// if user's guess is more than the number, it outputs "HIGHER"
	} else if ($playerAnswer > $randomNumber){
	echo "LOWER!" . PHP_EOL;
	$numberofTries++;
// you win
	} else if ($playerAnswer = $randomNumber){
	echo "YOU WIN!";
	echo $numberofTries;
	}
}
while ($playerAnswer != $randomNumber);

?>