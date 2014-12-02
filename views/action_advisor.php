<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of action_advisor
 *
 * @author maltiti
 */
include("../controllers/gen.php");

$cmd = get_datan("cmd");
switch ($cmd) {
   case 1:
      loginAsAdvisor();
      break;
}

function loginAsAdvisor() {
   include_once '../models/login_class.php';
   $user = get_data('user');
   $pass = get_data('pass');
   $p = new login_class();
   $val = $p->loginAsAdvisor($user, $pass);
   if ($val) {
      $row = $p->loadAdminProfile($user);
      if ($row) {
         echo "{";
         echo jsonn("result", 1);
         echo ',"user":';
         echo "{";
         echo jsons("username", $row["username"]) . ",";
//         print_r($row);
         echo jsonn("faculty_id", $row["faculty_id"]);
         echo "}";
         print "}";
      }return;
   }
   echo "{";
   echo jsonn("result", 0) . ",";
   echo jsons("message", "error, no record retrieved");
   echo "}";
}
