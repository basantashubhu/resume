<div class="w-100 clearfix">
	<span class="btn btn-sm btn-dark my-2">
		Experiences
	</span>
	<span class="add-new btn btn-sm btn-primary float-right my-2"
	data-action="{{route('experience.create')}}">
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
			<th>Address</th>
			<th>Description</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($exp as $experience)
		@if(!$experience->is_deleted)
		<tr>
			<td data-name="Title">{{$experience->title}}</td>
			<td data-name="Organization">{{$experience->org_name}}</td>
			<td data-name="Start Date">{{$experience->start_date}}</td>
			<td data-name="End Date">{{$experience->end_date}}</td>
			<td data-name="Address">{{$experience->address}}</td>
			<td data-name="Description">{{$experience->description}}</td>
			<td data-name="Action">
				<span class="edit btn btn-sm btn-secondary mr-2"
				data-action="{{route('experience.edit', ['id'=>$experience->id])}}">
					<i class="fas fa-edit"></i>
				</span>
				<span class="delete btn btn-sm alert-danger"
				data-action="{{route('experience.destroy', ['id'=>$experience->id])}}">
					<i class="fas fa-times"></i>
				</span>
			</td>
		</tr>
		@endif
		@endforeach
	</tbody>
</table>

<hr class="mb-4">