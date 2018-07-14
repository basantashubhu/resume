@include('users.templates.css')
<style>
	.personal-info p{margin-bottom: 0.2rem;}
	.personal-info p span{width: 80px;display: inline-block;}
	.underline{
		display: block;
		border-bottom: 4px solid #999;
	}
</style>
<div style="width: 1000px; margin: 0 auto;">
	<div class="row mb-3">
		<div class="col-12 personal-info">
			<p class="font-weight-bold h1 p-3" style="padding-left: 0 !important;">{{fullname()}}</p>
			<hr class="w-100 mt-0" style="border: 2px solid #999;">
			<div class="row mb-3">
				<div class="col-6">
					<p><span>Profession</span>: {{ authMember()->profession }}</p>
					<p><span>Nationality</span>: {{authMember()->nationality}}</p>
					<p>
						<span>Address</span>: {{ isset($auth['address']) ? $auth['address'] : "" }}
					</p>
				</div>
				<div class="col-6 text-right">
					<p><span>Email</span>: {{authMember()->email}}</p>
					<p>
						<span>Contact</span>: {{ isset($auth['contact']) ? $auth['contact'] : "" }}
					</p>
					<p><span>Sex</span>: {{gender(authMember()->gender)}}</p>
				</div>
			</div>
		</div>
	</div>
	@if(isset($auth['experiences']))
	<div class="mb-4">
		<div>
			<h3 class="text-center"><span class="underline">Work Experience</span></h3>
		</div>
			
		<div class="py-0 mt-1">
			@foreach($auth['experiences'] as $exp)
			<div class="text-center mb-2">
				<span class="h4">{{ $exp['org_name'] }}</span> <br>
				{{ $exp['title'] }} <br>
				{{ $exp['description'] }}
				<p>
					{{ date('d M Y',strtotime($exp['start_date'])) }}
					&nbsp;&nbsp; {{__(' To ')}} &nbsp;&nbsp;
					{{ date('d M Y',strtotime($exp['end_date'])) }}
				</p>
			</div>
			@endforeach
		</div>
	</div>
	@endif
	@if(isset($auth['qualifications']))
	<div class="mb-4">
		<div>
			<h3 class="text-center"><span class="underline">Qualifications</span></h3>
		</div>
			
		<div class="py-0 mt-1">
			@foreach($auth['qualifications'] as $qual)
			<div class="text-center mb-2">
				<span class="h4">{{ $qual['org_name'] }}</span> <br>
				{{ $qual['title'] }} <br>
				{{ $qual['description'] }}
				<p>
					{{ date('d M Y',strtotime($qual['start_date'])) }}
					&nbsp;&nbsp; {{__(' To ')}} &nbsp;&nbsp;
					{{ date('d M Y',strtotime($qual['end_date'])) }}
				</p>
			</div>
			@endforeach
		</div>
	</div>
	@endif
	@if(isset($auth['skills']))
	<div class="mb-4">
		<div>
			<h3 class="text-center"><span class="underline">Skills</span></h3>
		</div>
			
		<div class="text-center mb-2 text-capitalize mt-1">
			@foreach($auth['skills'] as $skill)
			{{ ($loop->first ?'':' ,').$skill['title'] }}
			@endforeach
		</div>
	</div>
	@endif
	@if(isset($auth['interests']))
	<div class="mb-4">
		<div>
			<h3 class="text-center"><span class="underline">Interests</span></h3>
		</div>
			
		<div class="text-center mb-2 text-capitalize mt-1">
			@foreach($auth['interests'] as $int)
			{{ ($loop->first ?'':' ,').$int['title'] }}
			@endforeach
		</div>
	</div>
	@endif
	@if(isset($auth['description']))
	<div class="mb-4">
		<div>
			<h3 class="text-center"><span class="underline">Objectives</span></h3>
		</div>
			
		<div class="text-justified mb-2 mt-1">
			{{ $auth['description'] }}
		</div>
	</div>
	@endif
</div>