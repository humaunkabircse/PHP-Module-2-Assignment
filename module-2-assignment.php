<?php


/* 
Task 1: Looping with Increment using a Function
Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20.
The function should take the arguments like start as 1, end as 20 and step as 2. You must call the function to print. Also do the same using while loop and do-while loop also.
*/
echo "Task 1 \n";

// For Loop
function printEvenNumbersForLoop($start, $end, $step)
{
  for ($i = $start; $i <= $end; $i += $step) {
    if ($i % 2 == 0) {
      echo $i . "\n";
    }
  }
}
printEvenNumbersForLoop(0, 20, 2);

// While Loop
function printEvenNumbersWhile($start, $end, $step) {
    $j = $start;
    while ($j <= $end) {
        if ($j % 2 === 0) {
            echo $j . "\n";
        }
        $j += $step;
    }
}
printEvenNumbersWhile(0, 20, 2);



/*
Task 2: Skip Multiples of 5
Create a PHP script that prints numbers from 1 to 50 using a for loop. However, when the loop encounters a multiple of 5, it should skip that number using the continue statement and continue to the next iteration.
*/
echo "Task 2 \n";
for($i = 1; $i <= 50; $i++) {
    if ($i % 5 == 0) {
        continue;
    }
    echo $i . "\n";
}


/*
Task 3: Break on Condition
Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a Fibonacci number is greater than 100, break out of the loop using the break statement.
*/
echo "Task 3 \n";
function fibonacci($n)
{
  if ($n == 0 or $n == 1)
  {
    return $n;
  }
  else
  {
    return fibonacci($n - 1) + fibonacci($n - 2);
  }
}

$fibonacci_numbers = [];
for ($i = 0; $i < 10; $i++) {
  $fibonacci_number = fibonacci($i);
  $fibonacci_numbers[] = $fibonacci_number;

  if ($fibonacci_number > 100) {
    break;
  }
}

foreach ($fibonacci_numbers as $fibonacci_number) {
  echo $fibonacci_number . "\n";
}


/*
Task 4: Fibonacci Series printing using a Function
Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take this 15 as an argument of a function and use a for loop to generate these numbers and print them by calling the function.
*/
echo "Task 4 \n";
function fibonacciSeries($n) {
    $f1 = 0;
    $f2 = 1;

    for ($i = 2; $i <= $n; $i++) {
        $next = $f1 + $f2;
        $f1 = $f2;
        $f2 = $next;
        echo $next . "\n";
    }
}
fibonacciSeries(15);