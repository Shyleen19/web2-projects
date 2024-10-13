<?php
  function is_prime($num) {
    if ($num <= 1) {
      return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
      if ($num % $i == 0) {
        return false;
      }
    }
    return true;
  }

  echo "Prime numbers from 1 to 25: ";
  for ($i = 1; $i <= 25; $i++) {
    if (is_prime($i)) {
      echo $i . ", ";
    }
  }
?>