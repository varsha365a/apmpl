@extends('Frontend.main_master')
@section('content')
@section('title')
Amrita Pest Management
@endsection

<style>
.checked {
color: orange;
}
</style>

<!-- Start Hero Section -->
	<div class="hero">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-5 col-12">
					<div class="intro-excerpt">
						<h1>PEST CONTROL AT ITS BEST</h1>
						<p class="mb-4"></p>
						<p><a href="" class="btn btn-secondary me-2">Book Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>
					</div>
				</div>
				<div class="col-lg-5 col-12">
					<div class="hero-img-wrap">
						<img src="{{asset('assets/frontend/images/pic5.png')}}" width="350px" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- End Hero Section -->

<!-- Start Product Section -->
<div class="product-section">
	<div class="container">
		<div class="row">
		
		<!-- Start Column 1 -->
		<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
			<h2 class="mb-4 section-title">GET RID OF UNWANTED PEST !</h2>
			<p class="mb-4">With 30 Years of experience in Pest Control, we will ensure that your home is safe and pest-free.</p>
			<p><a href="shop.html" class="btn">Explore</a></p>
		</div>
		<!-- End Column 1 -->

		<!-- Start Column 2 -->
		<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
			<a class="product-item" href="cart.html">
			<img src="{{asset('assets/frontend/images/fogging.jpeg')}}" class="img-fluid product-thumbnail img-size">
			<h3 class="product-title">FOGGING</h3>
			<span class="icon-cross">
				<img src="{{asset('assets/frontend/images/cross.svg')}}" class="img-fluid">
			</span>
			</a>
		</div>
		<!-- End Column 2 -->

		<!-- Start Column 3 -->
		<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
			<a class="product-item" href="cart.html">
			<img src="{{asset('assets/frontend/images/pre-cons.jpeg')}}" class="img-fluid product-thumbnail img-size">
			<h3 class="product-title">PRE-CONSTRUCTION TERMITE CONTROL</h3>
			<span class="icon-cross">
				<img src="{{asset('assets/frontend/images/cross.svg')}}" class="img-fluid">
			</span>
			</a>
		</div>
		<!-- End Column 3 -->

		<!-- Start Column 4 -->
		<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
			<a class="product-item" href="cart.html">
			<img src="{{asset('assets/frontend/images/post-cons.jpeg')}}" class="img-fluid product-thumbnail img-size">
			<h3 class="product-title">POST-CONSTRUCTION TERMITE CONTROL</h3>
			<span class="icon-cross">
				<img src="{{asset('assets/frontend/images/cross.svg')}}" class="img-fluid">
			</span>
			</a>
		</div>
		<!-- End Column 4 -->

		</div>
	</div>
</div>

<!-- End Product Section -->

<!-- Start Why Choose Us Section -->
<div class="why-choose-section">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-6">
				<h2 class="section-title">Why Choose Us</h2>
				<p>Amrita Pest Control provides professional treatment
						of various pests by well-trained and experienced workers. I
						t gives you long-term relief from pests.</p>

				<div class="row my-5">
					<div class="col-6 col-md-6 mt-5 mb-5">
						<div class="feature">
							<!-- <div class="icon">
								<img src="{{asset('assets/frontend/images/truck.svg')}}" alt="Image" class="img-fluid">
							</div> -->
							<h2>Expertise &amp; Experience</h2>
							<p>With over 30 years of experience in the pest control industry, 
								our team of professionals is equipped with the knowledge and skills 
								to handle any pest problem efficiently. We stay updated with the latest techniques and solutions to ensure your home or business is pest-free.</p>
						</div>
					</div>

					<div class="col-6 col-md-6 mt-5">
						<div class="feature">
							<!-- <div class="icon">
								<img src="{{asset('assets/frontend/images/bag.svg')}}" alt="Image" class="imf-fluid">
							</div> -->
							<h2>Eco-Friendly Solutions</h2>
							<p>We prioritize the safety of our clients and the environment by using eco-friendly and non-toxic pest control methods. Our solutions 
								are designed to effectively eliminate pests without harming your family, pets, or the planet..</p>
						</div>
					</div>

					<div class="col-6 col-md-6">
						<div class="feature">
							<!-- <div class="icon">
								<i class="ti ti-palette"></i>									
							</div> -->
							<h2>Guaranteed Results</h2>
							<p>We stand by the effectiveness of our services. Our pest control treatments come 
								with ultimate satisfaction, ensuring that your pest issues are resolved completely.
								So far we have not received any complaints from our clients due to the adverse effect of spraying.</p>
						</div>
					</div>

					<div class="col-6 col-md-6">
						<div class="feature">
							<!-- <div class="icon">
								<img src="{{asset('assets/frontend/images/return.svg')}}" alt="Image" class="imf-fluid">
							</div> -->
							<h2>Customized Treatment Plans</h2>
							<p>We understand that every pest problem is unique. Our experts conduct thorough inspections and provide customized treatment plans tailored to your specific 
								needs. This ensures the most effective and long-lasting pest control solutions.</p>
						</div>
					</div>

				</div>
			</div>

			<div class="col-lg-5">
				<div class="img-wrap">
					<img src="{{asset('assets/frontend/images/pic9.jpg')}}" alt="Image" class="img-fluid">
				</div>
			</div>

		</div>
	</div>
</div>
<!-- End Why Choose Us Section -->

<!-- Start We Help Section -->
<div class="we-help-section">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-7 mb-5 mb-lg-0">
				<div class="imgs-grid">
					<div class="grid grid-1"><img src="{{asset('assets/frontend/images/pic8.jpg')}}" alt="Image"></div>
					<div class="grid grid-2"><img src="{{asset('assets/frontend/images/pic7.jpg')}}" alt="Image"></div>
					<div class="grid grid-3"><img src="{{asset('assets/frontend/images/pic11.jpg')}}" alt="Image"></div>
				</div>
			</div>
			<div class="col-lg-5 ps-lg-5">
				<h2 class="section-title mb-4">We Offer Services</h2>
				<p>Amrita Pest Control provides professional treatment 
					of various pests by well-trained and experienced workers. 
					It gives you long-term relief from pests. </p>

				<ul class="list-unstyled custom-list my-4">
					<li>Termite control</li>
					<li>Mosquito control</li>
					<li>Cockroach control</li>
					<li>Rodent control</li>
					<li>Ant control</li>
					<li>Bed Bugs control</li>
					<li>Fly control</li>
					<li>Spider control</li>
					<li>Honey Bee control</li>
					<li>Snake control</li>
					<li>Rodent control</li>
					<li>Weed control</li>
					
				</ul>
				<p><a herf="#" class="btn">Explore more</a></p>
			</div>
		</div>
	</div>
</div>
<!-- End We Help Section -->

<!-- Start Testimonial Slider -->
<div class="testimonial-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 mx-auto text-center">
				<h2 class="section-title">Testimonials</h2>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="testimonial-slider-wrap text-center">

					<div id="testimonial-nav">
						<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
						<span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
					</div>

					<div class="testimonial-slider">
						
						<div class="item">
							<div class="row justify-content-center">
								<div class="col-lg-8 mx-auto">

									<div class="testimonial-block text-center">
										<blockquote class="mb-5">
											<p>
												&ldquo;They were prompt, courteous and professional. The products they used were pet
													safe yet effectively ended the termite infestation. The prices were reasonable and 
													they stuck to their original estimate.&rdquo;
											</p>
										</blockquote>

										<div class="author-info">
											<h3 class="font-weight-bold">SUNDARAM</h3>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star "></span>												</div>
									</div>

								</div>
							</div>
						</div> 
						<!-- END item -->

						<div class="item">
							<div class="row justify-content-center">
								<div class="col-lg-8 mx-auto">

									<div class="testimonial-block text-center">
										<blockquote class="mb-5">
											<p>
												&ldquo;The work done by Amrita Pest Control is excellent. 
												Their rates were reasonable and the work was done 
												neatly and the workers were always on time.&rdquo;
											</p>
										</blockquote>

										<div class="author-info">
											<h3 class="font-weight-bold">Harish</h3>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star "></span>												</div>
									</div>

								</div>
							</div>
						</div> 
						<!-- END item -->

						<div class="item">
							<div class="row justify-content-center">
								<div class="col-lg-8 mx-auto">

									<div class="testimonial-block text-center">
										<blockquote class="mb-5">
											<p>
												&ldquo;The mosquito treatment lasted well over a month. The persons 
												arrived on time. And sprayed a larger area than what they needed 
												to do. The treatment worked very well. Thanks to APMPL.&rdquo;
											</p>
										</blockquote>

										<div class="author-info">
											<h3 class="font-weight-bold">Ramakrishnan</h3>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star "></span>
										</div>
									</div>

								</div>
							</div>
						</div> 
						<!-- END item -->

					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Testimonial Slider -->	

@endsection


