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

#############################################################
## Item your output, you can change to 'single' or 'double'.
## Single name 'single', example output = 'Wahyu'.
## Double name 'double', example output = 'Wahyu Arif'.
##
## Example source
## - single : $item = 'single';
## - double : $item = 'double';
#############################################################
$item = 'single';


##############################################################
## Type of output, you change to 'text' or 'json' type.
## Example 'text' output = 'Wahyu'.
## Example 'json' output = '{"name":{"first":"Wahyu"}}'.
##
## Example source :
## - $type = 'text';
## - $type = 'json';
## You can create rest-api from this is type 'json'.
##############################################################
$type = 'json';


##############################################################
## Random number to get name from index
##############################################################
$rand = 10;