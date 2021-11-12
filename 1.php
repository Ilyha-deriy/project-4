<?php
function counter($x = 0) {
    static $counter = 0;
    if ($x != 0) {
        $counter = $x + 1;
    }
    else {
        $counter++;
    }
    echo $counter . "\n";
}
counter();
counter();
counter();
counter(5);
counter();

// text
?>