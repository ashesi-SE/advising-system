<?php

include_once 'adb.php';

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

   /**
    * Get advisees for a particular advisor
    * @param type $advisor_id
    */
   function get_advisees($advisor_id) {
      $query = "Select * from student_has_advisor left join student on student_has_advisor.student_id = student.student_id where faculty_faculty_id = $advisor_id";

      return $this->query($query);
   }

}

//$advisor_id = 1;
//include_once '../models/advisor_class.php';
//$adv_obj = new advisor_class();
//if ($adv_obj->get_advisees($advisor_id)) {
//   $row = $adv_obj->fetch();
//
//   while ($row) {
//
//      print "<li>" . "<a href='#'>" . "<i class='fa fa-fw fa-bar-chart-o'></i>";
//      print $row["first_name"] . " " . $row["last_name"];
//      print"</a>" . "</li>";
//
//      $row = $adv_obj->fetch();
//   }
//}