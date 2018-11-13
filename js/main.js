$(document).ready(function(){ 

	// Ajex-Check UserName Availability.........................
        
	$('#username').blur(function(){
        var username = $(this).val();
        $.ajax({
            url:"check/checkusername.php",
            method:"POST",
            data:{username:username},
            dataType:"text",
            success:function(data){
                $('#userstatus').html(data);
            }
        });
	});


	//Ajex-Autocomplete TextBox...............................
        
	$('#skill').keyup(function(){
        var skill = $(this).val();
            if (skill != '') {
        	    $.ajax({
                url:"check/checkskill.php",
                method:"POST",
                data:{skill:skill},
                dataType:"text",
                success:function(data){
                    $('#skillstatus').fadeIn();
                    $('#skillstatus').html(data);
                }
            });
        }
	});
	$(document).on('click', 'li', function(){
		$('#skill').val($(this).text());
		$('#skillstatus').fadeOut();
	});

    //Show/Hide Password.........................................
    
    $('#showpassword').on('click', function(){
		var pass = $('#password');
		var fieldtype = pass.attr('type');
		if (fieldtype == 'password') {
			pass.attr('type', 'text');
			$(this).text('Hide Password');
		}else{
			pass.attr('type', 'password');
			$(this).text('Show Password');
		}
	});
        
        
    //Auto Refresh Div Content : Insert..................................
    
    $("#autosubmit").click(function(){
        var content = $("#body").val();
        if($.trim(content) != ''){
           $.ajax({
                url:"check/checkrefresh.php",
                method:"POST",
                data:{body:content},
                dataType:"text",
                success:function(data){
                    $('#body').val("");
                }
            }); 
            return false;
        }
    });
    
    //Auto Refresh Div Content : Show..................................
    
    setInterval(function(){
        $("#autostatus").load("check/getrefresh.php").fadeIn("slow");
    }, 1000);
    
    //Live Data Search.................................................
    
    $("#livesearch").keyup(function(){
        var live = $(this).val();
        if(live != ''){
            $.ajax({
                url: "check/livesearch.php",
                method: "POST",
                data: {search:live},
                dataType: "text",
                success: function(data){
                    $("#datastatus").html(data);
                }
            });
        }else{
            $("#datastatus").html("");
        }
    });
    
    //Auto Save Data.................................................
    
    function autoSave(){
        var content     = $("#content").val();
        var contentid   = $("#contentid").val();
        if(content != ''){
            $.ajax({
               url:"check/autosave.php ",
               method:"POST",
               data:{content:content,contentid:contentid},
               dataType:"text",
               success:function(data){
                   if(data != ''){
                      $('#contentid').val(data); 
                   }
                   $('#savestatus').text("Content Save as Draft...");
                   setInterval(function(){
                       $('#savestatus').text("");
                   }, 2000);
               }
            });
        }
    }
    setInterval(function(){
        autoSave()
        }, 10000);
    
 });  