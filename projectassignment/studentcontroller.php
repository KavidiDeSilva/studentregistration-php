<?php

include("studentdao.php");

$option=$_GET["op"];

if($option=="add"){
	$json= $_GET["student"];
	$student=json_decode($json);
	StudentDao::add($student);
	echo("1");
}
if($option=="update"){
	$json= $_GET["student"];
	$student=json_decode($json);
	StudentDao::update($student);
	echo("1");
}

if($option=="delete"){
	$json= $_GET["student"];
	$student=json_decode($json);
	StudentDao::delete($student);
	echo("1");
}

if($option=="getall"){
	$students=StudentDao:: getAll();
	$json=json_encode($students);
	echo($json);
}
if($option=="getallbyname"){
	$name = $_GET["name"];
	$students = StudentDao::getAllByname($name);   
	$json = json_encode($students); 
	echo($json); 	
	}

if($option=="getallbymobile"){
	$mobile = $_GET["mobile"];
	$students = StudentDao::getAllBymobile($mobile);   
	$json = json_encode($students); 
	echo($json); 	
	}

if($option=="getallbybitreg"){
	$bitreg = $_GET["bitreg"];
	$students = StudentDao::getAllBybitreg($bitreg);   
	$json = json_encode($students); 
	echo($json); 	
	}

if($option=="getallbynameandmob"){
	$mobile = $_GET["mobile"];
	$name = $_GET["name"];
	$students = StudentDao::getAllBynameAndmobile($name,$mobile);   
	$json = json_encode($students); 
	echo($json); 	
	}

if($option=="getallbynameandbitreg"){
	$bitreg = $_GET["bitreg"];
	$name = $_GET["name"];
	$students = StudentDao::getAllBynameAndbitreg($name,$bitreg);   
	$json = json_encode($students); 
	echo($json); 	
	}

if($option=="getallbymobandbitreg"){
	$mobile = $_GET["mobile"];
	$bitreg = $_GET["bitreg"];
	$students = StudentDao::getAllBymobileAndbitreg($mobile,$bitreg);   
	$json = json_encode($students); 
	echo($json); 	
	}

if($option=="getallbynameandmobandbitreg"){
	$mobile = $_GET["mobile"];
	$name = $_GET["name"];
	$bitreg = $_GET["bitreg"];
	$students = StudentDao::getAllBynameAndmobileAndbitreg($name,$mobile,$bitreg);   
	$json = json_encode($students); 
	echo($json); 	
	}



?>