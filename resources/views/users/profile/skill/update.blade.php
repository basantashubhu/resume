<style>
	form#user-data-form label{
		margin-top: 10px;
	}
</style>
<form action="{{route('skill.update', ['id'=>$skill->id])}}" method="PATCH" id="user-data-form">

	<div class="form-group row">
		<div class="col-12 col-sm-3">
			<label for="title">Title</label>
		</div>
		<div class="col-12 col-sm-9">
			<input class="form-control" type="text" name="title" id="title"
			value="{{$skill->title}}">
		</div>
	</div>

	<div class="form-group row">
		<div class="col-12 col-sm-3">
			<label for="description">Description</label>
		</div>
		<div class="col-12 col-sm-9">
			<textarea class="form-control" name="description" id="description" rows="5">{{$skill->description}}</textarea>
		</div>
	</div>

	<input type="hidden" name="member_id" value="{{authMember()->id}}">

</form>
