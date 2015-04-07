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
	   if( $users_throw == 'Rock' && ( $computers_throw == 'Lizard' || $computers_throw == 'Scissors' ) ){
	   		return 'User Wins Great Job';
	   }  elseif ($users_throw == 'Paper' && ( $computers_throw == 'Rock' || $computers_throw == "Spock" ) ){
	   		return 'User Wins Great Job';
	   }  elseif ( $users_throw == 'Scissors' && ( $computers_throw == 'Lizard' || $computers_throw == 'Paper' ) ) {
	   		return 'User Wins Great Job';
	   }  elseif ( $users_throw == 'Lizard' && ( $computers_throw == 'Spock' || $computers_throw == 'Paper' ) ) {
	   		return 'User Wins Great Job';
	   }  elseif ( $users_throw == 'Spock' && ( $computers_throw == 'Rock' || $computers_throw == 'Scissors' ) ) {
	   		return 'User Wins Great Job';
	   }  elseif ( $users_throw == $computers_throw ) {
	   		return "It's a Tie!!";
	   }  else {
	   		return 'Computer Wins, nice try!';
	   }
}
