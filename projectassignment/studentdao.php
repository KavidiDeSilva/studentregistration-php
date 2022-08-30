<?php
// Retrieve data from Query String
class StudentDao{
	
	
	public static function add($student){
		//connect mysql
		$mysqli= new mysqli("localhost","root","","bit");
		
		$quary="insert into student (name,mobile,bitreg) values('".$student->name."','".$student->mobile."','".$student->bitreg."')";
		$mysqli->query($quary);

	}

	public static function update($student){
		$mysqli= new mysqli("localhost","root","","bit");
		
		$quary="update student set name='".$student->name."',mobile='".$student->mobile."',bitreg='".$student->bitreg."'where id=".$student->id;
		$mysqli->query($quary);

	}
	
	public static function delete($student){
		$mysqli= new mysqli("localhost","root","","bit");
		
		$quary="delete from student where id=".$student->id;
		$mysqli->query($quary);

	}

	public static function getAll(){
		$mysqli= new mysqli("localhost","root","","bit");
		
		$quary="select * from student";
		$result=$mysqli->query($quary);
		
		$students=array();
		
		while($row = $result ->fetch_array(MYSQL_ASSOC)){
			$students[]=$row;
		}
		return $students;
	}





	public static function getAllByname($name){
	
	$mysqli = new mysqli("localhost", "root", "", "bit");
	$quary = "select * from student where name like '".$name."%'"; 
	$result = $mysqli->query($quary);
	
	$students = array();
	
	while($row = $result->fetch_array(MYSQL_ASSOC)) {
            $students[] = $row;
    }	
		
    return $students; 

	}	
	
public static function getAllBymobile($mobile){
	
	$mysqli = new mysqli("localhost", "root", "", "bit");
	$quary = "select * from student where mobile like'".$mobile."%'"; 
	$result = $mysqli->query($quary);
	
	$students = array();
	
	while($row = $result->fetch_array(MYSQL_ASSOC)) {
            $students[] = $row;
    }	
		
    return $students; 

	}

public static function getAllBybitreg($bitreg){
	
	$mysqli = new mysqli("localhost", "root", "", "bit");
	$quary = "select * from student where bitreg like'".$bitreg."%'"; 
	$result = $mysqli->query($quary);
	
	$students = array();
	
	while($row = $result->fetch_array(MYSQL_ASSOC)) {
            $students[] = $row;
    }	
		
    return $students; 

	}
	
public static function getAllBynameAndmobile($name,$mobile){
	
	$mysqli = new mysqli("localhost", "root", "", "bit");
	$quary = "select * from student where name like '".$name."%'and mobile like'".$mobile."%'"; 
	$result = $mysqli->query($quary);
	
	$students = array();
	
	while($row = $result->fetch_array(MYSQL_ASSOC)) {
            $students[] = $row;
    }	
		
    return $students; 

	}

public static function getAllBynameAndbitreg($name,$bitreg){
	
	$mysqli = new mysqli("localhost", "root", "", "bit");
	$quary = "select * from student where name like '".$name."%' and bitreg like '".$bitreg."%'"; 
	$result = $mysqli->query($quary);
	
	$students = array();
	
	while($row = $result->fetch_array(MYSQL_ASSOC)) {
            $students[] = $row;
    }	
		
    return $students; 

	}

public static function getAllBymobileAndbitreg($mobile,$bitreg){
	
	$mysqli = new mysqli("localhost", "root", "", "bit");
	$quary = "select * from student where mobile like '".$mobile."%' and  bitreg like '".$bitreg."%' "; 
	$result = $mysqli->query($quary);
	
	$students = array();
	
	while($row = $result->fetch_array(MYSQL_ASSOC)) {
            $students[] = $row;
    }	
		
    return $students; 

	}




public static function getAllBynameAndmobileAndbitreg($name,$mobile,$bitreg){
	
	$mysqli = new mysqli("localhost", "root", "", "bit");
	$quary = "select * from student where name like '".$name."%' and mobile like '".$mobile."%' and bitreg like '".$bitreg."%'"; 
	$result = $mysqli->query($quary);
	
	$students = array();
	
	while($row = $result->fetch_array(MYSQL_ASSOC)) {
            $students[] = $row;
    }	
		
    return $students; 

}







		
}
?>