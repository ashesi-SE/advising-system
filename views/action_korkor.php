<?php

include("../controllers/gen.php");

$cmd = get_datan("cmd");
switch ($cmd) {
    case 1:
        add_meeting_time();
        break;

    case 2:
        check();
        break;

    default:
        echo "{";
        echo jsonn("result", 0) . ",";
        echo jsons("message", "unknown command");
        echo "}";
}

function add_meeting_time() {
    include_once '../classes/sessions_class.php';
    $id = get_datan("id");
    $date = get_data("date");
    $obj = new sessions_class();
    if ($obj->add_meeting_time_by_student($id, $date)) {
        echo "{";
        echo jsonn("result", 1) . ",";
        echo jsons("message", "herer");
        echo "}";
    }
    
 else {  
 echo "{";
        echo jsonn("result", 0) . ",";
        echo jsons("message", "herer");
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

    $obj = new manager_class();

    if ($obj->add_manager($fname, $lname, $user_name, $password, $bio, $phone_number, $email, $role, $team)) {
        echo "{";
        echo jsonn("result", 0) . ",";
        echo jsons("message", "herer");
        echo "}";
    }
}

//function update() {
//    include_once("vaccines.php");
//    $id = get_datan("id");
//    $name = get_data("name");
//    $schedule = get_datan("schedule");
//    $url = get_data("url");
//    $v = new vaccines();
//    print "$name" . "$schedule";
//    $v->update_vaccine($id, $name, $schedule, $url);
//}

function check() {
    include_once("reservation.php");
    $ticket = get_datan("ticket");
    $id = get_datan("id_number");
    $obj = new reservation();
    $obj->check_id($ticket, $id);
    $row = $obj->fetch();

    if ($row) {
        echo "{";
        echo jsonn("result", 1) . ",";
        echo jsons("message", "answer not found");
        echo "}";
        return;
    }
}

?>