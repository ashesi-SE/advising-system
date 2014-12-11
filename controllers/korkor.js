/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function syncAjax(u) {
    var obj = $.ajax(
            {url: u,
                async: false
            }
    );
    return $.parseJSON(obj.responseText);

}

function send_meeting(id)
{
    var message = document.getElementById("message").value;
    alert("message to advisor");  
    var u = "action_korkor.php?cmd=3&id="+id +"&message=" + message;
    prompt("u", u);
    var r = syncAjax(u);      
    
    if(r.result === 1)
    {
        alert("Your messgae has been sent to your advisor");
    }
    
    else if(r.result === 0 )
    {
        alert("not added");
    }
}

function saveDone(data) {   
    alert(data);
}

function check_save_meeting_time(id)
{
//    alert(id);
  var date = document.getElementById("datepicker").value; 
//  alert(date);
  var r = setMeetingTime(id , date);    
  
  if(r.result === 1)
  {
     alert("You have a meeting with your advisor on " + date); 
  }
  
  else if(r.result === 0)
  {
      alert("sorry your advisor is busy on that day");
  }
  
}

function getFormattedDate(date) {
  var year = date.getFullYear();
  var month = (1 + date.getMonth()).toString();
  month = month.length > 1 ? month : '0' + month;
  var day = date.getDate().toString();
  day = day.length > 1 ? day : '0' + day;
  return year + '-' + month + '-' + day;
}
function setMeetingTime(id, date ) {  
    
    var u = "action_korkor.php?cmd=1&id=" + id + "&date=" + date;
//    prompt("u", u);
    return syncAjax(u);
//    alert(date);
}

function market()
{
    document.location.href = "market_place.php";
}

function check()
{
    var fname = document.getElementById("first_name").value;
    var lname = document.getElementById("last_name").value;
    var user_name = document.getElementById("user_name").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirm_password = document.getElementById("confirm_password").value;
    var bio = document.getElementById("bio").value;
    var team = document.getElementById("team").value;
    var logo = document.getElementById("logo").value;
    var phone_number = document.getElementById("phone_number").value;

    if (password === confirm_password)
    {

        var r = add(fname, lname, user_name, email, password, bio, team, phone_number);
        if (r.result === 0)
        {
//            alert("password");
            document.location.href = "index.php";
        }
        else
        {
            document.write("Sorry, either the ticket umber is wrong or your id number does not exist");
        }
    }
    else
    {

        document.location.href = "register_manager.php";
    }
}

function add(fname, lname, user_name, email, password, bio, team, phone_number)
{
    var u = "aplm_action.php?cmd=1&fname=" + fname + "&lname=" + lname + "&user_name=" + user_name + "&email=" + email + "&password=" + password + "&bio=" + bio + "&team=" + team + "&role=" + 2 + "&phone_number=" + phone_number;
    return syncAjax(u);


}

