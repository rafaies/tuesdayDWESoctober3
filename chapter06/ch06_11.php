<?php
// Examples from Learning PHP, MySQL & JavaScript Ed 6 by Robin Nixon
// https://github.com/RobinNixon/lpmj6
// chapter 06 - example 11

// This example is corrected from the one in the book,
// which had two extra blank rows in the center.

$chessboard = array(
	array('r', 'n', 'b', 'q', 'k', 'b', 'n', 'r'),
	array('p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
	array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
	array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
	array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
	array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
	array('P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
	array('R', 'N', 'B', 'Q', 'K', 'B', 'N', 'R')
  );

  echo "<pre>";

  foreach($chessboard as $row)
  {
    foreach ($row as $piece)
      echo "$piece ";

    echo "<br>";
  }

  echo "</pre>";
?>
