<?php

include_once("adb.php");

/**
 * This class allows the user to log in
 */
class login_class extends adb {

   function login() {
      adb::adb();
   }

   /**
    * Allows the user to log in
    * @param type $user the user name of the user
    * @param type $pass the password of the user
    * @return boolean returns true if the user exists, false otherwise
    */
   function loginAs($user, $pass) {
      $query = "select count(*) as c from student where username = '$user' and password = '$pass'";
//        print "quere " . $query;
      $this->query($query);

      $result = $this->fetch();
      if ($result['c'] == 1) {
         return true;
      } else {
         return false;
      }
   }

   /**
    * Loads the user profile
    * @param type $username the username of person supposed to be loaded
    * @return type boolean return true if successfully loaded users details, false otherwise
    */
   function loadUserProfile($username) {
      //load username and other informaiton into the session      
      $query = "select * from student where username = '$username';";

      $this->query($query);

      $result = $this->fetch();
      session_start();

      $_SESSION['username'] = $username;
//      $_SESSION['role'] = $result['role_role_id'];
      $_SESSION['id'] = $result['student_id'];
//      $_SESSION['team_id'] = $result['team_team_id'];


      return $result;
   }

   function loginAsAdvisor($user, $pass) {
      $query = "select count(*) as c from faculty where username = '$user' and password = '$pass'";
//        print "quere " . $query;
      $this->query($query);

      $result = $this->fetch();
      if ($result['c'] == 1) {
         return true;
      } else {
         return false;
      }
   }

   function loadAdminProfile($username) {
      //load username and other informaiton into the session      
      $query = "select * from faculty where username = '$username';";
//print $query;
      $this->query($query);

      $result = $this->fetch();
      session_start();

      $_SESSION['username'] = $username;
//      $_SESSION['role'] = $result['role_role_id'];
      $_SESSION['faculty_id'] = $result['faculty_id'];
      $_SESSION['firstname'] = $result['first_name'];
      $_SESSION['lastname'] = $result['last_name'];
      
//      $_SESSION['team_id'] = $result['team_team_id'];


      return $result;
   }

}
