<?php
// Examples from Learning PHP, MySQL & JavaScript Ed 6 by Robin Nixon
// https://github.com/RobinNixon/lpmj6
// chapter 06 - example 06

  $paper = array("Copier", "Inkjet", "Laser", "Photo");
  $j = 0;

  foreach($paper as $item)
  {
    echo "$j: $item<br>";
    ++$j;
  }
?>
