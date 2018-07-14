<div class="row user-tabs px-lg-3">
				<div class="col-sm-3 col-lg bg-light">
					<a href="#" class="hvr-links" 
					data-action="{{route('personal-info.show', ['id'=>authMember()->id])}}">
						Personal&nbsp;Info
					</a>
				</div>
				<div class="col-sm-3 col-lg">
					<a href="#" class="hvr-links"
					data-action="{{route('qualification.show', ['id'=>authMember()->id])}}">
						Qualification
					</a>
				</div>
				<div class="col-sm-3 col-lg">
					<a href="#" class="hvr-links"
					data-action="{{route('experience.show', ['id'=>authMember()->id])}}">
						Experiences
					</a>
				</div>
				<div class="col-sm-3 col-lg">
					<a href="#" class="hvr-links"
					data-action="{{route('skill.show', ['id'=>authMember()->id])}}">
						Skills
					</a>
				</div>
				<div class="col-sm-3 col-lg">
					<a href="#" class="hvr-links"
					data-action="{{route('contact.show', ['id'=>authMember()->id])}}">
						Contacts
					</a>
				</div>
				<div class="col-sm-3 col-lg">
					<a href="#" class="hvr-links"
					data-action="{{route('address.show', ['id'=>authMember()->id])}}">
						Address
					</a>
				</div>
				<div class="col-sm-3 col-lg">
					<a href="#" class="hvr-links"
					data-action="{{route('description.show', ['id'=>authMember()->id])}}">
						About&nbsp;You
					</a>
				</div>
				<div class="col-sm-3 col-lg">
					<a href="#" class="hvr-links"
					data-action="{{route('interest.show', ['id'=>authMember()->id])}}">
						Interests
					</a>
				</div>
			</div>