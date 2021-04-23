<?php //declare(strict_types=1);

//$name = "Raj Shah";
//echo $name;

for ($i = 0; $i < 10; $i++) {
    //echo "\n $i";
}

$x = 10;
function usageOfVariable()
{
    static $staticVariable = 0;
    $staticVariable++;
    echo $staticVariable;
    echo var_dump($staticVariable);

    $arrayVariable = array(1, 2, 3);
    echo $arrayVariable;
    global $x;
    echo "This is variable " . $GLOBALS['x'];
}
//usageOfVariable();


function stringformat()
{
    $simpleString = "Raj Shah";
    $count = 0;
    echo " Length of string is given by strlen($)" . strlen($simpleString);
    echo str_word_count($simpleString);
    echo strrev($simpleString);
    echo (str_replace("aj", "oj", $simpleString, $count));
    echo $count;
};
//stringformat();

function funcDemo(int $intData, string $strData = "Hello Raj Here"): string
{
    return $intData . " - " . $strData;
}
//echo funcDemo(1,"Hey Utsav here");

function arrayFunctions()
{
    $strArray = array("A", "B", "C");
    // This will result in warning at screen as array is converted to String .
    //echo $strArray;
    echo "<br> Length : " . count($strArray) . "<br>";

    $associativeArray = array('Raj Shah' => 120, 'Heet' => 30);
    foreach ($associativeArray as $x => $__x_value) {

        # code...
        echo "<br>" . $x . " Value : " . $__x_value;
    }

    $multiDemArray = array(
        array("Raj Shah", "Computer Science", 10800),
        array("Utsav Vohra", "Computer Science", 13080),
        array("Rishi Parikh", "Computer Science", 13080)
    );

    // Multi Dimensions arrays access them using rows and Colums .
    for ($rows = 0; $rows < count($multiDemArray); $rows++) {
        # code...
        for ($colums = 0; $colums < 3; $colums++) {
            # code...
            echo "<br>" . $multiDemArray[$rows][$colums];
        }
    }
}
//arrayFunctions();

function regexDemo()
{
    $string = "Fox is FOX but Sox  not FoX";
    $regCompare = "/is?/i";
    echo preg_match_all($regCompare, $string);
};
//regexDemo();


function dateTimeDemo(){
    echo date("d/m/Y")."<br>";
    echo date("h:i:s a")."<br>";
    $thatTime=strtotime("10:30pm April 15 2014");
    echo date("d/M/Y h:i:s a",$thatTime);
}
//dateTimeDemo();

function fileManuplation(){
    echo readfile('./formAction.php');
}
fileManuplation();

?>
<!---
<html>

<body>
    <form method="post" action=<?php echo htmlspecialchars("./formAction.php") ?>>
        <input type="text" name="firstText" placeholder="Enter Name : " />
        <input type="number" name="age" />
        <input type="submit" value="submit">
    </form>
</body>

</html>
--->