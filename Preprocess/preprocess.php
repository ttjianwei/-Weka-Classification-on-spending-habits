<?php

ini_set('max_execution_time', 3000);
$filename = 'responses.csv';
$contents = file($filename);
$file = fopen("responses.csv","r");
$file2 = "responsesP.csv";
$file3 = fopen("responsesP.csv","w");
$count2=0;
 foreach($contents as $line) {
	 
	 //if empty row, will not be output to file
	 if(!strpos($line,',,')){

     $data = explode(",",$line);
	 //$counter =0;

	

	//Convert finance Row
	if($data[133]==null || $data[133]==1 || $data[133]==2)
	{
		$data[133]='No';
	}
	else if($data[133]==3 || $data[133]==4 || $data[133]==5 ){
		$data[133] = 'Yes';
	}
	
	//Convert Shopping centre Row
	if($data[134]==null || $data[134]==1 || $data[134]==2)
	{
		$data[134]='No';
	}
	else if($data[134]==3 || $data[134]==4 || $data[134]==5 ){
		$data[134] = 'Yes';
	}
	//Convert branded clothing
	if($data[135]==null ||$data[135]==1 || $data[135]==2)
	{
		$data[135]='No';
	}
	else if($data[135]==3 || $data[135]==4 || $data[135]==5 ){
		$data[135] = 'Yes';
	}
	
	//entertainment spending
	if($data[136]==null || $data[136]==1 || $data[136]==2)
	{
		$data[136]='No';
	}
	else if($data[136]==3 || $data[136]==4 || $data[136]==5 ){
		$data[136] = 'Yes';
	}
	
	//spending on looks
	if($data[137]==null ||$data[137]==1 || $data[137]==2)
	{
		$data[137]='No';
	}
	else if($data[137]==3 || $data[137]==4 || $data[137]==5 ){
		$data[137] = 'Yes';
	}
	
	
	//spending on gadgets
	if($data[138]==null ||$data[138]==1 || $data[138]==2)
	{
		$data[138]='No';
	}
	else if($data[138]==3 || $data[138]==4 || $data[138]==5 ){
		$data[138] = 'Yes';
	}
	
	//spending on healthy eating
	if($data[139]==null || $data[139]==1 || $data[139]==2)
	{
		$data[139]='No';
	}
	else if($data[139]==3 || $data[139]==4 || $data[139]==5 ){
		$data[139] = 'Yes';
	}
	fputs($file3, implode($data, ','));
	
	
	 }
	 }
 

?>