@extends('layouts.app')
@section('content')
<section id="welcome" class="bg-info">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-8">
				<h3 class="text-white mt-3">Welcome !!</h3>
				<p class="text-white text-justify">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt deserunt odio aspernatur tenetur modi perspiciatis, voluptatem nihil ipsum, hic sint est laborum corporis laboriosam dignissimos dolore minus ipsam blanditiis modi veritatis.
				</p>
			</div>
		</div>
	</div>
</section>
<section class="mt-2">
	<div class="container">
		<h3>Step By Step Guide</h3>
		<hr class="mt-0 mb-0 bg-primary">
		<div class="row mt-3">
			<div class="col-6">
				<div>
					<h4>Step 1</h4>
					<p>
						a. <a href="/register">Register</a> <br>
						b. <a href="/login">Log in</a> <br>
						c. Click the <a href="/profile">"Create Your Resume Now"</a> button
					</p>
				</div>
			</div>
			<div class="col-6">
				<div>
					<img src="{{ asset('screenshots/step1.jpg') }}" alt="step 1 image" class="img-fluid">
				</div>
			</div>
		</div>
		<hr class="mt-0 mb-0 bg-dark">
		<div class="row mt-3">
			<div class="col-6">
				<div>
					<h4>Step 2</h4>
					<p>
						a. Select a field <br>
						b. Fill the infomation
					</p>
				</div>
			</div>
			<div class="col-6">
				<div>
					<img src="{{ asset('screenshots/step2.jpg') }}" alt="step 2 image" class="img-fluid">
				</div>
			</div>
		</div>
		<hr class="mt-0 mb-0 bg-dark">
		<div class="row mt-3">
			<div class="col-6">
				<div>
					<h4>Step 3</h4>
					<p>
						a. Fill the required fields <br>
						b. Required fields turn red when setted empty
					</p>
				</div>
			</div>
			<div class="col-6">
				<div>
					<img src="{{ asset('screenshots/step3.jpg') }}" alt="step 3 image" class="img-fluid">
				</div>
			</div>
		</div>
		<hr class="mb-0 mt-2 bg-dark">
		<div class="row mt-3">
			<div class="col-6">
				<div>
					<h4>Step 4</h4>
					<p>
						a. Click "Export to PDF" button
					</p>
				</div>
			</div>
			<div class="col-6">
				<div>
					<img src="{{ asset('screenshots/step4.jpg') }}" alt="step 4 image" class="img-fluid">
				</div>
			</div>
		</div>
		<hr class="mt-0 mb-0 bg-dark">
		<div class="row mt-3">
			<div class="col-6">
				<div>
					<h4>Step 5</h4>
					<p>
						a. Choose one from the available template <br>
						b. There you go.
					</p>
				</div>
			</div>
			<div class="col-6">
				<div>
					<img src="{{ asset('screenshots/step5.jpg') }}" alt="step 5 image" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</section>
@endsection