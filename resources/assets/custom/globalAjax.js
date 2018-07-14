
function callAjax(parameters, callback = null, errorCallback = null){
	let url = parameters.url ? parameters.url : '/';
	let method = parameters.method ? parameters.method : 'GET';
	let data = parameters.data ? parameters.data : {};
	let div_id = parameters.div_id ? parameters.div_id : null;

	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});

    $.ajax({
    	url:url,
    	method:method,
    	data:data,
    	beforeSend: function(){

    	},
    	error: function(err){
    		if( typeof(errorCallback) != 'String' ){
    			errorCallback(err);
    		}
    	},
    	success: function(response){
    		if( typeof(callback) != 'String' ){
    			callback(response);
    		}
    	}
    });
}