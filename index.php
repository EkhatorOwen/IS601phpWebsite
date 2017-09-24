<?php 

//$string = "this is the general string";

$obj = new main();

$string = "This is a General String";
$array = array("one","two","three","four","five","six","seven");
$obj->stringChunk_split($string);

$obj->stringEcho($string);
$obj->stringExplode($string);
$obj->stringRtrim($string);
$obj->stringStrRepeat($string);
$obj->stringStrSplit($string);
$obj->stringStrLen($string);
$obj->stringChr($string);
$obj->stringStrupper($string);
$obj->stringStrlower($string);
$obj->arraychangekeycase($array);
$obj->arraychunk($array);
class main

{

	function __construct()
	{
		echo '<h1>Find 10 Strings Below </h1>';
	        
		echo '<h2>The string used in this excercise is: This is a
		General String </h2>';
	
	}
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
	
	echo '<br>';
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
      function arraychangekeycase($array)
      {

      echo '<h1>This is the array change key case function</h1>';
      
     $test = array("a"=>"Cat","B"=>"Dog", "c"=>"Horse","b"=>"Bird");


      print_r(array_change_key_case($test,CASE_UPPER));

      echo '<hr>';


      }

      function arraychunk($array)
      {
       
       echo '<h1>This is the array_chunk function   </hr>';
       print_r(array_chunk($array,3);
       echo '<hr>';

    
      }

}
?>
