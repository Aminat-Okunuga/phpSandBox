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

//   compressing strings
  #gzcompress()
  #Compress a string

  $string = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
  molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
  numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
  optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
  obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
  nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
  tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
  quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos 
  sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
  recusandae alias error harum maxime adipisci amet laborum. Perspiciatis 
  minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit 
  quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur 
  fugiat, temporibus enim commodi iusto libero magni deleniti quod quam 
  consequuntur! Commodi minima excepturi repudiandae velit hic maxime
  doloremque. Quaerat provident commodi consectetur veniam similique ad 
  earum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo 
  fugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore 
  suscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium
  modi minima sunt esse temporibus sint culpa, recusandae aliquam numquam 
  totam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam 
  quasi aliquam eligendi, placeat qui corporis!";

  $compressed = gzcompress($string);
  echo $compressed;

//   to uncompress
$original = gzuncompress($compressed);

?>