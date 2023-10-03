<?php
// Examples from Learning PHP, MySQL & JavaScript Ed 6 by Robin Nixon
// https://github.com/RobinNixon/lpmj6
// chapter 06 - example 03

  $paper[] = "Copier";
  $paper[] = "Inkjet";
  $paper[] = "Laser";
  $paper[] = "Photo";

  for ($j = 0 ; $j < 4 ; ++$j)
    echo "$j: $paper[$j]<br>";
?>
