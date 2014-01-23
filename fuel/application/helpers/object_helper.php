<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function object_to_array($obj)
{
	$arrObj = is_object($obj) ? get_object_vars($obj) : $obj;
	foreach ($arrObj as $key => $val) {
		$val = (is_array($val) || is_object($val)) ? object_to_array($val) : $val;
		$arr[$key] = $val;
	}
	return $arr;
}

?>