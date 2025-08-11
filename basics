/** 
<?php
// Print Hello world
//You can equally execute your php in the command line 

echo 'Hello World';

// Another way to print something is to use 'print'. 'print' has a return value of 1.
/** 'print' can be used within expressions while 'echo' won't  */

echo print 'Hello World'; //returns Hello World1
print('Hello world! I am learning php');
echo("PHP is my new programming language");

echo 'Hello', ' ', 'World';
//Echo is marginally faster than print

echo "Joe's Invoice";
echo 'Joe\'s Invoice';

// A variable starts with a dollar sign
$name = 'Gio';
echo $name;

/** Some rules in creating variables in php
 * 1) They must with a letter. The letter can be lower or uppercase but shouldn't be a number or 
 * special character
 * 2) Or an underscore (_)
 * 3) You can't have special characters like @ or #
 * 4) You can't assign a value to the variable called 'this' because it refers to the object
 */

// $123name = "Error"; This won't work
// $this = 'Error'; Won't work

$_12student = "I am student 1";
echo $_12student;

// Variables in php are assigned by value by default
$x = 1;
$y = $x;

echo $x;
$x = 3;

echo $y;

// If we want y to change whenever x changes, we need to assign it by reference
$num1 = 20;
$num2 = &$num1; //num2 is equal to the reference of num1

$num1 = 60;
echo $num2;

// A variable's value can not be displayed in single quotes
$firstName = "Gio";
echo 'Hello $firstName'; //Will not work
echo "Hello $firstName";
echo "Hello {$firstName}";

// concatenation
echo 'Good morning ' . $firstName;
<!DOCTYPE html>
<html>
    <body>
        <h1> My First Heading</h1>
        <p>
            <?php echo 'Hello world'; $x = 10; $y = 5; echo $x . ', ' . $y ?> <!-- Enclose it inside <php> if you want to process something -->
        </p>
        <p>
            <?= 'Hello world second paragraph' ?> <!--If you need to print something, use this shorthand -->
            <!-- Echo out html directly from php. NB: It's not a good idea to mix html inside your php -->
             <?php
             #comment
             // comment
             /** Multi line
              * comment (don't nest multi line comments)
              */
                $x = 10;
                $y = 5;

                echo '<p>' . $x . ', ' . $y . '</p>';
            ?>
        </p>
    </body>
</html>