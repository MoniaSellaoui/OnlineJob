 $(function () {
    $("#dash-table").DataTable();
    $('#dash-table2').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": false,
    "ordering": true,
    "info": true,
    "autoWidth": false
    });
});


$("#btnlogin").click(function(){
    var username = document.getElementById("user_email");
    var pass = document.getElementById("user_pass");

    // alert(username.value)
    // alert(pass.value)
    if(username.value=="" && pass.value==""){   
    $('#loginerrormessage').fadeOut(); 
            $('#loginerrormessage').fadeIn();  
            $('#loginerrormessage').css({ 
                    "background" :"red",
                    "color"      : "#fff",
                    "padding"    : "5px;"
                }); 
    $("#loginerrormessage").html("Invalid Username and Password!");
    //  $("#loginerrormessage").css(function(){ 
    //   "background-color" : "red";
    // });
    }else{

    $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "process.php?action=login",    
        dataType: "text",  //expect html to be returned  
        data:{USERNAME:username.value,PASS:pass.value},               
        success: function(data){   
            // alert(data);
            $('#loginerrormessage').fadeOut(); 
            $('#loginerrormessage').fadeIn();  
            $('#loginerrormessage').css({ 
                    "background" :"red",
                    "color"      : "#fff",
                    "padding"    : "5px;"
                }); 
        $('#loginerrormessage').html(data);   
        } 
        }); 
    }
    });


$('input[data-mask]').each(function() {
var input = $(this);
input.setMask(input.data('mask'));
});


$('#BIRTHDATE').inputmask({
mask: "2/1/y",
placeholder: "mm/dd/yyyy",
alias: "date",
hourFormat: "24"
});
$('#HIREDDATE').inputmask({
mask: "2/1/y",
placeholder: "mm/dd/yyyy",
alias: "date",
hourFormat: "24"
});

$('.date_picker').datetimepicker({
format: 'mm/dd/yyyy',
startDate : '01/01/1950', 
language:  'en',
weekStart: 1,
todayBtn:  1,
autoclose: 1,
todayHighlight: 1, 
startView: 2,
minView: 2,
forceParse: 0 

});