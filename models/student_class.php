<?php

include_once 'adb.php';

/**
 * Description of student_class
 *
 * @author Del
 */
class student_class extends adb {

   //put your code here
   function student_class() {
      adb::adb();
   }

   function get_all_students() {
      $query = "Select * from student";
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

   function get_student_details_from_id($id) {
      $query = "Select * from student where student_id = $id";
      return $this->query($query);
   }

   function get_advisors_free_time($student_id) {
      $query = "Select * from advisor_free_times left join student_has_advisor on student_has_advisor.faculty_faculty_id = advisor_free_times.faculty_id where student_id = $student_id";

      return $this->query($query);
   }

   function get_student_courses($student_id) {
      $query = "Select * from student_grades left join student on student_grades.student_id = student.student_id where student_grades.student_id = $student_id";

      return $this->query($query);
   }

//   function get_student_has_advisor_id_by_student_id($id)
//   {
//       $query = "Select * from student_has_advisor where student_id =$id";
////       print $query;
//       return $this->query($query);  
//   }
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