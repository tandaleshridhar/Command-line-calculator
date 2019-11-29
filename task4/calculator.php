<?php

class Calculator
{
  	
	function add()
	{
        if (array_key_exists('2', $_SERVER['argv'])) {
            $args = $_SERVER['argv'][2];
			$replace_item = "\\;\\";
			$expected_args = str_replace($replace_item, '', $args);
			$replace_item = "\\";
			$expected_args = str_replace($replace_item, '', $expected_args);
			$replace_item = ";";
			$expected_args = str_replace($replace_item, ',', $expected_args);
			$params = explode(',', $expected_args);
			$result = array_sum($params);
			return $result;
        } else {
            $result = 0;
        }
        return $result;
		
    }
}

$obj = new Calculator;
$result = $obj->add();
echo $result;

?>