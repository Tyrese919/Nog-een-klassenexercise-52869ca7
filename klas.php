<?php

echo "Wie zit er in de klas?".PHP_EOL;
  $namen = readline();
  $exp = explode(" ",$namen);

echo "in je klas zitten:".PHP_EOL;

foreach ($exp as $namen) {
  echo ">$namen".PHP_EOL;
}
