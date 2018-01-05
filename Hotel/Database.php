<?php

class Database 
{
	protected $username="root";
	protected $password="";
	protected $db="android_api";
	protected $host="localhost";
	protected $conn;

	function __construct()
	{
		try {
	    $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username, $this->password);
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


       }
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
                       }





}
function get_hotel_detail($city){
	        $stmt = $this->conn->prepare("SELECT * FROM `blog_data` WHERE `category`='tech'");

    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    $arr_pre=array();
    foreach(new RecursiveArrayIterator($stmt->fetchAll()) as $k=>$v) {
     //print_r($v); 
    	 array_push($arr_pre,$v);
    
        
    }
    return $arr_pre;
 //print_r($arr_pre); 
 
}
}


?>