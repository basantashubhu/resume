<div class="w-100 clearfix">
	<span class="btn btn-sm btn-dark my-2">
		Personal Informations
	</span>
</div>
<table class="table mb-0 table-dark">
	<thead>
		<tr>
			<th>Title</th>
			<th>First Name</th>
			<th>Mid Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Sex</th>
			<th>Profession</th>
			<th>Nationality</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td data-name="Title">{{$user->title}}</td>
			<td data-name="First Name">{{$user->firstname}}</td>
			<td data-name="Mid Name">{{$user->midname}}</td>
			<td data-name="Last Name">{{$user->lastname}}</td>
			<td data-name="Email">{{$user->email}}</td>
			<td data-name="Sex">{{gender($user->gender)}}</td>
			<td data-name="Profession">{{$user->profession}}</td>
			<td data-name="Nationality">{{$user->nationality}}</td>
			<td data-name="Action">
				<span class="edit btn btn-sm btn-secondary mr-2"
				data-action="{{route('personal-info.edit', ['id'=>$user->id])}}">
					<i class="fas fa-edit"></i>
				</span>
			</td>
		</tr>
	</tbody>
</table>

<hr class="mb-4">