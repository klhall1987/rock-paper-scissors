<?php

require_once 'lib/view.php';
require_once 'functions.php';

$view = new view( 'views/', '.tmpl.php');

// Set throw from Query String, if it is set
$user_throw = ( isset( $_GET['throw'] ) ) ? $_GET['throw'] : false ;

// Set throw for computer, is the user has a throw
$computers_throw = ( $user_throw ) ? computers_throw() : false;

// Determine the winner
$winner = ( $user_throw AND $computers_throw ) ? who_wins( $user_throw, $computers_throw ) : false;

$data = [
    'user_throw' => $user_throw,
    'computers_throw' => $computers_throw,
    'winner' => $winner,
];

$results_view = ( $user_throw AND $computers_throw AND $winner ) ? $view->output( 'results', $data ) : false;

echo $view->output( 'home', array( 'results_view' => $results_view ) );


