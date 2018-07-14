<div class="w-100 clearfix">
	<span class="btn btn-sm btn-dark my-2">
		Contacts
	</span>
	<span class="add-new btn btn-sm btn-primary float-right my-2"
	data-action="{{route('contact.create')}}">
		<i class="fas fa-plus"></i>
	</span>
</div>
<table class="table table-dark mb-0">
	<thead>
		<tr>
			<th>Type</th>
			<th>Contact</th>
			<th>Active</th>
			<th width="10%">Action</th>
		</tr>
	</thead>
	<tbody>
		@if(!$con->is_deleted)
		<tr>
			<td data-name="Type">{{title_case($con->type)}}</td>
			<td data-name="Contact">{{$con->contact}}</td>
			<td data-name="Active">{{$con->is_active?'Yes':'No'}}</td>
			<td data-name="Action">
				<span class="edit btn btn-sm btn-secondary mr-2"
				data-action="{{route('contact.edit', ['id'=>$con->id])}}">
					<i class="fas fa-edit"></i>
				</span>
				<span class="delete btn btn-sm alert-danger"
				data-action="{{route('contact.destroy', ['id'=>$con->id])}}">
					<i class="fas fa-times"></i>
				</span>
			</td>
		</tr>
		@endif
	</tbody>
</table>

<hr class="mb-4">