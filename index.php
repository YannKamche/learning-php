<?php
/** PHP supports 10 primitive types which are grouped as follows

4 Scalar types
    - bool
    - int
    - float
    - string

4 Compound types
    - array
    - object
    - callable
    - iterable

2 Special types
    - resource 
    - null 
*/

$completed = true;
$score = 75;
$greeting = 'Hello';

echo $completed . '<br />';
echo $score . '<br />';
echo $greeting . '<br />';

# function to get the type of a variable
echo gettype($completed);
echo '<br />';
# var_dump prints everything it knows about the expression you pass to it
var_dump($completed);
var_dump($score);
var_dump($greeting);

echo '<br />';

# COMPOUND TYPES
$companies = [1, 2, 3, 0.5, -9.2, 'A', 'b', true];
# echo $companies; will not work
print_r($companies)

#PHP is a weakly typed programming language meaning that the data type of variables are determined at runtime.

#You can make use of strict_types in order to avoid Type Juggling by using 👇🏾
declare(strict_types=1);

# Type hinting
function sum(int $x, int $y) {
    var_dump($x, $y);
    echo '<br />';
    return $x + $y;
}

$sum = sum(2, '3'); # Even though variable y is a string it is coming as a variable in the function above
# That is called 'Type Juggling / Type Coercion. The type of the variable is determined by the context in which it is used

echo $sum . '<br />';
var_dump($sum);


# STRICT TYPES
$string = (int) '4';
echo $string;
echo '<br />';
var_dump($string);




?>