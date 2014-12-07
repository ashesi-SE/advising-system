<?php

include("../controllers/gen.php");

$cmd = get_datan("cmd");
switch ($cmd) {
   case 1:
      assign_students();
      break;

   case 2:
      get_students();
      break;

   case 3:
      get_advisors();
      break;

   case 4:
      set_time();
      break;

   case 5:
      get_sessions();
      break;

   case 6:
      send_notification();
      break;

   case 7:
      send_request_to_manager();
      break;

   case 8:
      login_facutly();
      break;

   default:
      echo "{";
      echo jsonn("result", 0) . ",";
      echo jsons("message", "unknown command");
      echo "}";
}

function assign_students() {
   include_once '../models/student_has_advisor_class.php';
   $student_id = get_data("student_id");
   $advisor_id = get_data("advisor_id");

   $obj = new student_has_advisor_class();
   if (!$obj->assign_student_to_advisor($student_id, $advisor_id)) {
      echo "{";
      echo jsonn("result", 0) . ",";
      echo jsons("message", "Could not assign student to advisor");
      echo "}";
      return;
   }
   echo "{";
   echo jsonn("result", 1) . ",";
   echo jsons("message", "Successful assignment");
   echo "}";
}

function get_students() {
   include_once '../models/student_class.php';
   $s_obj = new student_class();
   if (!$s_obj->get_all_students()) {
      echo "{";
      echo jsonn("result", 0) . ",";
      echo jsons("Message", "No students found");
      echo "}";
      return;
   }
   $row = $s_obj->fetch();

   if (!$row) {

      echo "{";
      echo jsonn("result", 0) . ",";
      echo jsons("Message", "No students found1d");
      echo "}";
      return;
   } else {
      echo "{";
      echo jsonn("result", 1);
      echo ',"students":';
      echo "[";

      while ($row) {
         echo "{";
         echo jsonn("student_id", $row["student_id"]) . ",";
         echo jsons("first_name", $row["first_name"]) . ",";
         echo jsons("middle_name", $row["middle_name"]) . ",";
         echo jsons("last_name", $row["last_name"]) . ",";
         echo jsons("username", $row["username"]) . ",";
         echo jsons("major", $row["major"]);
         echo "}";

         $row = $s_obj->fetch();
         if ($row) {
            echo ",";
         }
      }
      echo "]}";
   }
}

function get_advisors() {
   include_once '../models/advisor_class.php';
   $s_obj = new advisor_class();
   if (!$s_obj->get_all_advisors()) {
      echo "{";
      echo jsonn("result", 0) . ",";
      echo jsons("Message", "No advisors found");
      echo "}";
      return;
   }
   $row = $s_obj->fetch();

   if (!$row) {

      echo "{";
      echo jsonn("result", 0) . ",";
      echo jsons("Message", "No advisors found1d");
      echo "}";
      return;
   } else {
      echo "{";
      echo jsonn("result", 1);
      echo ',"advisors":';
      echo "[";

      while ($row) {
         echo "{";
         echo jsonn("faculty_id", $row["faculty_id"]) . ",";
         echo jsons("first_name", $row["first_name"]) . ",";
         echo jsons("middle_name", $row["middle_name"]) . ",";
         echo jsons("last_name", $row["last_name"]) . ",";
         echo jsons("username", $row["username"]) . ",";
         echo jsons("department_name", $row["department_name"]);
         echo "}";

         $row = $s_obj->fetch();
         if ($row) {
            echo ",";
         }
      }
      echo "]}";
   }
}

function send_request_to_manager() {
   include_once("./request_class.php");
   $manager_id = get_datan("manager_id");
   $player_id = get_datan("player_id");
   $obj = new request_class();
   if ($obj->request_add_by_player($manager_id, $player_id)) {
      echo "{";
      echo jsonn("result", 0) . ",";
      echo jsons("message", "herer");
      echo "}";
   } else {

      echo "{";
      echo jsonn("result", 1) . ",";
      echo jsons("message", "not updated");
      echo "}";
   }
}

function manager_request_table() {
   include_once("./request_class.php");
   include_once("player_class.php");
   $player_id = get_datan("player_id");
   $team_id = get_datan("team_id");
   $request_id = get_datan("request_id");
   $obj_player = new player_class();
   $obj_request = new request_class();

   if ($obj_player->update_player($team_id, $player_id)) {
      $obj_request->delete_manager_request($request_id);
      echo "{";
      echo jsonn("result", 1) . ",";
      echo jsons("message", "herer");
      echo "}";
   } else {

      echo "{";
      echo jsonn("result", 0) . ",";
      echo jsons("message", "not updated");
      echo "}";
   }
}

function player_request_table() {
   include_once("player_class.php");
   include_once("./request_class.php");
   $player_id = get_datan("player_id");
   $team_id = get_datan("team_id");
   $request_id = get_datan("request_id");
   $obj_player = new player_class();
   $obj_request = new request_class();

   if ($obj_player->update_player($team_id, $player_id)) {

      $obj_request->delete_player_request($request_id);
      echo "{";
      echo jsonn("result", 1) . ",";
      echo jsons("message", "herer player");
      echo "}";
   } else {

      echo "{";
      echo jsonn("result", 0) . ",";
      echo jsons("message", "not updated");
      echo "}";
   }
}

function add_manager() {
   include_once("manager_class.php");
   $fname = get_data("fname");
   $lname = get_data("lname");
   $user_name = get_data("user_name");
   $email = get_data("email");
   $password = get_data("password");
   $bio = get_data("bio");
   $team = get_datan("team");
   $role = get_datan("role");
   $phone_number = get_datan("phone_number");

   $check = new manager_class();
//   print ($check->check_manager_exists($user_name));
   if ($check->check_manager_exists($user_name)) {
      echo "{";
      echo jsonn("result", 0) . ",";
      echo jsons("message", "Username taken, please try another");
      echo "}";
      return;
   }

   $obj = new manager_class();

   if ($obj->add_manager($fname, $lname, $user_name, $password, $bio, $phone_number, $email, $role, $team)) {
      echo "{";
      echo jsonn("result", 1) . ",";
      echo jsons("message", "Succssful");
      echo "}";
   } else {
      echo "{";
      echo jsonn("result", 0) . ",";
      echo jsons("message", "Unuccssful");
      echo "}";
   }
}

function login_admin_kor() {
   include_once 'login_class.php';
   $user_name = get_data("user_name");
   $password = get_data("password");
   $obj = new login_class();

   if ($obj->loginAsAdmin($user_name, $password)) {
      echo "{";
      echo jsonn("result", 1) . ",";
      echo jsons("message", "login successful");
      echo "}";
      $obj->loadUserProfileAdmin($user_name);
   } else {
      echo "{";
      echo jsonn("result", 0) . ",";
      echo jsons("message", "login unsuccessful");
      echo "}";
      return;
   }
}

function login() {
   include_once '../models/login_class.php';
   $user = get_data('user');
   $pass = get_data('pass');
   $p = new login_class();
   $val = $p->loginAs($user, $pass);
   if ($val) {
      $row = $p->loadUserProfile($user);
      if ($row) {
         echo "{";
         echo jsonn("result", 1);
         echo ',"user":';
         echo "{";
         echo jsons("username", $row["username"]) . ",";
//         print_r($row);
         echo jsonn("student_id", $row["student_id"]);
         echo "}";
         print "}";
      }return;
   }
   echo "{";
   echo jsonn("result", 0) . ",";
   echo jsons("message", "error, no record retrieved");
   echo "}";
}

function list_advisees() {
   include_once '../models/advisor_class.php';
   $list = new advisor_class();
   $row = $list->all_advisees();
   $info = $row->fetch();
   while ($row) {

      echo "{";
      echo jsonn("result", 1) . ",";
      echo '"full_name":';
      echo"{";
      echo jsons("firstname", $info["first_name"]) . ",";
      echo jsons("lastname", $info["last_name"]);
      echo "}";
      echo "}";
      $info = $row->fetch();
   }return;

   echo "{";
   echo jsonn("result", 0) . ",";
   echo jsons("message", "error, no record retrieved");
   echo "}";
}

function set_time() {
   include_once '../models/advisor_class.php';
   $list = new advisor_class();
   $date = get_data('date');
   $id = get_datan('id');
   $list->set_available_time($id, $date);
}

function get_sessions() {
   include_once '../models/advisor_class.php';
   $note = new advisor_class();
   $id = get_datan($studentId);
   $row = $note->get_notes_per_session($id);
   $info = $row->fetch();
   while ($row) {

      echo "{";
      echo jsonn("result", 1) . ",";
      echo '"full_name":';
      echo"{";
      echo jsonn("student_id", $info["student_id"]) . ",";
      echo jsons("message", $info["message"]);
      echo "}";
      echo "}";
      $info = $row->fetch();
   }return;

   echo "{";
   echo jsonn("result", 0) . ",";
   echo jsons("message", "error, no record retrieved");
   echo "}";
}
