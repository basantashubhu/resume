@extends('layouts.app')

@section('content')
	<section id="basic-info" class="mt-5">
		<div class="container">
			<div class="row align-items-end">

				<div class="col-sm-5 col-md-4 col-lg-3 mt-3">
					<p class="user-name text-info">
						{{authMember()->title == 'MR/MRS' ? '' : authMember()->title}}
						{{fullname()}}
					</p>
					<p class="user-email text-info">{{authMember()->email}}</p>
					<p class="user-profession text-info">{{authMember()->profession}}</p>
						@if(authMember()->contact)
						<p class="user-phone text-info mb-0">
							{{ authMember()->contact->contact }}
						</p>
						@endif
				</div>

				<div class="col-sm text-right">
					<a href="#" class="btn btn-info rounded-0 btn-sm show-template">Export to PDF</a>
				</div>
				<hr>
			</div>
			<hr>

			@include('users.profile.include.user-tabs')

			<hr class="mb-0">
			<div class="row">
				<div class="col-12">
					<div id="wrapper" class="">

						@include('users.profile.personal-info.show')

					</div>
				</div>
			</div>
		</div>
	</section>

	@include('users.profile.include.tips')

@endsection
@section('script')
	<script>
		$(document).off('click', '.user-tabs a').on('click', '.user-tabs a', function(e){
			e.preventDefault();
			$(this).parent().addClass('bg-light').siblings().removeClass('bg-light');
			let url = $(this).data('action');
			callAjax({url:url}, function(response){
				$('#wrapper').html(response);
			}, function(err){
				swal(err.status+' Error.', 'Sorry for the error.','warning');
				$('.swal-footer').addClass('text-center');
			});
		});
		$(document).off('click', '.show-template').on('click', '.show-template', function(event) {
			event.preventDefault();
			callAjax({url:'/templates'}, function(response){
				swal({
					text: 'loading...'
				});
				$('.swal-modal').css('width', '700px');
				$('.swal-text').html(response);
				$('.swal-footer').remove();
			});
		});
	</script>
@endsection
