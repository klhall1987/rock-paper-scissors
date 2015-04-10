<?php

/**
 * Computer's Throw
 *
 * Return a random throw.
 * Options: rock, paper, or scissors
 *
 * @return string
 */
function computers_throw() {
	$comp_Throws = array( 'Rock' , 'Paper' , 'Scissors' , 'Lizard' , 'Spock' );
    return $comp_Throws[array_rand ( $comp_Throws ) ];
}

/**
 * Who Wins?
 *
 * Accept two throws and return a winner.
 *
 * @param $users_throw
 * @param $computers_throw
 * @return string
 */
function who_wins( $users_throw, $computers_throw) {
	$user_Wins = 'User Wins, Great Job!!!';
	$tie = 'You tied try again!'; 
	$computer_Win = 'The Computer Wins, Play again!!';

	switch ($users_throw) {
		case 'Rock':
			if ( $computers_throw == 'Scissors' || $computers_throw == 'Lizard' ){
			return $user_Wins; } else {	return $computer_Win; 	}
		case 'Paper':
			if ( $computers_throw == 'Rock' || $computers_throw == 'Spock' ){
				return $user_Wins; } else {	return $computer_Win; 	}
		case 'Scissors':
			if ( $computers_throw == 'Lizard' || $computers_throw == 'Paper' ){
				return $user_Wins; } else {	return $computer_Win; 	}
		case 'Lizard':
			if ( $computers_throw == 'Spock' || $computers_throw == 'Paper' ) {
				return $user_Wins; } else {	return $computer_Win; 	}
		case 'Spock':
			if ( $computers_throw == 'Rock' || $computers_throw == 'Scissors' ) {
				return $user_Wins; } else {	return $computer_Win; 	}
		}


}