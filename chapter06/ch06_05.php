<?php
// Examples from Learning PHP, MySQL & JavaScript Ed 6 by Robin Nixon
// https://github.com/RobinNixon/lpmj6
// chapter 06 - example 05

  $p1 = array("Copier", "Inkjet", "Laser", "Photo");

  echo "p1 element: " . $p1[2] . "<br>";

  $p2 = array('copier' => "Copier & Multipurpose",
              'inkjet' => "Inkjet Printer",
              'laser'  => "Laser Printer",
              'photo'  => "Photographic Paper");

  echo "p2 element: " . $p2['inkjet'] . "<br>";
?>
