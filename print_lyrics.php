<?php
//https://99-bottles-of-beer.net/lyrics.html

//declare initial variable (dynamic variable, have the song go on forever)
$bottles = 99;

//generic template for song line
$line = "old_value bottles of beer on the wall, old_value bottles of beer. Take one down and pass it around, new_value bottles of beer on the wall.".PHP_EOL;
//outro line with dynamic value set in place to restart the song
$outro = "No more bottles of beer on the wall, no more bottles of beer. Go to the store and buy some more, $bottles bottles of beer on the wall.".PHP_EOL;

//do while loop looping through all bottles apart from the last 2, for plural sake
do {
    //replace our template values with bottle values
    $modified_line = str_replace("old_value", $bottles, $line);
    $modified_line = str_replace("new_value", $bottles - 1, $modified_line);

    //echo out the modified line
    echo $modified_line;

    //decrement value
    $bottles--;
} while ($bottles > 2);

/*
*This can also be done inside a for loop, but looks ugly and can be done more efficiently
for (;$bottles > 2; $bottles--) {
    //replace our template values with bottle values
    $modified_line = str_replace("old_value", $bottles, $line);
    $modified_line = str_replace("new_value", $bottles - 1, $modified_line);
    
    //echo out the modified line
    echo $modified_line;
}

*Using a foreach loop with the range function will give the same output, but wont be able to decrement the value
foreach (range($bottles, 3) as $current_bottle) {

}

*/


//modify the last 2 bottles, 1 bottle should not be plural
$modified_line = str_replace("old_value", "$bottles", $line);
$modified_line = str_replace("new_value bottles", ($bottles - 1)." bottle", $modified_line);

//echo out modified line
echo $modified_line;

//decrement value
$bottles--;

//modify the final bottle line
$modified_line = str_replace("old_value bottles", "$bottles bottle", $line);
$modified_line = str_replace("new_value", "no more", $modified_line);
//echo out modified line
echo $modified_line;

//echo out the outro with dynamic variable set at the start
echo $outro;