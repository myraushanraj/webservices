<?php
	
class hotels{




	function getDetail(){

		$array = array();  
           $query = "SELECT * FROM hotel_detail";  
           $result = mysqli_query($this->conn, $query);  
           while($row = mysqli_fetch_assoc($result))  
           {  
                $array[] = $row;  
           }  
           return $array;  
      } 
	}

?>