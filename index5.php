<?
$array = array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid",
    "Sweden" => "Stockholm",
    "United Kingdom" => "London",
    "Cyprus" => "Nicosia",
    "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague",
    "Estonia" => "Tallin",
    "Hungary" => "Budapest",
    "Latvia" => "Riga",
    "Malta" => "Valetta",
    "Austria" => "Vienna",
    "Poland" => "Warsaw"
);

function sortedArray($any)
{
    asort($any);
    $i = 1;
    foreach ($any as $key => $value) {
        //styling of capitle
        $cityArray = str_split($value);
        $city1stLtr =  $cityArray[0];
        $cityLefted = substr($value, 1);
        // chunk_split($value,2,':')
        $styledValue =  "<span style='color:red;'>" . $city1stLtr . "</span>" . $cityLefted;
        //print final resualt
        echo "<h3 style='margin:5px;color:white; '>" . $i . "- The capitale of " . $key . " is " .  $styledValue . "." . "</h3>" . "<br>";
        //   counter
        $i++;
    }
}
echo '<div style="background-color:#000018">';
echo "<h1 style='text-align:center; color:gold;'>Sorting Capitales Task</h>";
sortedArray($array);
echo "</div>";

//end of first task


// start of second task
<<<<<<< HEAD

$input = '123569';
=======
//change tis value to test make its length even or odd 
//values to check ( 67231 , 6423 , 6723196)
$input = '672319';
>>>>>>> 0aad2eed62e106dd02176ace40e20a8cab7565d6

function sperator($str)
{

    //turn input string into array
    $arrayedInput = str_split($str);

    //storage 
    $output = [];

    //loop to add the sperator
    foreach ($arrayedInput as $key => $value) {
        # code...
        if ($key % 2 != 0 && $key != 0) {
            //to add sperator after even number only
            $sepratedValue = ":";
            array_push($output, $value);
            array_push($output, $sepratedValue);
        } else {

            //to add thevalue if odd with out the seprator
            array_push($output, $value);
        }
    }

    //get the last seprator out of arrary in case inpute is even
    if (count($arrayedInput) % 2 == 0) {
        array_pop($output);
    }

    //turn array into string
    $fianlRes = implode("", $output);

    //print the resault
    echo "<h1 style='margin:20px;text-align:center'>The sperated text of " . $str . " is:</h1>";
    echo "<h1 style='color:red;margin:20px;text-align:center'>" . $fianlRes . "</h1>";
}

//Output
sperator($input);
