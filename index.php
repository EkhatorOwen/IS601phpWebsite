<?php 

//$string = "this is the general string";

$obj = new main();

$string = "This is a General String";
$array = array("one","two","three","four","five","six","seven");
$test = array('a'=>'Cat','B'=>'Dog', 'c'=>'Horse','b'=>'Bird');
$array2 = array("a","b","c","d","e","f","g"); 
$multi =array(

	array(
	'firsname' => 'Owen',
	'lastname' => 'Ekahtor',
	'country' => 'Nigria',
	
	
	),

	array (
	'firstname'=>'James',
	'lastname'=>'Churchil',
	'country' =>'England',

	),


	array(
	'firstname'=>'Boris',
	'lastname'=>'Mann',
	'country'=>'USA',

	)	

);
stringFunction::stringChunk_split($string);

stringFunction::stringEcho($string);
stringFunction::stringExplode($string);
stringFunction::stringRtrim($string);
stringFunction::stringStrRepeat($string);
stringFunction::stringStrSplit($string);
stringFunction::stringStrLen($string);
stringFunction::stringChr($string);
stringFunction::stringStrupper($string);
stringFunction::stringStrlower($string);
arrayFunction::arraychangekeycase($test);
arrayFunction::arraychunk($array);
arrayFunction::arraycolumn($multi);
arrayFunction::arraycombine($array,$array2);
arrayFunction::arrayfill();
arrayFunction::arrayflip($array);
arrayFunction::multisortarray($array,$array2);
arrayFunction::arraypush($array);
arrayFunction::arraysum();
arrayFunction::countarray($array);
 
class main

{

	function __construct()
	{
		echo '<h1>Find 10 Strings Functions and 10 Array fucntions Below </h1>';
	        
		echo '<h3>The string used in this excercise is: This is a
		General String </h3>';
		
		

		echo '<h3>three sets of arrays were used in this excercise: the
		indexed array, the associative array and the multidimentional
		array</h3>';
	
	}

	function __destruct()
	{
	 echo "<h2>This is the end</h2>";

	 }

}

class stringFunction
{


	function stringChr($string)
	{

		echo '<h1> This is the Chr string </h1>';
		$str = chr(61);
		echo 'the char function returns: '.$str;
	}
	function stringChunk_split($string)
	{
     	echo '<h1> This is the chunk_split string </h1>';
 		
 		echo chunk_split($string,3,".");

		echo '<hr>';
	}

	function stringEcho($string)
	{
      echo '<h1> this is the echo string</h1>';
      echo $string;
      echo '<hr>';
  	}
	function stringExplode($string)
    {
 		echo '<h1>this is the explode string</h1>';

 		print_r (explode(" ", $string));

 		echo '<hr>';
 	}

    function stringRtrim($string)

    {

      echo '<h1>this is the rtrim string</h1>';

       echo rtrim($string, "string");
	
	echo '<hr>';
	}

    function stringStrRepeat($string)
	{
	echo '<h1>this is the str_repeat string string</h1>';
	
	echo '<br>';
	echo str_repeat($string, 3);
	echo '<hr>';
	 }

    function stringStrSplit($string)

    {

       echo '<h1>this is the str_split string</h1>';

       print_r(str_split($string, 5));

       echo '<hr>';

    }

    function stringStrLen($string)

    {
    		echo '<h1>this is the strlen string</h1>';

    		echo "the length of the string is: ".strlen($string);

    		echo '<hr>';


    }


    function stringStrlower($string)

    {

		echo '<h1>this is the strlower string</h1>';    
		
	echo "the lower case of the string is ".strtolower($string);

			echo '<hr>';		


    }



    function stringStrupper($string)
    {
    	echo '<h1>this is the strupper string</h1>';

    	echo "the upper case of the string is: ".strtoupper($string);

    	echo '<hr>';

    }
    }

class arrayFunction
{
      function arraychangekeycase($test)
      {

      echo '<h1>This is the array change key case function</h1>';
      



      print_r(array_change_key_case($test,CASE_UPPER));

      echo '<hr>';


      }

      function arraychunk($array)
      {
       
       echo '<h1>This is the array_chunk function</h1>';
       echo '<br>';
       
       print_r(array_chunk($array,"2"));
       echo '<hr>';

    
      }

      function arraycolumn($multi)
	{
       
       echo '<h1>This is an array_column function </h1>';

       print_r(array_column($multi,'country')); 

       echo '<hr>';

        }

	function arraycombine($array,$array2)
	{
	
	
	echo '<h1>This is an array_combine function </h1>';
        $array3 = array_combine($array,$array2);
	print_r($array3);
	echo '<br>';
	
        echo '<hr>';
	}
 	function arrayfill()
	{
	echo '<h1>This is the array fill function</h1>';
	$a = array_fill(0,7,'Owen');
	print_r($a);
	echo '<hr>';
	}
	function arrayflip($array)
	{
	echo '<h1>This is the array flip function</h1>';
	
	
	print_r(array_flip($array));
	echo '<hr>';
	
	}
 
      function multisortarray($array,$array2)
      {
	echo '<h1>This is a multisort array function </h1>';
	echo '<br>';
	array_multisort($array, $array2);
	var_dump($array);
	var_dump($array2);
	
	echo '<hr>';


      }
      function arraypush($array)
      {
	echo '<h1>This is the array_push function </h1>';
	array_push($array, "eight", "nine");
	print_r($array);
	echo '<hr>';
      }
	function arraysum()
	{
	  echo '<h1>This is the array sum function </h1>';
	  
	  $a = array(2,3,4,5);

	echo array_sum($a);

	echo '<hr>';




	}
	function countarray($array)
	{
	echo '<h1>This is the count array</h1>';

	echo "the count of the array is ".count($array);

	echo '<hr>';
	
	
	
	}

}

?>
