<div class="w-100 clearfix">
	<span class="btn btn-sm btn-dark my-2">
		About You
	</span>
	<span class="add-new btn btn-sm btn-primary float-right my-2"
	data-action="{{route('description.create')}}">
		<i class="fas fa-plus"></i>
	</span>
</div>
<table class="table table-dark mb-0">
	<thead>
		<tr>
			<th>Objective</th>
			<th width="10%">Action</th>
		</tr>
	</thead>
	<tbody>
		@if(!$desc->is_deleted)
		<tr>
			<td data-name="Type">{{$desc->description}}</td>
			<td data-name="Action">
				<span class="edit btn btn-sm btn-secondary mr-2"
				data-action="{{route('description.edit', ['id'=>$desc->id])}}">
					<i class="fas fa-edit"></i>
				</span>
				<span class="delete btn btn-sm alert-danger"
				data-action="{{route('description.destroy', ['id'=>$desc->id])}}">
					<i class="fas fa-times"></i>
				</span>
			</td>
		</tr>
		@endif
	</tbody>
</table>

<hr class="mb-4">