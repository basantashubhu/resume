<style>
	form#user-data-form label{
		margin-top: 10px;
	}
</style>
<form action="{{route('contact.store')}}" method="POST" id="user-data-form">

	<div class="form-group row">
		<div class="col-12 col-sm-3">
			<label for="type">Type</label>
		</div>
		<div class="col-12 col-sm-9">
			<select class="form-control" name="type" id="type">
				<option value="">--select--</option>
				@foreach(contactType() as $type)
					<option value="{{$type}}">{{title_case($type)}}</option>
				@endforeach
			</select>
		</div>
	</div>

	<div class="form-group row">
		<div class="col-12 col-sm-3">
			<label for="contact">Contact</label>
		</div>
		<div class="col-12 col-sm-9">
			<input class="form-control" type="text" name="contact" id="contact">
		</div>
	</div>

	<div class="form-group row">
		<div class="col-12 col-sm-3">
			<label for="is_active">Active</label>
		</div>
		<div class="col-12 col-sm-9">
			<select class="form-control" name="is_active" id="is_active">
				<option value="">--select--</option>
				<option value="1">Yes</option>
				<option value="0">No</option>
			</select>
			<small class="alert">Make active your current or priority contact.</small>
		</div>
	</div>

	<input type="hidden" name="member_id" value="{{authMember()->id}}">

</form>
