<?php

    $count = 0;
    $doc = file("sample.txt");
    
    foreach($doc as $line)
        $count ++;

    echo "Number of lines : ".$count ;
?>