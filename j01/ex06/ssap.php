#!/usr/bin/php
<?php

if ($argc > 1) {
    unset($argv[0]);
    foreach ($argv as $v) {
        $trimed = trim($v);
        $result = str_replace('/\s+/', ' ', $trimed);
        $tab = array_filter(explode(' ', $result));
        foreach ($tab as $t)
            $final_tab[] = $t;
    }
    if ($final_tab) {
        sort($final_tab);
        foreach ($final_tab as $ft) {
            echo $ft . "\n";
        }
    }
}

?>
