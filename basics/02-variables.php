<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A series of characters encapsuled by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object 
- NULL - Empty variable
- Resource - A special variable that holds a resource (ex: DB connection)
*/

/* --------- Variable Rules --------- */
/*
- Must be prefixed with $
- Must start with a letter or the underscore character
- Can't start with a number
- Can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'Teuzo'; // String // Can be single or double quotes
$age = 29; // Integer
$hasKids = false; // Boolean
$cashOnHand = 23.5; //Float

var_dump($cashOnHand);

/* --- Adding variables to strings -- */

// Double quotes can be used to add variables to strings
echo "$name is $age years old";

// Better to do this
echo "${name} is ${age} years old";

// Concatenate Strings

echo '<h3>' . $name . ' is ' . $age . ' years old</h3>';

// Arithmetic Operators

echo 5 + 5;
echo 10 - 6;
echo 5 * 10;
echo 10 / 2;

// Constants - Cannot be changed
define('HOST', 'localhost');
define('USER', 'root');

var_dump(HOST);