<div class="w-100 clearfix">
	<span class="btn btn-sm btn-dark my-2">
		Addresses
	</span>
	<span class="add-new btn btn-sm btn-primary float-right my-2" 
	data-action="{{route('address.create')}}">
		<i class="fas fa-plus"></i>
	</span>
</div>
<table class="table table-dark mb-0">
	<thead>
		<tr>
			<th>Type</th>
			<th>City</th>
			<th>Country</th>
			<th>Active</th>
			<th width="10%">Action</th>
		</tr>
	</thead>
	<tbody>
		@if(!$add->is_deleted)
		<tr>
			<td data-name="Type">{{title_case($add->type)}}</td>
			<td data-name="City">{{$add->city}}</td>
			<td data-name="Country">{{$add->country}}</td>
			<td data-name="Active">{{$add->is_active?'Yes':'No'}}</td>
			<td data-name="Action">
				<span class="edit btn btn-sm btn-secondary mr-2"
				data-action="{{route('address.edit', ['id'=>$add->id])}}">
					<i class="fas fa-edit"></i>
				</span>
				<span class="delete btn btn-sm alert-danger"
				data-action="{{route('address.destroy', ['id'=>$add->id])}}">
					<i class="fas fa-times"></i>
				</span>
			</td>
		</tr>
		@endif
	</tbody>
</table>

<hr class="mb-4">