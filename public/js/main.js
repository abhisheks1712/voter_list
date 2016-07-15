function onChangeForm()
{
	var urlstring = "/voter/search";

	console.log(urlstring);

	$.ajax({
            url: urlstring,
            type:"GET",
            data: {
            	colony: $("#ajax-search-form select[name='colony']").val(),
				serial: $("#ajax-search-form input[name='serial']").val(),
				epic: $("#ajax-search-form input[name='epic']").val(),
				mobile: $("#ajax-search-form input[name='mobile']").val()
            },
			beforeSend: function (xhr) {
            	var token = $("input[name='_token']").attr('value');
            	console.log(token);
            	if (token) {
                	  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
            	}
        	},
        	success:function(data){
        		console.log(data);
                $('#js-list-items').html(data);
            },
            error:function(){
                console.log("error!!!!");
            }
        });

}


$("#js-colony-change").change(onChangeForm);
$("#js-serial-change").keyup(onChangeForm);
$("#js-epic-change").keyup(onChangeForm);
$("#js-mobile-change").keyup(onChangeForm);
