<?php
//start of rows
for ($rows = 0; $rows < 8; $rows++) {
    //row check if it odd or even
    if ($rows % 2 == 0) {
        //board cells if even
        for ($cols = 0; $cols < 8; $cols++) {
            if ($cols % 2 == 0) {
                echo "| * | ";
            } else {
                echo "| - | ";
            }
        }

        //board cells if odd

    } else {
        for ($cols = 0; $cols < 8; $cols++) {
            if ($cols % 2 == 0) {
                echo "| - | ";
            } else {
                echo "| * | ";
            }
        }
    }
    echo "<br>";
    echo "<br>";
}

echo "******************************************************************************************";
//styling using table


echo '<table width="450px"  border="1px">';

for ($rows = 0; $rows < 8; $rows++) {

    //table row
    echo "<tr>";
    if ($rows % 2 == 0) {
        // if row is even

        for ($cols = 0; $cols < 8; $cols++) {
            if ($cols % 2 == 0) {
                echo "<td height=35px width=35px bgcolor=#FFFFFF></td>";
            } else {
                echo "<td height=35px width=35px bgcolor=#ff0000></td>";
            }
        }
    } else {
        // if row is odd

        for ($cols = 0; $cols < 8; $cols++) {
            if ($cols % 2 == 0) {
                echo "<td height=35px width=35px bgcolor=#ff0000 ></td>";
            } else {
                echo "<td height=35px width=35px bgcolor=#FFFFFF ></td>";
            }
        }
        //every row's end
        echo "</tr>";

        //row break
        echo "<br>";
    }
}
//end of board table
echo "</table>";
