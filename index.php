<?php

	/* Enter your code here. Read input from STDIN. Print output to STDOUT */
	
	$fr = fopen("php://stdin", "r");
	$fw = fopen("php://stdout", "w");
	
	$ary_nums = explode(" ", fgets(STDIN));
	//$hi = (int)$ary_nums[0];
	$low = (int)$ary_nums[1];
	
	$ary_nums = explode(" ", fgets(STDIN));
	$ary_nums = array_count_values($ary_nums);
	$count = 0;
	foreach($ary_nums as $key=>$value){
	    $result = $key + $low;
	    if(array_key_exists($result, $ary_nums)){
	        $count = $count + $ary_nums[$result];
	    }
	}
	
	fprintf($fw, "%d", $count);
