/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function syncAjax(u) {
   var obj = $.ajax({url: u, async: false});
   return $.parseJSON(obj.responseText);
}

function login() {

//complete the url
   var user = document.getElementById("username").value;
   var pass = document.getElementById("password").value;
   var u = "action.php?cmd=1&user=" + user + "&pass=" + pass;
//   prompt("url", u);
   r = syncAjax(u);
//   prompt(r.user);

//                alert(r.result);
   if (r.result === 1) { // signifies manager
      window.open("student_view.php", "_self");
   }
   else {
      alert("username or password wrong");
      return;
   }
}

function login_faculty() {
   var user = document.getElementById("username").value;
   var pass = document.getElementById("password").value;
//   debugger;
   var u = "action_advisor.php?cmd=1&user=" + user + "&pass=" + pass;
//   prompt("r.user", u);
   r = syncAjax(u);
//   prompt(r.user);

//                alert(r.result);
   if (r.result === 1) { // signifies manager
      window.open("advisor_home.php", "_self");
   }
   else {
      alert("username or password wrong");
      return;
   }
}

function login_hod() {
   var user = document.getElementById("username").value;
   var pass = document.getElementById("password").value;
   var u = "action_del.php?cmd=11&user=" + user + "&pass=" + pass;
//   prompt("r.user", u);
   r = syncAjax(u);
//   prompt(r.user);

//                alert(r.result);
   if (r.result === 1) { // signifies manager
      window.open("hod_home.php", "_self");
   }
   else {
      alert("username or password wrong");
      return;
   }
}

function login_provost() {
   var user = document.getElementById("username").value;
   var pass = document.getElementById("password").value;
   var u = "action_del.php?cmd=9&user=" + user + "&pass=" + pass;
//   prompt("r.user", u);
   r = syncAjax(u);
//   prompt(r.user);

//                alert(r.result);
   if (r.result === 1) { // signifies manager
      window.open("provost_home.php", "_self");
   }
   else {
      alert("username or password wrong");
      return;
   }
}
