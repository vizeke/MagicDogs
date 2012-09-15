/*Funcoes Ajax*/

function getFullPathName()
{
    return location.protocol + '//' + location.hostname + location.pathname;
}

jQuery(document).ready(function() {  
    var GreetingAll = jQuery("#GreetingAll").val();  
    jQuery("#PleasePushMe").click(function(){ 
        jQuery.ajax({  
        type: 'POST',  
        url: getFullPathName() + 'wp-admin/admin-ajax.php',  
        data: { action: 'MyAjaxFunction', GreetingAll: GreetingAll },  
        success: function(data, textStatus, XMLHttpRequest){  
            jQuery("#test-div1").html('');  
            jQuery("#test-div1").append(data);  
        },  
        error: function(MLHttpRequest, textStatus, errorThrown){  
            console.log(MLHttpRequest);
            console.log(textStatus);
            console.log(errorThrown);
        }  
    });  
  });  
});

