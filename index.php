<?php

/*
|--------------------------------------------------------------------------
|Question 1
|--------------------------------------------------------------------------
*/

$name = "memos";
$$name = "the sec with memos";

// echo $memos;

define("TAX", 50);

// echo TAX;


/*
|--------------------------------------------------------------------------
| Question 2
| Record 3 numbers and print:
| (First + Second) * Third
|--------------------------------------------------------------------------
*/

// $firstNumber = 5;
// $secondNumber = 10;
// $thirdNumber = 15;

// $total = ($firstNumber + $secondNumber) * $thirdNumber;

// echo $total;


/*
|--------------------------------------------------------------------------
| Question 3
| Calculate Box Size
| Size = Length × Width × Height
|--------------------------------------------------------------------------
*/

// $length = 5;
// $width  = 10;
// $height = 35;

// $size = $length * $width * $height;

// echo $size;


/*
|--------------------------------------------------------------------------
| Question 4
| Convert Hours To Seconds
|--------------------------------------------------------------------------
*/

// $hours = 2;

// $seconds = $hours * 3600;

// echo $seconds;


/*
|--------------------------------------------------------------------------
| Alternative Solution Using Function
|--------------------------------------------------------------------------
*/

// function convertHoursToSeconds($hours)
// {
//     return $hours * 3600;
// }

// echo convertHoursToSeconds(2);


/*
|--------------------------------------------------------------------------
| Question 5
| Calculate Triangle Area
|--------------------------------------------------------------------------
*/

// $base = 10;
// $height = 6;

// $area = ($base * $height) / 2;

// echo $area;


/*
|--------------------------------------------------------------------------
| Question 6
| Convert Age To Days
|--------------------------------------------------------------------------
*/

// function ageCalculator($age)
// {
//     return $age * 365;
// }

// echo "Days = " . ageCalculator(23);


/*
|--------------------------------------------------------------------------
| Question 7
| Get String Length
|--------------------------------------------------------------------------
*/

$sentence = "EraaSoft Learn by practice";

// echo strlen($sentence);


/*
|--------------------------------------------------------------------------
| Question 8
| Get String Length Without Spaces
|--------------------------------------------------------------------------
*/

// $noSpace = str_replace(" ", "", $sentence);

// echo strlen($noSpace);


/*
|--------------------------------------------------------------------------
| Question 9
| Count Words
|--------------------------------------------------------------------------
*/

// echo str_word_count($sentence);


/*
|--------------------------------------------------------------------------
| Question 10
| Check If "by" Exists
|--------------------------------------------------------------------------
*/

// if (strpos($sentence, "by") !== false)
// {
//     echo "The word was found.";
// }
// else
// {
//     echo "The word was not found.";
// }


/*
|--------------------------------------------------------------------------
| Question 11
| Get the word (EraaSoft) from the string and print it
|--------------------------------------------------------------------------
*/

// echo substr($sentence, 0, 8);


/*
|--------------------------------------------------------------------------
| Question 12
| Remove the word (by) from the string and print the string
| with and without (by)
|--------------------------------------------------------------------------
*/

// echo str_replace("by", "", $sentence);


/*
|--------------------------------------------------------------------------
| Question 13
| Make a new variable called (Full_string)
| that concatenate string_one and string_two
|--------------------------------------------------------------------------
*/

// $stringOne = "Eraa";
// $stringTwo = "Soft";

// $fullString = $stringOne . $stringTwo;

// echo $fullString;


/*
|--------------------------------------------------------------------------
| Question 14
| Compare the full_string and this string (EraaSoft)
|--------------------------------------------------------------------------
*/

// if ($fullString === "EraaSoft")
// {
//     echo "Found";
// }
// else
// {
//     echo "Not Found";
// }


/*
|--------------------------------------------------------------------------
| Question 15
| Split String
|--------------------------------------------------------------------------
*/

// $sampleString = "ErraSoft";

// echo rtrim(chunk_split($sampleString, 2, "/"), "/");


/*
|--------------------------------------------------------------------------
| Question 16
| Check Odd Or Even
|--------------------------------------------------------------------------
*/

// $number = 4;

// if ($number % 2 === 0)
// {
//     echo "The Number is Even";
// }
// else
// {
//     echo "The Number is Odd";
// }


/*
|--------------------------------------------------------------------------
| Question 17
| Check if the string contains "gain" or "peen"
|--------------------------------------------------------------------------
*/

$description = "no pain , no gain";

if (
    strpos($description, "gain") !== false ||
    strpos($description, "peen") !== false
)
{
    echo "success word";
}
else
{
    echo "wrong word";
}

/*
|--------------------------------------------------------------------------
| Question 18 
 A Boolean is a data type that has only two values true or false. These values often correspond to 1 (true) or 0 (false). When a 1 or a 0 is used, it's called an int Boolean. Write a PHP script that stores an int Boolean and outputs its opposite
 	(1 becomes 0 and 0 becomes 1).
|--------------------------------------------------------------------------
*/


// $value= 1 ;

// if($value === 1)
// {
//     echo 0 ;
// }
// else
// {
//     echo 1 ;
// }



/*
|--------------------------------------------------------------------------
| Question 19 
 Write a PHP script that stores a word and determines Is the Word is Singular or Plural? (A plural word is one that ends in "s".)
|--------------------------------------------------------------------------
*/



$word = "Cats" ;


if( substr($word, -1) ==="s"){
    echo "the word is Plural" ;
}else{
    echo "the word is Singular";
}





/*
|--------------------------------------------------------------------------
| Question 20 
Make a calculator with these operations using if and else if
o Submission |--------------------------------------------------------------------------
*/





$num1 = 20;
$num2 = 5;

$operation = "+";   // + - * / ** %

if ($operation === "+")
{
    echo $num1 + $num2;
}
elseif ($operation === "-")
{
    echo $num1 - $num2;
}
elseif ($operation === "*")
{
    echo $num1 * $num2;
}
elseif ($operation === "/")
{
    echo $num1 / $num2;
}
elseif ($operation === "**")
{
    echo $num1 ** $num2;
}
elseif ($operation === "%")
{
    echo $num1 % $num2;
}
else
{
    echo "Invalid Operation";
}












