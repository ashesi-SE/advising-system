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
    
    function all_advisees($faculty_id){
         $query = "Select * from student_has_advisor inner join  on student_has_advisor.student_id=student.student_id where student_has_advisor.faculty_id=$faculty_id";
//                            print $query;  
        return $this->query($query);
        
    }
    function set_available_time($id,$date){
         $query = "Insert into advisor_free_times(dates_available,faculty_id) values ($date,$id)";
//                            print $query;  
        return $this->query($query);
        
    }
    function insert_notes_per_session($student_id){
   $query = "Inser into ";
//                            print $query;  
        return $this->query($query);  
        
    }
    function send_messages($message,$recipient){
   $query = "Insert into message(message,recipient) values ($messages,$faculty,$student_id) ";
//                            print $query;  
        return $this->query($query);  
        
    }
}
