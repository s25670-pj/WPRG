<?php
$visits = isset($_COOKIE['visits']) ? $_COOKIE['visits'] : 0;
$givenNumber = 3;

if ($visits >= $givenNumber) {
  echo "Hidden site that is visible after $givenNumber number of visits";
}
else {
  $visits++;
  setcookie('visits', $visits, time() + (60 * 60));
  echo "Visit number $visits.";
}
?>