<div class="w-100 clearfix">
	<span class="btn btn-sm btn-dark my-2">
		Qualifications
	</span>
	<span class="add-new btn btn-sm btn-primary float-right my-2"
	data-action="{{route('qualification.create')}}">
		<i class="fas fa-plus"></i>
	</span>
</div>
<table class="table table-dark mb-0">
	<thead>
		<tr>
			<th>Title</th>
			<th>Organization</th>
			<th>Start Date</th>
			<th>End Date</th>
			<th>Description</th>
			<th>Address</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($qual as $qualification)
		@if(!$qualification->is_deleted)
		<tr>
			<td data-name="Title">{{$qualification->title}}</td>
			<td data-name="Organization">{{$qualification->org_name}}</td>
			<td data-name="Start Date">{{$qualification->start_date}}</td>
			<td data-name="End Date">{{$qualification->end_date}}</td>
			<td data-name="Description">{{$qualification->description}}</td>
			<td data-name="Address">{{$qualification->address}}</td>
			<td data-name="Action">
				<span class="edit btn btn-sm btn-secondary mr-2"
				data-action="{{route('qualification.edit', ['id'=>$qualification->id])}}">
					<i class="fas fa-edit"></i>
				</span>
				<span class="delete btn btn-sm alert-danger"
				data-action="{{route('qualification.destroy', ['id'=>$qualification->id])}}">
					<i class="fas fa-times"></i>
				</span>
			</td>
		</tr>
		@endif
		@endforeach
	</tbody>
</table>

<hr class="mb-4">