<?php
#substr()
#Returns a portion of a string

// $output = substr('Hello', 1, 3);    //displays the character from index 1 to index 3
// $output = substr('Hello', 2);   //displays the characters from index 2 without a limit.

# strlen()
#Returns the length of a string
$output = strlen('Hello world');

# strpos()
# Finds the position of the first occurrence of a sub string

$output = strpos('Hello world', 'o');

# strrpos()
# Finds the position of the last occurrence of a sub string

$output = strrpos('Hello world', 'o');

#trim()
#strips or removes whitespace
$text = 'Hello World          ';
var_dump($text);
 $trimmed = trim($text);
var_dump($trimmed);
//  echo $output;

#strtoupper
#Makes everything uppercase

$output = strtoupper('Hello World');

echo $output;

#strtolower
#Makes everything lowercase

$output = strtolower('Hello World');

echo $output;

#ucwords()
#capitalise every word
$output = ucwords('hello world');
// echo $output;


 #str_replace()
 # Replace all occurrences of a search string with a replacement

 $text = "Hello world";
 $output = str_replace('world', 'Everyone', $text);
//  echo $output;

 # is_string()
 #Check if string

 $val = 'hello';
  $output = is_string($val);
  echo $output;
  $values = array(true, false, null, 'abc', 33, '33', 22.4, '322.4', ' ', 0, '0');
  foreach($values as $value){
      if(is_string($value)){
          echo "{$value} is a string<br>";
      }
  }


?>