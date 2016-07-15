$("#js-colony-change").change(function ()
{
	var urlstring = "/voter/" + $("#ajax-search-form select[name='colony']").val();
	
	$.ajax({
            url: urlstring,
            type:"GET",
			beforeSend: function (xhr) {
            	var token = $("input[name='_token']").attr('value');

            	console.log(token);
            	if (token) {
                	  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
            	}
        	},
        	success:function(data){
                $('#js-list-items').html(data);
            },
            error:function(){ 
                console.log("error!!!!");
            }
        }); 

});
