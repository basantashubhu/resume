<style>
	form#user-data-form label{
		margin-top: 10px;
	}
</style>
<form action="{{route('personal-info.update', ['id'=>$personal_info->id])}}" method="PATCH" id="user-data-form">

	<div class="form-group row">
		<div class="col-12 col-sm-3">
			<label for="title">Title</label>
		</div>
		<div class="col-12 col-sm-9">
			<input class="form-control" type="text" name="title" id="title"
			value="{{$personal_info->title}}">
		</div>
	</div>

	<div class="form-group row">
		<div class="col-12 col-sm-3">
			<label for="firstname">First&nbsp;Name</label>
		</div>
		<div class="col-12 col-sm-9">
			<input class="form-control" type="text" name="firstname" id="firstname"
			value="{{$personal_info->firstname}}">
		</div>
	</div>

	<div class="form-group row">
		<div class="col-12 col-sm-3">
			<label for="midname">Middle&nbsp;Name</label>
		</div>
		<div class="col-12 col-sm-9">
			<input class="form-control" type="text" name="midname" id="midname"
			value="{{$personal_info->midname}}">
		</div>
	</div>

	<div class="form-group row">
		<div class="col-12 col-sm-3">
			<label for="lastname">Last&nbsp;Name</label>
		</div>
		<div class="col-12 col-sm-9">
			<input class="form-control" type="text" name="lastname" id="lastname"
			value="{{$personal_info->lastname}}">
		</div>
	</div>

	<div class="form-group row">
		<div class="col-12 col-sm-3">
			<label for="email">Email</label>
		</div>
		<div class="col-12 col-sm-9">
			<input class="form-control" type="text" name="email" id="email"
			value="{{$personal_info->email}}">
		</div>
	</div>

	<div class="form-group row">
		<div class="col-12 col-sm-3">
			<label for="gender">Gender</label>
		</div>
		<div class="col-12 col-sm-9">
			<select class="form-control" name="gender" id="gender">
				<option value="{{$personal_info->gender}}">{{gender($personal_info->gender)}}</option>
				<option value="">---select---</option>
				<option value="M">Male</option>
				<option value="F">Female</option>
				<option value="O">n/a</option>
			</select>				
		</div>
	</div>

	<div class="form-group row">
		<div class="col-12 col-sm-3">
			<label for="profession">Profession</label>
		</div>
		<div class="col-12 col-sm-9">
			<input class="form-control" type="text" name="profession" id="profession"
			value="{{$personal_info->profession}}">
		</div>
	</div>

	<div class="form-group row">
		<div class="col-12 col-sm-3">
			<label for="nationality">Nationality</label>
		</div>
		<div class="col-12 col-sm-9">
			<input class="form-control" type="text" name="nationality" id="nationality"
			value="{{$personal_info->nationality}}">
		</div>
	</div>

</form>
