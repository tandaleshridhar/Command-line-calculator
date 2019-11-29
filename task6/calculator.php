<?php

class Calculator
{
  	
	function add()
	{
        $args = $_SERVER['argv'][2];
		$replace_item = "\\,";
		$expected_args = str_replace($replace_item, '', $args);
		$replace_item = "\\";
		$expected_args = str_replace($replace_item, '', $expected_args);
		$params = explode(',', $expected_args);
		foreach($params as $value) {
			if($value<0) {
				return "Error:Negative numbers ($value) are not allowed.";
			}
		}        
    }
}

$obj = new Calculator;
$result = $obj->add();
echo $result;

?>