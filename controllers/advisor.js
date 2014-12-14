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
function saveDone(data) {
    alert(data);
}


function printAdvisees(){
    
    
}
function getStudentId(){
    
}

function print_session_messages(){
    
    
}
function save_free_time(){
//complete the url
                   // var id=vid;
                    var date =document.getElementById("date_info").value;
                    var id =document.getElementById("faculty_id").value;
                    console.log(date); 
                    console.log(id);     
                                               //var faculty =<php;
                    u="action_advisor.php?cmd=2&date="+date+"&id="+id;
                            
                      // syncAjax(u);
$.getJSON(u,saveDone);
// window.location.reload();
//cancelNew();
                   
}


