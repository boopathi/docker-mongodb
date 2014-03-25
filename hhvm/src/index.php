<?hh

function testing(bool $x): int {
  if($x === true)
     return 5;
  else
     return 0;
}

echo testing(true);
