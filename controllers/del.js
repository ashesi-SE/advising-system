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
      window.open("schedule.php", "_self");
   }
   else if (r.result === 2) { // signifies player
      window.open("player_profile.php", "_self");
   }
   else {
      alert("username or password wrong");
      return;
   }
}
