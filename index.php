<?php 

//$string = "this is the general string";

$obj = new main();

class main
{

	private $html;

    function __construct()
    {
	$string = "This is a General String.";
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

	$this->html.=htmlTags::headingString('Welcome to 10 strings and Arrays');
	$this->html.=htmlTags::headingString('String Functions');
	$this->html.=htmlTags::hRule();
	$this->html.=htmlTags::bRule();
    $this->html.=htmlTags::headingString('echo function demostration');
	$this->html.=stringFunction::stringEcho($string);
	$this->html.=htmlTags::hRule();
	$this->html.=htmlTags::bRule();
	$this->html.=htmlTags::headingString('chunk split function demostration');
	$this->html.=htmlTags::bRule();
	$this->html.=stringFunction::stringChunk_split($string);
	$this->html.=htmlTags::hRule();
	$this->html.=htmlTags::headingString(' explode function demostration');
	$this->html.=htmlTags::bRule();
	$this->html.=stringFunction::stringSubstr($string);
	$this->html.=htmlTags::hRule();
	$this->html.=htmlTags::headingString(' RTrim function demostration');
	$this->html.=htmlTags::bRule();
	$this->html.=stringFunction::stringRtrim('This is a string');
	$this->html.=htmlTags::hRule();
	$this->html.=htmlTags::bRule();
	$this->html.=htmlTags::headingString(' StrRepeat function demostration');
	$this->html.=stringFunction::stringStrRepeat($string);
	$this->html.=htmlTags::hRule();
	$this->html.=htmlTags::bRule();
	$this->html.=htmlTags::headingString(' StrSplit function demostration');
	$this->html.=stringFunction::stringStrSplit('this is the error');
	$this->html.=htmlTags::hRule();
	$this->html.=htmlTags::bRule();
	$this->html.=htmlTags::headingString(' StrLen function demostration');
	$this->html.=stringFunction::stringStrLen($string);
	$this->html.=htmlTags::hRule();
	$this->html.=htmlTags::bRule();
	$this->html.=htmlTags::headingString(' StrChr demostration');
	$this->html.=stringFunction::stringChr($string);
	$this->html.=htmlTags::hRule();
	$this->html.=htmlTags::bRule();
	$this->html.=htmlTags::headingString(' Str upper demostration');
	$this->html.= stringFunction::stringStrupper($string);
	$this->html.=htmlTags::hRule();
	$this->html.=htmlTags::bRule();
	$this->html.=htmlTags::headingString(' Str lower demostration');
	$this->html.=stringFunction::stringStrlower($string);
	$this->html.=htmlTags::headingString(' Array Functions');
	$this->html.=htmlTags::hRule();
	$this->html.=htmlTags::headingString(' Array change key function demostration');
	$this->html.=arrayFunction::arraychangekeycase($test);
	$this->html.=htmlTags::hRule();
	$this->html.=htmlTags::bRule();
	$this->html.=htmlTags::headingString(' Array chunk function demostration');
	$this->html.=arrayFunction::arraychunk($test);
	$this->html.=htmlTags::hRule();
	$this->html.=htmlTags::bRule();
	$this->html.=htmlTags::headingString(' Array chunk function demostration');
	$this->html.=arrayFunction::arraychunk($array);
	$this->html.=htmlTags::hRule();
	$this->html.=htmlTags::bRule();
	$this->html.=htmlTags::headingString(' Array column function demostration');
	$this->html.=arrayFunction::arraycolumn($multi);
	$this->html.=htmlTags::hRule();
	$this->html.=htmlTags::bRule();
	$this->html.=htmlTags::headingString(' Array combine function demostration');
	$this->html.=arrayFunction::arraycombine($array,$array2);
	$this->html.=htmlTags::hRule();
	$this->html.=htmlTags::bRule();
	$this->html.=htmlTags::headingString(' Array fill function demostration');
	$this->html.=arrayFunction::arrayfill();
	$this->html.=htmlTags::hRule();
	$this->html.=htmlTags::bRule();
	$this->html.=htmlTags::headingString(' Array flip function demostration');
	$this->html.=arrayFunction::arrayflip($array);
	$this->html.=htmlTags::hRule();
	$this->html.=htmlTags::bRule();
	$this->html.= htmlTags::headingString(' multisort array function demostration');
	$this->html.=arrayFunction::multisortarray($array,$array2);
	$this->html.=htmlTags::hRule();
	$this->html.=htmlTags::bRule();
	$this->html.=htmlTags::headingString(' array push function demostration');
	$this->html.=arrayFunction::arraypush($array);
	$this->html.=htmlTags::hRule();
	$this->html.=htmlTags::bRule();
	$this->html.=htmlTags::headingString(' array sum function demostration');
	$this->html.=arrayFunction::arraysum();
	$this->html.=htmlTags::hRule();
	$this->html.=htmlTags::bRule();
	$this->html.=htmlTags::headingString(' countarray function demostration');
	$this->html.=arrayFunction::countarray($array);
 
	}

	function __destruct()
	{
	 echo stringFunctions::printOut($this->html);

	 }

}

class stringFunction
{


	function stringChr($string)
	{

	//	echo '<h1> This is the Chr string </h1>';
		$str = chr(61);
		return $str;
	}
	function stringChunk_split($string)
	{
     //	echo '<h1> This is the chunk_split string </h1>';
 		
 		return chunk_split($string,3,".");


	}

	function stringEcho($string)
	{
    //  echo '<h1> this is the echo string</h1>';
      return $string;

  	}
	function stringSubstr($string)
    {
 	//	echo '<h1>this is the explode string</h1>';

 	//	print_r (explode(" ", $string));
        return substr("Hello world",6);


 	}

    function stringRtrim($string)

    {

    //  echo '<h1>this is the rtrim string</h1>';

       return rtrim($string, "string");
	

	}

    function stringStrRepeat($string)
	{
	// echo '<h1>this is the str_repeat string string</h1>';
	
	//echo '<br>';
	return str_repeat($string, 3);

	 }

    function stringStrSplit($string)

    {

       // echo '<h1>this is the str_split string</h1>';

       return print_r(str_split($string, 5), True).'</h3>';



    }

    function stringStrLen($string)

    {
    	//	echo '<h1>this is the strlen string</h1>';

    		return strlen($string);
			// the length of the string is



    }


    function stringStrlower($string)

    {

	//	echo '<h1>this is the strlower string</h1>';
		
		//  "the lower case of the string is ";

		return strtolower($string);



    }



    function stringStrupper($string)
    {
    //	echo '<h1>this is the strupper string</h1>';

    	//echo "the upper case of the string is: ";

    	return strtoupper($string);



    }
    }

class arrayFunction
{
    function arraychangekeycase($test)
    {

        // echo '<h1>This is the array change key case function</h1>';


        return print_r(array_change_key_case($test, CASE_UPPER), True);


    }

    function arraychunk($array)
    {

        // echo '<h1>This is the array_chunk function</h1>';
        //echo '<br>';

        return print_r(array_chunk($array, "2"),true);


    }

    function arraycolumn($multi)
    {

        //   echo '<h1>This is an array_column function </h1>';

        return print_r(array_column($multi, 'country'),true);



        }

    function arraycombine($array, $array2)
    {


        // echo '<h1>This is an array_combine function </h1>';
        $array3 = array_combine($array, $array2);
        return print_r($array3,true);


    }

    function arrayfill()
    {
        // echo '<h1>This is the array fill function</h1>';
        $a = array_fill(0, 7, 'Owen');
        return print_r($a, true);

    }

    function arrayflip($array)
    {
        // echo '<h1>This is the array flip function</h1>';
       return print_r(array_flip($array), true);


    }

    function multisortarray($array, $array2)
    {
       // echo '<h1>This is a multisort array function </h1>';
       // echo '<br>';
        array_multisort($array, $array2);
        return print_r($array,true).''. print_r($array2,true);




    }

    function arraypush($array)
    {
      //  echo '<h1>This is the array_push function </h1>';
        array_push($array, "eight", "nine");
        return print_r($array, true);

    }

    function arraysum()
    {
        //echo '<h1>This is the array sum function </h1>';

        $a = array(2, 3, 4, 5);

        return array_sum($a);

      //  echo '<hr>';


    }

    function countarray($array)
    {
       // echo '<h1>This is the count array</h1>';

        return "the count of the array is " . count($array);

     //   echo '<hr>';


    }
}
	class htmlTags
{
	function hRule()
	{
		return '<hr>';
	}

	function bRule ()
	{

		return '<br>';

    }

    function headingString($char)
        {
            return '<h1>'. $char. '</h1>';

        }




}
  class stringFunctions
  {

      function printOut($string)

      {

          echo $string;

      }

  }


?>
