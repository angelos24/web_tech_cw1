var MIN_LENGTH = 2;

$( document ).ready(function() {
	$("#keyword").keyup(function() {
		var keyword = $("#keyword").val();
		if (keyword.length >= MIN_LENGTH) {
			$.get( "autocomplete.php", { keyword: keyword } )
			.done(function( data ) {
				$('#results').html('');
				
                                  var results=data.split(/","/);

                                
				$(results).each(function(key, value) {
			$('#results').append('<div class="item">' + value+'</div>');
				})
                             

                               

			    $('.item').click(function() {
			    	var text1 = $(this).html();
                                  
                                     var text=text1.replace(/[^&a-zA-Z ]/g, "");
                                           text=text.trim();
                                            text=text.replace('&amp','&');
                                             text=text.replace('Communication ','Communication, ');
                                             text=text.replace('Business Communication, ','Business Communication ');
                                             text=text.replace('Sandwich','(Sandwich)');
                                             text=text.replace('Graduate Entry','(Graduate Entry)');


                                       
                                   
			    	$('#keyword').val(text);
                           
			    })
                           
			});
		} else {
			$('#results').html('');
		}
	});


    $("#keyword").blur(function(){
    		$("#results").fadeOut(500);
    	})
        .focus(function() {		
    	    $("#results").show();
    	});

});