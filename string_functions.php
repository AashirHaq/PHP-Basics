<?php
    #substr()
    #Returns a portion of string

//$output = substr('Hello' , 1, 2);
//$output = substr('Hello' , -2);

    #strlen()
    #Returns the length of string
//$output = strlen('Hello World');

    #strpos()
    #Finds the position of first occurence of sub string

//$output = strpos('Hello World', 'l');

    #strrpos()
    #Finds the position of last occurence of sub string

//$output = strrpos('Hello World', 'l');

    #trim()
    #strips white spaces
//$text = 'Hello World             ';
//var_dump($text);
//
//$trimmed = trim($text);
//var_dump($trimmed);

    #strtoupper()
    #make everything to uppercase

//$output = strtoupper('hello world');
//echo $output;

    #strtolower()
    #Makes everything to lower case
        
//$output = strtolower('HELLO WORLD');
//echo $output;

    #ucword()
    #Capitalize every word

//$output = ucwords('hello world');
//echo $output;

    #str_replace()
    #Replace all occurences of a search string with a replacement

//$text = 'Hello World';
//$output = str_replace('World', 'Everything' , $text);
//echo $output;

    #is_string()
    #Check if string

//$val =  22;
//$output = is_string($val);
//echo $output;

//$values = [true, null, 'abc', 33, '44', 22.4,
//    '22.8', '', ' ', '0'];
//foreach ($values as $value){
//    
//    if (is_string($value)) {
//        echo "{$value} is a string<br/>";
//    }
//    
//}

    #gzcompress()
    #compress a string

//$string = "Lorem Ipsum is simply dummy text of the"
//        . " printing and typesetting industry. Lorem Ipsum "
//        . "has been the industry's standard dummy text "
//        . "ever since the 1500s, when an unknown printer took "
//        . "a galley of type and scrambled it to make a type "
//        . "specimen book. It has survived not only five centuries, "
//        . "but also the leap into electronic typesetting, remaining "
//        . "essentially unchanged. It was popularised in the 1960s with "
//        . "the release of Letraset sheets containing Lorem Ipsum passages, "
//        . "and more recently with desktop publishing software "
//        . "like Aldus PageMaker including versions of Lorem Ipsum.";
//
//$compress = gzcompress($string);
//echo $compress;
//
//$original = gzuncompress($compress);
//echo '<br/>' .$original;

$hello = "hello <br/> world";

echo str_replace("<br/>","NEWLINE",$hello);