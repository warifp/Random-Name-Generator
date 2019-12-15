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

class randomNameGenerator {

	private $version;
	public $allowedFormats;
	public $inputFormat;

	public function __construct( $output = 'array' ) {

		$this->version = '1.0.0';
		$this->allowedFormats = array('array', 'json', 'associative_array');
		$this->inputFormat = 'json';

		if ( !in_array( $output, $this->allowedFormats ) ) {
			throw new Exception('Unrecognized format');
		}

		$this->output = $output;
	}

	private function getList( $type ) {
		$json = file_get_contents($type . '.' . $this->inputFormat, FILE_USE_INCLUDE_PATH );
		$data = json_decode( $json, true );

		return $data;
	}

	public function name( $num ) {

		if ( !is_numeric( $num ) ) {
			throw new Exception('Not a number');
		}

		$first_names = $this->getList('nameModule');

		$count = range(1, $num );
		$name_r = array();

		foreach( $count as $name ) {
				$count++;
				$random_fname_index = array_rand( $first_names );

				$first_name = $first_names[$random_fname_index];

				if( $this->output == 'array' ) {
					$name_arr[] = $first_name;
				} elseif( $this->output == 'associative_array' || $this->output == 'json' ) {
					$name_arr[] = array( 'first_name' => $first_name);
				}
		}

		if( $this->output == 'json' ) {
			$name_arr = json_encode( $name_arr );
		}

		return $name_arr;
	}

}