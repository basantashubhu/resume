@include('users.templates.css')
<style>
	.personal-info p{margin-bottom: 0.2rem;}
	.personal-info p span{width: 80px;display: inline-block;}
	.underline{
		display: block;
		border-bottom: 4px solid #999;
	}
</style>
<div style="width: 1000px; margin: auto;">
	<div class="row mb-3">
		<div class="col-12 personal-info">
			<p class="font-weight-bold h1 p-3" style="padding-left: 0 !important;">{{fullname()}}</p>
			<hr class="w-100 mt-0" style="border: 2px solid #999;">
			<div class="row mb-3">
				<div class="col-6">
					<p><span>Profession</span>: {{ authMember()->profession }}</p>
					<p><span>Nationality</span>: {{authMember()->nationality}}</p>
					<p>
						@if(authMember()->address)
							<span>Address</span>:
							@if(!authMember()->address->is_deleted)
								{{ authMember()->address->city.", ".authMember()->address->country }}
							@endif
						@endif
					</p>
				</div>
				<div class="col-6 text-right">
					<p><span>Email</span>: {{authMember()->email}}</p>
					<p>
						@if(authMember()->contact)
							@if(!authMember()->contact->is_deleted)
								<span>{{ ucfirst(authMember()->contact->type) }}</span>:
								{{ authMember()->contact->contact }}
							@endif
						@endif
					</p>
					<p><span>Sex</span>: {{gender(authMember()->gender)}}</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row mb-4">
		@if(authMember()->experiences->where('is_deleted', 0)->count())
		<h3 class="col-3"><span class="underline">Work Experience</span></h3>
		<div class="col-9 py-0 row mt-1">
			@foreach(authMember()->experiences as $exp)
			<div class="col-8 mb-2">
				<span class="h4">{{ $exp->org_name }}</span> <br>
				{{ $exp->title }} <br>
				{{ $exp->description }}
			</div>
			<div class="col-4 text-right mb-2">
				{{ date('d M Y',strtotime($exp->start_date)) }}
				&nbsp;&nbsp; {{__(' To ')}} &nbsp;&nbsp;
				{{ date('d M Y',strtotime($exp->end_date)) }}
			</div>
			@endforeach
		</div>
		@endif
	</div>
	<div class="row mb-4">
		@if(authMember()->qualifications->where('is_deleted', 0)->count())
		<h3 class="col-3"><span class="underline">Qualifications</span></h3>
		<div class="col-9 py-0 row mt-1">
			@foreach(authMember()->qualifications as $qual)
			<div class="col-8 mb-2">
				<span class="h4">{{ $qual->org_name }}</span> <br>
				{{ $qual->title }} <br>
				{{ $qual->description }}
			</div>
			<div class="col-4 text-right mb-2">
				{{ date('d M Y',strtotime($qual->start_date)) }}
				&nbsp;&nbsp; {{__(' To ')}} &nbsp;&nbsp;
				{{ date('d M Y',strtotime($qual->end_date)) }}
			</div>
			@endforeach
		</div>
		@endif
	</div>
	<div class="row mb-4">
		@if(authMember()->skills->where('is_deleted', 0)->count())
		<h3 class="col-3"><span class="underline">Skills</span></h3>
		<div class="col-6 mb-2 text-capitalize mt-1">
			@foreach(authMember()->skills as $skill)
			{{ ($loop->first ?'':' ,').$skill->title }}
			@endforeach
		</div>
		@endif
	</div>
	<div class="row mb-4">
		@if(authMember()->interests->where('is_deleted', 0)->count())
		<h3 class="col-3"><span class="underline">Interests</span></h3>
		<div class="col-8 mb-2 text-capitalize mt-1">
			@foreach(authMember()->interests as $int)
			{{ ($loop->first ?'':', ').$int->title }}
			@endforeach
		</div>
		@endif
	</div>
	<div class="row mb-4">
		@if(authMember()->description)
		<h3 class="col-3"><span class="underline">Objectives</span></h3>
		<div class="col-8 mb-2 mt-1">
			@if(!authMember()->description->is_deleted)
			{{ authMember()->description->description }}
			@endif
		</div>
		@endif
	</div>
</div>