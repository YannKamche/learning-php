<?php

//Constants: These are values that can't change when they are defined

echo 'Hello, my name is Constant!';

$firstName = 'Gio';
$firstName = 'Joe';

echo $firstName;

# There are 2 ways to define constants
# using the function 'define' which accepts two parameters which are the name and the value
# define('name', 'value'); By convention, constants are defined in uppercase\
define('STATUS_PAID', 'paid');

# define('STATUS_PAID', 1). It won't work

echo STATUS_PAID; #when referencing constants, you don't need '$' sign

# To check whether the constant has been defined
echo defined('STATUS_PAID'); # returns a boolean true or false
echo defined('STATUS_VOID'); # empty meaning it is not defined 