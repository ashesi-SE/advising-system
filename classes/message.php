<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of addquestion
 *
 * @author Miss
 */
include_once("adb.php");
class message extends adb{
    function message(){
			adb::adb();
		}
		
		/**
		*query all applicant in the table and store the dataset in $this->result	
		*@return if successful true else false
		*/
		
		function get_message_by_id($id){
			$query="Select * from messages where student_has_advisor_id = $id";
			return $this->query($query);
		}
			
		function add_message($message, $id)
                {
			$query ="Insert into messages (message, student_has_advisor_id, date_created, date_modified) values ('$message', $id, now(), now()) ";
			return $this->query($query);
		}
                
//                function add_programmer($firstname,$lastname,$othernames,$cid,$cvid,$email,$phonenumber,$qualifications)
//                {
//                        $query = "insert into programmer (firstname,lastname,othernames,cid,cvid,email,phonenumber,qualifiations)
//                                 values ('$firstname','$lastname','$othernames','$cid,'$cvid','$email','$phonenumber','$qualifications')";
//                        return $this->query($query);
//		}
                
}

//$obj = new message();    
//
//if($obj->add_message("hello there", 1))
//{
//    print "here";
//}


                ?>