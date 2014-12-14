<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
/* @author Martha Kumi */

/* Class to store records advisor sends to Head of Department */
include_once("adb.php");

class advisor_upload_class extends adb{
    function advisor_upload_class(){
        adb::adb();
    }
    
    function advisor_reports(){
       $query = "select * from advisor_upload left join faculty on faculty.faculty_id = advisor_upload.faculty_id order by Date(date_created) desc";
//                            print $query;  
      return $this->query($query); 
    }
    
    function add_report_from_advisor($faculty_id, $path){
        $query1 = "insert into advisor_upload(faculty_id, path,date_created) values($faculty_id, '$path',now())";

//      print $query1;
      return $this->query($query1);
    }
    
}
			
?>
