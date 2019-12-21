$(function() {
  $('#ajax_form').submit(function(e) {
    	var form = $(this);
        $.ajax({
	        type: "POST",
	        url: form.attr('action'),
	        data: form.serialize(),
	        success: function(response) {
	        	var out = $(response).find('#out_ajax');
           		$("#out_ajax").html("<h3><span class='ml-3'>" + out.html() + "</span></h3>");
        	},
        });
        
        e.preventDefault(); 
  });
});