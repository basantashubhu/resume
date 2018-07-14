//showing add new modal
$(document).off('click', '.add-new').on('click', '.add-new', function(e){
	e.preventDefault();
	ajaxPatch($(this));
});
//showing edit new modal
$(document).off('click', '.edit').on('click', '.edit', function(e){
	e.preventDefault();
	ajaxPatch($(this));
});
//showing delete new modal
$(document).off('click', '.delete').on('click', '.delete', function(e){
	e.preventDefault();
	let url = $(this).data('action');
	swal('Do you want to delete this ??', 'It can not be recovered once deleted.', 'warning',
		{buttons:true, closeOnClickOutside:false})
	.then(function(val){
		if(val != null)
			callAjax({url:url,method:'DELETE'},function(){
				swal('Successfully Deleted !','','success');
				$('.swal-footer').addClass('text-center');
				$(document).find('.user-tabs div.bg-light a').trigger('click');
			});
	});
	$('.swal-footer').addClass('text-center');
});

//load swal and append response
function ajaxPatch(element){
	let url = element.data('action');
	callAjax({url:url}, function(response){
		swal({text:'body',buttons:{cancel:'Cancel',success:{text:'Submit',closeModal:false}},
			closeOnClickOutside:false
		}).then(function(val){if(val==null)$(document).find('.user-tabs div.bg-light a').trigger('click');});
		$('.swal-text').html(response).css('width', '90%');
		$('.swal-footer').css({'padding':'0 1.8rem 1rem 1rem','margin-top':'0'});
	}, function(err){
		swal('Error '+err.status+' !!!', 'Sorry for the errror.', 'warning');
		$('.swal-footer').addClass('text-center');
	});
}

//submit the form with server site validation
$(document).off('click', '.swal-button--success').on('click','.swal-button--success', function(e){
	e.preventDefault();
	$(document).find('form#user-data-form').submit();
	$(this).removeClass('swal-button--loading');
});
$(document).off('submit', '#user-data-form').on('submit', '#user-data-form', function(e){
	e.preventDefault();
	let form = $(this);
	let url = form.attr('action');
	let method = form.attr('method');
	let data = form.serializeArray();
	callAjax({url:url,method:method,data:data}, function(response){
		swal.close();
		$(document).find('.user-tabs div.bg-light a').trigger('click');
	}, function(err){
		let keys = [];
		form.find('[name]').css('border', '1px solid #ced4da').siblings('span').remove();
		$.each(err.responseJSON.errors, function(key,value){
			form.find('[name="'+key+'"]').css('border', '1px solid brown')
			.off('focus').on('focus', function(e){
				$(this).css('border', '1px solid #ced4da');
			});
			keys.push(key);
		});
		let err_codes = [404,405,500];
		if(err_codes.includes(err.status))
			swal('Error '+err.status+' !!!','Sorry for the error.', 'warning');
	});
});
