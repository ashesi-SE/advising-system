<?php

include_once("adb.php");

class login_class extends adb {

   function login() {
      adb::adb();
   }

   function loginAs($user, $pass) {
      $query = "select count(*) as c from manager where username = '$user' and password = '$pass'";
//        print "quere " . $query;
      $this->query($query);

      $result = $this->fetch();
      if ($result['c'] == 1) {
         return true;
      } else {
         return false;
      }
   }
   
      function loadUserProfile($username) {
      //load username and other informaiton into the session      
      $query = "select * from manager where username = '$username';";
      
      $this->query($query);

      $result = $this->fetch();
      session_start();
      
      $_SESSION['username'] = $username;
      $_SESSION['role'] = $result['role_role_id'];
      $_SESSION['id'] = $result['manager_id'];
      $_SESSION['team_id'] = $result['team_team_id'];
      
      
      return $result;

   }
   
}
