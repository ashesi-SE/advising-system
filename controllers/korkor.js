/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).on('click', '.panel-heading span.icon_minim', function (e) {
    var $this = $(this);
    if (!$this.hasClass('panel-collapsed')) {
        $this.parents('.panel').find('.panel-body').slideUp();
        $this.addClass('panel-collapsed');
        $this.removeClass('glyphicon-minus').addClass('glyphicon-plus');
    } else {
        $this.parents('.panel').find('.panel-body').slideDown();
        $this.removeClass('panel-collapsed');
        $this.removeClass('glyphicon-plus').addClass('glyphicon-minus');
    }
});
$(document).on('focus', '.panel-footer input.chat_input', function (e) {
    var $this = $(this);
    if ($('#minim_chat_window').hasClass('panel-collapsed')) {
        $this.parents('.panel').find('.panel-body').slideDown();
        $('#minim_chat_window').removeClass('panel-collapsed');
        $('#minim_chat_window').removeClass('glyphicon-plus').addClass('glyphicon-minus');
    }
});
$(document).on('click', '#new_chat', function (e) {
    var size = $( ".chat-window:last-child" ).css("margin-left");
     size_total = parseInt(size) + 400;
    alert(size_total);
    var clone = $( "#chat_window_1" ).clone().appendTo( ".container" );
    clone.css("margin-left", size_total);
});
$(document).on('click', '.icon_close', function (e) {
    //$(this).parent().parent().parent().parent().remove();
    $( "#chat_window_1" ).remove();
});

 $('.form_datetime').datetimepicker({
//        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1  
    });
	$('.form_date').datetimepicker({
//        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
//        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
    
    function trial()
    {
        alert("hellurrr");
    }
    
    function syncAjax(u) {
    var obj = $.ajax(
            {url: u,
                async: false
            }
    );
    return $.parseJSON(obj.responseText);

}

function saveDone(data) {
    alert(data);
}

function check_save_meeting_time(id)
{
//    alert(id);   
  var date = document.getElementById("datepicker").value; 
  var monthsNumber = ["1", "2", "3","4","5","6","7","8","9","10","11","12"];
  var months = [ "January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December" ];
  var month = splitDate(date);  
  var x = month[1];
//  alert("this is the month" + month[1] + "and this is the month number " + monthsNumber[months.indexOf(x)] + "this is the array " + month); 
  var newDate = month[2] + "-"+(months.indexOf(x)+1)+"-"+month[0];
//  alert("this is the new date" + newDate);  
     
  
//   var string = Date.parse(date);
//  var string = g;
//  alert("this is the month " + date);   
//  var day = date.getDay();     
//  var month = date.getMonth();   
//  var year = date.getYear();
//  alert(d);    
  var r = setMeetingTime(id , newDate);    
  
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
    prompt("u", u);
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

function splitDate(date){
    return date.split(" ");
}