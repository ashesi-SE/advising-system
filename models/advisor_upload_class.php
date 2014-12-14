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
    //gets all reports from advisors
    function advisor_reports(){
       $query = "SELECT * 
FROM advisor_upload
LEFT JOIN faculty ON faculty.faculty_id = advisor_upload.faculty_id
ORDER BY (
date_created
) DESC 
LIMIT 0 , 30";
//                            print $query;  
      return $this->query($query); 
    }
    
    // sends a report to the hod
    function add_report_from_advisor($faculty_id, $path){
        $query1 = "insert into advisor_upload(faculty_id, path, date_created) values($faculty_id, '$path', now())";

//      print $query1;
      return $this->query($query1);
    }
    
}
			
?>
