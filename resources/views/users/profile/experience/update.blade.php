<style>
	form#user-data-form label{
		margin-top: 10px;
	}
</style>
<form action="{{route('experience.update', ['id'=>$experience->id])}}" method="PATCH" id="user-data-form">

	<div class="form-group row">
		<div class="col-12 col-sm-3">
			<label for="title">Title</label>
		</div>
		<div class="col-12 col-sm-9">
			<input class="form-control" type="text" name="title" id="title"
			value="{{$experience->title}}">
		</div>
	</div>

	<div class="form-group row">
		<div class="col-12 col-sm-3">
			<label for="org_name">Organization</label>
		</div>
		<div class="col-12 col-sm-9">
			<input class="form-control" type="text" name="org_name" id="org_name"
			value="{{$experience->org_name}}">
		</div>
	</div>

	<div class="form-group row">
		<div class="col-12 col-sm-3">
			<label for="start_date">Start&nbsp;Date</label>
		</div>
		<div class="col-12 col-sm-9">
			<input class="form-control" type="text" name="start_date" id="start_date"
			value="{{$experience->start_date}}">
		</div>
	</div>

	<div class="form-group row">
		<div class="col-12 col-sm-3">
			<label for="end_date">End&nbsp;Date</label>
		</div>
		<div class="col-12 col-sm-9">
			<input class="form-control" type="text" name="end_date" id="end_date"
			value="{{$experience->end_date}}">
		</div>
	</div>

	<div class="form-group row">
		<div class="col-12 col-sm-3">
			<label for="address">Address</label>
		</div>
		<div class="col-12 col-sm-9">
			<input class="form-control" type="text" name="address" id="address"
			value="{{$experience->address}}">
		</div>
	</div>

	<div class="form-group row">
		<div class="col-12 col-sm-3">
			<label for="description">Description</label>
		</div>
		<div class="col-12 col-sm-9">
			<textarea class="form-control" name="description" id="description" rows="5">{{$experience->description}}</textarea>
		</div>
	</div>

	<input type="hidden" name="member_id" value="{{authMember()->id}}">

</form>
