<?php
for ($n = 1; $n < 51; $n++) {
    if ($n % 3 == 0) {
        echo "Frontend, ";
    } else if ($n % 5 == 0) {
        echo "Backend, ";
    } else {
        echo $n . ", ";
    }
}

