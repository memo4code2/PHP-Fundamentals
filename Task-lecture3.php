<?php
// Do..While Search : https://drive.google.com/file/d/1DVYmPE9Zcn-CIocnAJcLNhQIHS4ZewAl/view?usp=drive_link
/*
|--------------------------------------------------------------------------
| PHP Sheet #3
| Arrays, Loops, Conditions, Strings & Functions
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Question 1
| Create a script that displays:
| 1-2-3-4-5-6-7-8-9-10
| There will be no hyphen (-) at the beginning or end.
|--------------------------------------------------------------------------
*/

// for ($i = 1; $i <= 10; $i++)
// {
//     if ($i == 1)
//     {
//         echo $i;
//     }
//     else
//     {
//         echo "-" . $i;
//     }
// }


/*
|--------------------------------------------------------------------------
| Question 2
| Remove duplicate numbers from the array,
// then sort it in ascending order.
|
| Input:
| $numbers = [1,1,1,2,2,3,6,7,7,4,5,5];
|
| Output:
| [1,2,3,4,5,6,7]
|--------------------------------------------------------------------------
*/

// $numbers = [1, 1, 1, 2, 2, 3, 6, 7, 7, 4, 5, 5];

// $numbers = array_unique($numbers);

// sort($numbers);

// echo "[" . implode(", ", $numbers) . "]";


/*
|--------------------------------------------------------------------------
| Question 3
| Count how many times the character "r"
| exists in the string "eraasoft".
|--------------------------------------------------------------------------
*/

// $Text = "eraasoft";

// $CharacterCount = substr_count($Text, "r");

// echo $CharacterCount;


/*
|--------------------------------------------------------------------------
| Question 4
| FizzBuzz
|
| Loop from 1 to 50:
| - Multiple of 3  => Fizz
| - Multiple of 5  => Buzz
| - Multiple of both => FizzBuzz
|--------------------------------------------------------------------------
*/

// for ($i = 1; $i <= 50; $i++)
// {
//     if ($i % 3 === 0 && $i % 5 === 0)
//     {
//         echo $i . " = FizzBuzz<br>";
//         echo "<hr>";
//     }
//     elseif ($i % 3 === 0)
//     {
//         echo $i . " = Fizz<br>";
//     }
//     elseif ($i % 5 === 0)
//     {
//         echo $i . " = Buzz<br>";
//     }
//     else
//     {
//         echo $i . " = Not A Fizz or Buzz" . "<br>";
//     }
// }


/*
|--------------------------------------------------------------------------
| Question 5
| Using a for loop,
| calculate the sum of numbers from 0 to 30.
|
| Output:
| The sum of the numbers 0 to 30 is 465
|--------------------------------------------------------------------------
*/

// $total = 0;

// for ($i = 0; $i <= 30; $i++)
// {
//     $total += $i;
// }

// echo "calculate the sum of numbers is " . $total;


// -----------------------------------------------------

// $ArrayofNumpers = [];

// for ($i = 0; $i <= 30; $i++)
// {
//     array_push($ArrayofNumpers, $i);
// }

// echo "The Sum of Numper Is " . array_sum($ArrayofNumpers);


/*
|--------------------------------------------------------------------------
| Question 6
| Create a function that returns
| the largest number in an array.
|
| $numbers = [5,15,-10,100,250,0,1];
|--------------------------------------------------------------------------
*/

// $numbers = [5, 15, -10, 100, 250, 0, 1];

// function theLarge($TheArray)
// {
//     return max($TheArray);
// }

// echo "The Large numper is" . theLarge($numbers);


/*
|--------------------------------------------------------------------------
| Question 7
| Create a function that returns
| the smallest number in an array.
|
| $numbers = [5,15,-10,100,250,0,1];
|--------------------------------------------------------------------------
*/

// $numbers = [5, 15, -10, 100, 250, 0, 1];

// function theSmall($TheArray)
// {
//     return min($TheArray);
// }

// echo "The Small numper is" . theSmall($numbers);


/*
|--------------------------------------------------------------------------
| Question 8
| Calculate the factorial of a number
| using a for loop.
|
| Example:
| 4! = 4 × 3 × 2 × 1 = 24
|--------------------------------------------------------------------------
*/

// $number = 4;
// $factorial = 1;

// for ($i = 1; $i <= $number; $i++)
// {
//     $factorial *= $i;
// }

// echo $factorial;


/*
|--------------------------------------------------------------------------
| Question 9
| Print all odd numbers from 1 to 15
| using a while loop.
|--------------------------------------------------------------------------
*/

// $i = 1;

// while ($i <= 15)
// {
//     if ($i % 2 === 1)
//     {
//         echo "The odd Numper is " . $i . "</br>";
//     }

//     $i++;
// }


/*
|--------------------------------------------------------------------------
| Question 10
| Print all even numbers from 1 to 15
| using a while loop.
|--------------------------------------------------------------------------
*/

// $i = 1;

// while ($i <= 15)
// {
//     if ($i % 2 === 0)
//     {
//         echo "The Even Numper is " . $i . "</br>";
//     }

//     $i++;
// }


/*
|--------------------------------------------------------------------------
| Question 11
| Print the keys and values of
| an associative array using foreach.
|
| $person = [
|     "name" => "John",
|     "age"  => 30,
|     "city" => "New York"
| ];
|--------------------------------------------------------------------------
*/

// $person = [
//     "name" => "John",
//     "age"  => 30,
//     "city" => "New York"
// ];

// foreach ($person as $Key => $Values)
// {
//     echo $Key . ": " . $Values . "</br>";
// }


/*
|--------------------------------------------------------------------------
| Question 12
| Calculate the sum of the values
| in an associative array using foreach.
|
| $sales = [
|     "Jan" => 100,
|     "Feb" => 200,
|     "Mar" => 150
| ];
|--------------------------------------------------------------------------
*/

// $sales = [
//     "Jan" => 100,
//     "Feb" => 200,
//     "Mar" => 150
// ];

// $numbers = [];

// foreach ($sales as $month => $values)
// {
//     $numbers[] = $values;
// }

// echo array_sum($numbers);


/*
|--------------------------------------------------------------------------
| Question 13
| Print the multiplication table of 8
| using a for loop.
|--------------------------------------------------------------------------
*/

// for ($i = 1; $i <= 12; $i++)
// {
//     echo "8 × " . $i . " = " . (8 * $i) . "<br>";
// }


/*
|--------------------------------------------------------------------------
| Question 14
| Print the elements of a multidimensional array
| using nested foreach loops.
|
| $students = [
|     [
|         "name"  => "John",
|         "age"   => 20,
|         "grade" => "A"
|     ],
|     [
|         "name"  => "Mary",
|         "age"   => 22,
|         "grade" => "B"
|     ],
|     [
|         "name"  => "Tom",
|         "age"   => 18,
|         "grade" => "A"
|     ]
| ];
|--------------------------------------------------------------------------
*/

// $students = [
//     [
//         "name"  => "John",
//         "age"   => 20,
//         "grade" => "A"
//     ],
//     [
//         "name"  => "Mary",
//         "age"   => 22,
//         "grade" => "B"
//     ],
//     [
//         "name"  => "Tom",
//         "age"   => 18,
//         "grade" => "A"
//     ],
// ];

// foreach ($students as $student)
// {
//     foreach ($student as $key => $value)
//     {
//         echo $key . ": " . $value . "<br>";
//     }

//     echo "<hr>";
// }


/*
|--------------------------------------------------------------------------
| Question 15
| Print all numbers between 1 and 100
| that are divisible by 3
| using a do...while loop.
|--------------------------------------------------------------------------
*/

$i = 1;

do
{
    if ($i % 3 === 0)
        echo "The Numper {$i} is ÷ by 3" . "</br>";

    $i++;

} while ($i <= 100);
