<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of advisor_class
 *
 * @author maltiti
 */
class advisor_class extends adb {

   //put your code here
   function advisor_class() {
      adb::adb();
   }

   function all_advisees() {
      $query = "Select * from student inner join faculty on student.student_has_id=faculty.student_has_id";
//                            print $query;  
      return $this->query($query);
   }

   function set_available_time($id, $date) {
      $query = "Insert into advisor_free_times(dates_available,faculty_id) values ($date,$id)";
//                            print $query;  
      return $this->query($query);
   }

   function get_notes_per_session($student_id) {
      $query = "Select * from (student,messages) "
              . "join session on session.student_has_id=messages.student_has_id and session.student_has_id=student.student_has_id where student.student_id=$student_id";
//                            print $query;  
      return $this->query($query);
   }

}
