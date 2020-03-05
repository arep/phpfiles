<?php
  $times=10000000;
  if (isset($_GET['loop'])) $times=$_GET['loop'];
  $st=microtime(true);
  $x = 0.0001;
  for ($i = 0; $i <= $times; $i++) {
    $x += sqrt($x);
  }
  echo "OK! $x<br>";
  echo "took: ".(microtime(true)-$st)."s";
