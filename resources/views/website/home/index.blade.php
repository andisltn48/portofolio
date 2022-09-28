<x-guest-layout>
    <section class="site-hero" style="background-image: url({{$heroContent->image}});" id="section-home">
		<div class="container">
			<div class="row intro-text align-items-center justify-content-center">
				<div class="col-md-10 text-center pt-5">

					<h1 class="site-heading site-animate">Hello, I'm <strong class="d-block">{{$heroContent->name}}</strong></h1>
					<strong class="d-block text-white text-uppercase letter-spacing">and this is My Resume</strong>

				</div>
			</div>
		</div>
	</section> <!-- section -->

	<section class="site-section" id="section-portfolio">
		<div class="container">
			<div class="row">
				<div class="section-heading text-center col-md-12">
					<h2>My <strong>Projects</strong></h2>
				</div>
			</div>
			<div class="filters">
				
			</div>

			<div class="filters-content">
				<div class="row grid">
					@foreach ($projects as $project)
						<div class="single-portfolio col-sm-4 all mockup">
							<div class="relative">
								<div class="thumb">
									<div class="overlay overlay-bg"></div>
									<img class="image img-fluid" src="{{$project->image}}" alt="">
								</div>                            
							</div>
							<div class="p-inner">
								<h4>{{$project->title}}</h4>
								<div class="cat">{{$project->category_job}}<span class="badge badge-info ml-3">{{$project->job_type}}</span></div>
							</div>                                         
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
	<!-- .section -->

	
	<section class="site-section " id="section-resume">
		<div class="container">
			<div class="row">
				<div class="col-md-12 mb-5">
					<div class="section-heading text-center">
						<h2>My <strong>Resume</strong></h2>
					</div>
				</div>
				<div class="col-md-6">
					<h2 class="mb-5">Education</h2>
					<div class="resume-item mb-4">
						<span class="date"><span class="icon-calendar"></span> March 2013 - Present</span>
						<h3>Masteral in Information Technology</h3>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
						<span class="school">New York University</span>
					</div>

					<div class="resume-item mb-4">
						<span class="date"><span class="icon-calendar"></span> March 2013 - Present Deacember.</span>
						<h3>Masteral in Information Technology</h3>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
						<span class="school">New York University</span>
					</div>

					<div class="resume-item mb-4">
						<span class="date"><span class="icon-calendar"></span> March 2013 - Present</span>
						<h3>Masteral in Information Technology</h3>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
						<span class="school">New York University</span>
					</div>

					<div class="resume-item mb-4">
						<span class="date"><span class="icon-calendar"></span> March 2013 - Present Deacember.</span>
						<h3>Masteral in Information Technology</h3>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
						<span class="school">New York University</span>
					</div>

				</div>
				<div class="col-md-6">


					<h2 class="mb-5">Experience</h2>

					<div class="resume-item mb-4">
						<span class="date"><span class="icon-calendar"></span> March 2013 - Present</span>
						<h3>Lead Product Designer</h3>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
						<span class="school">Github</span>
					</div>

					<div class="resume-item mb-4">
						<span class="date"><span class="icon-calendar"></span> March 2013 - Present</span>
						<h3>Lead Product Designer</h3>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
						<span class="school">Facebook</span>
					</div>

					<div class="resume-item mb-4">
						<span class="date"><span class="icon-calendar"></span> March 2013 - Present</span>
						<h3>Lead Product Designer</h3>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
						<span class="school">Twitter</span>
					</div>

					<div class="resume-item mb-4">
						<span class="date"><span class="icon-calendar"></span> March 2013 - Present</span>
						<h3>Lead Product Designer</h3>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
						<span class="school">Shopify</span>
					</div>


				</div>
			</div>
		</div>
	</section> <!-- .section -->

	<section class="site-section" id="section-about">
		<div class="container">
			<div class="row mb-5 align-items-center">
				<div class="col-lg-7 pr-lg-5 mb-5 mb-lg-0">
					<img src="/rezume-master/images/image_1.jpg" alt="Image placeholder" class="img-fluid">
				</div>
				<div class="col-lg-5 pl-lg-5">
					<div class="section-heading">
						<h2>About <strong>Me</strong></h2>
					</div>
					<p class="lead">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
					<p class="mb-5  ">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

					<p>
						<a href="#section-contact" class="btn btn-primary px-4 py-2 btn-sm smoothscroll">Hire Me</a>
						<a href="#" class="btn btn-secondary px-4 py-2 btn-sm">Download CV</a>
					</p>
				</div>
			</div>


		</div>
	</section>

	<section class="site-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-12">
					<div class="section-heading text-center">
						<h2>Client <strong>Testimonial</strong></h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">

					<div class="block-47 d-flex mb-5">
						<div class="block-47-image">
							<img src="/rezume-master/images/person_1.jpg" alt="Image placeholder" class="img-fluid">
						</div>
						<blockquote class="block-47-quote">
							<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
							<cite class="block-47-quote-author">&mdash; Ethan McCown, CEO <a href="#">XYZ Inc.</a></cite>
						</blockquote>
					</div>

				</div>
				<div class="col-md-6">

					<div class="block-47 d-flex mb-5">
						<div class="block-47-image">
							<img src="/rezume-master/images/person_2.jpg" alt="Image placeholder" class="img-fluid">
						</div>
						<blockquote class="block-47-quote">
							<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
							<cite class="block-47-quote-author">&mdash; Craig Gowen, CEO <a href="#">XYZ Inc.</a></cite>
						</blockquote>
					</div>

				</div>

				<div class="col-md-6">

					<div class="block-47 d-flex mb-5">
						<div class="block-47-image">
							<img src="/rezume-master/images/person_3.jpg" alt="Image placeholder" class="img-fluid">
						</div>
						<blockquote class="block-47-quote">
							<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
							<cite class="block-47-quote-author">&mdash; Ethan McCown, CEO <a href="#">XYZ Inc.</a></cite>
						</blockquote>
					</div>

				</div>
				<div class="col-md-6">

					<div class="block-47 d-flex mb-5">
						<div class="block-47-image">
							<img src="/rezume-master/images/person_4.jpg" alt="Image placeholder" class="img-fluid">
						</div>
						<blockquote class="block-47-quote">
							<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
							<cite class="block-47-quote-author">&mdash; Craig Gowen, CEO <a href="#">XYZ Inc.</a></cite>
						</blockquote>
					</div>

				</div>

			</div>
		</div>
	</section>


	<section class="site-section pb-0"  id="section-services">
		<div class="container">

			<div class="row mb-4">
				<div class="col-md-12">
					<div class="section-heading text-center">
						<h2>My <strong>Services</strong></h2>
					</div>
				</div>
			</div>
			<div class="row">

				<div class="col-md-6 col-lg-4 text-center mb-5">
					<div class="site-service-item site-animate" data-animate-effect="fadeIn">
						<span class="icon">
							<span class="icon-browser2"></span>
						</span>
						<h3 class="mb-4">Web Design</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						<p><a href="#" class="site-link">Learn More <i class="icon-chevron-right"></i></a></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 text-center mb-5">
					<div class="site-service-item site-animate" data-animate-effect="fadeIn">
						<span class="icon">
							<span class="icon-presentation"></span>
						</span>
						<h3 class="mb-4">Search Engine Optimization</h3>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
						<p><a href="#" class="site-link">Learn More <i class="icon-chevron-right"></i></a></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 text-center mb-5">
					<div class="site-service-item site-animate" data-animate-effect="fadeIn">
						<span class="icon">
							<span class="icon-video2"></span>
						</span>
						<h3 class="mb-4">Video Editing</h3>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
						<p><a href="#" class="site-link">Learn More <i class="icon-chevron-right"></i></a></p>
					</div>
				</div>

				

			</div>
		</div>
	</section>


	

	<section class="site-section" id="section-blog">
		<div class="container">
			<div class="row">
				<div class="col-md-12 mb-5">
					<div class="section-heading text-center">
						<h2>Blog on <strong>Medium</strong></h2>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6 col-lg-4 mb-4">
					<div class="blog-entry">
						<a href="#"><img src="/rezume-master/images/post_1.jpg" alt="Image placeholder" class="img-fluid"></a>
						<div class="blog-entry-text">
							<h3><a href="#">Creative Product Designer From Facebook</a></h3>
							<p class="mb-4">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>

							<div class="meta">
								<a href="#"><span class="icon-calendar"></span> Aug 7, 2018</a>
								<a href="#"><span class="icon-bubble"></span> 5 Comments</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-lg-4 mb-4">
					<div class="blog-entry">
						<a href="#"><img src="/rezume-master/images/post_2.jpg" alt="Image placeholder" class="img-fluid"></a>
						<div class="blog-entry-text">
							<h3><a href="#">Creative Product Designer From Facebook</a></h3>
							<p class="mb-4">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>

							<div class="meta">
								<a href="#"><span class="icon-calendar"></span> Aug 7, 2018</a>
								<a href="#"><span class="icon-bubble"></span> 5 Comments</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-lg-4 mb-4">
					<div class="blog-entry">
						<a href="#"><img src="/rezume-master/images/post_3.jpg" alt="Image placeholder" class="img-fluid"></a>
						<div class="blog-entry-text">
							<h3><a href="#">Creative Product Designer From Facebook</a></h3>
							<p class="mb-4">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>

							<div class="meta">
								<a href="#"><span class="icon-calendar"></span> Aug 7, 2018</a>
								<a href="#"><span class="icon-bubble"></span> 5 Comments</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
</x-guest-layout>