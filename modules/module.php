<?php
/**
 * Author  : Wahyu Arif Purnomo
 * Version : 1.0
 * Name    : Random Name Generator
 * Build   : 15 Desember 2019
 * Update  : 15 Desember 2019 16.16
 * 
 * If you are a reliable programmer or the best developer, please don't change anything.
 * If you want to be appreciated by others, then don't change anything in this script.
 * Please respect me for making this tool from the beginning.
 */
include 'classModule.php';
$randomNameGenerator = new randomNameGenerator('array');

if($item == 'single') {
    $name = $randomNameGenerator->name($rand);
    if($type == 'text'){
        print_r($name[0]);
    } else if ($type == 'json'){
        $singleJson['name'] = array(
            'first' => $name[0]
        );
        print json_encode($singleJson);
    }
} else if ($item = 'double') {
    $name = $randomNameGenerator->name($rand);
    if($type == 'text'){
        print_r($name[0] . ' ' . $name[1]);
    } else if ($type == 'json'){
        $doubleJson['name'] = array(
            'first' => $name[0],
            'last' => $name[1]
        );
        print json_encode($doubleJson);
    }
}
?>