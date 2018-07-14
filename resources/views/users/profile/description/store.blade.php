<style>
	form#user-data-form label{
		margin-top: 10px;
	}
</style>
<form action="{{route('description.store')}}" method="POST" id="user-data-form">

	<div class="form-group row">
		<div class="col-12 text-center">
			<label for="description">Objective</label>
		</div>
		<div class="col-12">
			<textarea class="form-control" name="description" id="description" rows="10"></textarea>
		</div>
	</div>

	<input type="hidden" name="member_id" value="{{authMember()->id}}">

</form>
