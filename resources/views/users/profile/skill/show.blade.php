<div class="w-100 clearfix">
	<span class="btn btn-sm btn-dark my-2">
		Skills
	</span>
	<span class="add-new btn btn-sm btn-primary float-right my-2"
	data-action="{{route('skill.create')}}">
		<i class="fas fa-plus"></i>
	</span>
</div>
<table class="table table-dark mb-0">
	<thead>
		<tr>
			<th>Title</th>
			<th>Description</th>
			<th width="10%">Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($skills as $skill)
		@if(!$skill->is_deleted)
		<tr>
			<td data-name="Title">{{$skill->title}}</td>
			<td data-name="Description">{{$skill->description}}</td>
			<td data-name="Action">
				<span class="edit btn btn-sm btn-secondary mr-2"
				data-action="{{route('skill.edit', ['id'=>$skill->id])}}">
					<i class="fas fa-edit"></i>
				</span>
				<span class="delete btn btn-sm alert-danger"
				data-action="{{route('skill.destroy', ['id'=>$skill->id])}}">
					<i class="fas fa-times"></i>
				</span>
			</td>
		</tr>
		@endif
		@endforeach
	</tbody>
</table>

<hr class="mb-4">