<?php
class Calculator
{
	function multiply()
	{
		if (array_key_exists('2', $_SERVER['argv'])) {
            $args = $_SERVER['argv'][2];
			$final_args = str_replace('\n',',',$args);
            $params = explode(',', $final_args);
			$result = 1;
			foreach($params as $value) {
				if($value<0) {
					return "Error:Negative numbers ($value) are not allowed.";
				}
			}		
			for($i=0; $i<count($params); $i++) {
				$result = $result * $params[$i];
			}			
        } else {
            $result = 0;
        }
        return $result;
	}
}

$obj = new Calculator();
$result = $obj->multiply();
echo $result;