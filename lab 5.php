?>
  $num = (int) readline("Enter a number: ");

  echo "<h2>Table using while loop:</h2>";
  $i = 1;
  while ($i <= 10) {
    echo "$num x $i = " . ($num * $i) . "<br>";
    $i++;
  }

  echo "<h2>Table using do-while loop:</h2>";
  $i = 1;
  do {
    echo "$num x $i = " . ($num * $i) . "<br>";
    $i++;
  } while ($i <= 10);
?>