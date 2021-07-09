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
