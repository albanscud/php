<?php

/* $notes = [10, 12, 15, 20, 18];

foreach ($notes as $note){
    echo "$note \n";
} */

$notes = [10, 12, 15, 20, 18];
unset ($notes[3]);
echo $notes;

?>