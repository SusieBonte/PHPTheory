<?php

//  start number 600851475143

$startingNumber = 600851475143;

// pt1 part to generate prime numbers  x % x == 0

// pt2 part that sees if the number is divisible by the prime number  $startNumber / $primeNumber = $result

// pt 3 if yes make factor into variable?  or put in array?

// pt4 is $result less than 1?  then compare all factors to see which is highest and print

// pt5 is $result more than 1?  then start again from pt 1.
echo "<pre>";

$primes = array();
for ($x = 2; $x <= 1000; $x++) 
{
    $xIsPrime = TRUE;
    $sqrtX = sqrt($x);
    foreach ($primes as $prime) if ($prime > $sqrtX || ((!($x % $prime)) && (!$xIsPrime = FALSE))) break;
    if ($xIsPrime){($primes[] = $x);}
}

// var_dump($primes);
foreach ($primes as $maybeFactor)
{
    $remainder = ($startingNumber / $maybeFactor);
    if ($remainder == 0)
    {
        echo "remainder is 0".PHP_EOL;
        break;
    }
    
    elseif (is_int($remainder) == TRUE)
    {
        echo "factor equals = ".$maybeFactor."with remainder of = ".$remainder;
    }
}


echo "</pre>";


?>
