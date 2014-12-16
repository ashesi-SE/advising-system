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

class message extends adb {

   function message() {
      adb::adb();
   }

   /**
    * query all applicant in the table and store the dataset in $this->result	
    * @return if successful true else false
    */
   function get_message_by_id($id) {
      $query = "Select * from messages where student_has_advisor_id = $id";
      return $this->query($query);
   }

   function add_message($message, $id) {
      $query = "Insert into messages (message, student_has_advisor_id, date_created, date_modified) values ('$message', $id, now(), now()) ";
      return $this->query($query);
   }

   function send_message_to_advisor($student_has_advisor_id, $message) {
      $query = "Insert into messages (message,student_has_advisor_id, recepient, date_created) values ('$message', $student_has_advisor_id,'advisor',now())";
//                    print $query;
      return $this->query($query);
   }

   function send_message_to_student($student_has_advisor_id, $message) {
      $query = "Insert into messages (message,student_has_advisor_id, recepient, date_created) values ('$message', $student_has_advisor_id,'student',now())";
//                    print $query;
      return $this->query($query);
   }

   function get_messages_to_student_by_id($id) {
      $query = "Select * from messages where student_has_advisor_id = $id and recepient = 'student' order by date(date_created) desc";

      return $this->query($query);
   }

   function get_messages_to_advisor_by_id($id) {
      $query = "Select * from student left join student_has_advisor on student.student_id = student_has_advisor.student_id left join messages on student_has_advisor.student_has_advisor_id = messages.student_has_advisor_id where messages.recepient = 'advisor' and student.student_id = $id order by date(date_created) desc";
//                    $query="Select * from messages where student_id = $id and recepient = 'student'";  

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