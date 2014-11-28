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

class sessions_class extends adb {

    function sessions_class() {
        adb::adb();
    }

    /**
     * query all applicant in the table and store the dataset in $this->result	
     * @return if successful true else false
     */
    function add_meeting_time_by_student($id, $date) {
        $query = "Insert into sessions (student_has_advisor_id , scheduled_time, date_created , date_modified) values ($id, '$date' , now() , now())";
//                            print $query;  
        return $this->query($query);
    }

    function add_message($message, $id) {
        $query = "Insert into messages (message, student_has_advisor_id, date_created, date_modified) values ('$message', $id, now(), now()) ";
        return $this->query($query);
    }

//                function add_programmer($firstname,$lastname,$othernames,$cid,$cvid,$email,$phonenumber,$qualifications)
//                {
//                        $query = "insert into programmer (firstname,lastname,othernames,cid,cvid,email,phonenumber,qualifiations)
//                                 values ('$firstname','$lastname','$othernames','$cid,'$cvid','$email','$phonenumber','$qualifications')";
//                        return $this->query($query);
//		}
}

//$obj = new sessions_class();    
//
//if($obj->add_meeting_time_by_student(1, "2014-12-12"))
//{
//    print "here";
//}
//
?>