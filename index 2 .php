<?php

for ($rows = 0; $rows < 8; $rows++) {
    if ($rows % 2 == 0) {
        for ($cols = 0; $cols < 8; $cols++) {
            if ($cols % 2 == 0) {
                echo "| * | ";
            } else {
                echo "| - | ";
            }
        }
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
