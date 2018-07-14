$(document).ajaxComplete( function(){
	tableResponsive();
});
$(document).ready( function(){
	tableResponsive();
});

function tableResponsive(){
	if($(window).width() <= 991){
	  let table = '';
	  $('.table tbody tr td').each(function(){
	  		table += `<tr>
	  						<td>${$(this).data('name')}</td>
					  		<td>${$(this).html()}</td>
					  </tr>`;
			if($(this).data('name') == 'Action')
				table += '<tr style="background:#e2e2e2;"><td>&nbsp;<td><td>&nbsp;</td></tr>';
	  });
	  $('.table').html(table);
	}
}