<?php

class Calculator
{
  	
	function add()
	{
        if (array_key_exists('2', $_SERVER['argv'])) {
            $args = $_SERVER['argv'][2];
			$final_args = str_replace('\n',',',$args);
            $params = explode(',', $final_args);
            $result = array_sum($params);
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