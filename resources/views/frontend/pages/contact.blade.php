@extends('frontend.layouts.index')
@section('content')
<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="fh5co-contact-info">
						<h3>Contact Information</h3>
						<ul>
							<li class="address">198 West 21th Street, <br> Suite 721 New York NY 10016</li>
							<li class="phone"><a href="tel://1234567920">+ 1235 2355 98</a></li>
							<li class="email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li class="url"><a href="http://gettemplates.co">gettemplates.co</a></li>
						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box">
					<h3>Get In Touch</h3>
					<form action="#">
						<div class="row form-group">
							<div class="col-md-6">
								<label for="fname">First Name</label>
								<input type="text" id="fname" class="form-control" placeholder="Your firstname">
							</div>
							<div class="col-md-6">
								<label for="lname">Last Name</label>
								<input type="text" id="lname" class="form-control" placeholder="Your lastname">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email" class="form-control" placeholder="Your email address">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="subject">Subject</label>
								<input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="message">Message</label>
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>
	
	

	<div id="fh5co-testimonial" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box row-pb-md">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>You deserved happiness</span>
					<h2>Happy Clients</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 animate-box">
					<div class="testimonial">
						<blockquote>
							<p>&ldquo;Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
							<p class="author"> <img src="images/person1.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"> <cite>&mdash; Mike Adam</cite></p>
						</blockquote>
					</div>

					<div class="testimonial">
						<blockquote>
							<p>&ldquo;Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius. Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
							<p class="author"><img src="images/person2.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"> <cite>&mdash; Eric Miller</cite></p>
						</blockquote>
					</div>
				</div>

				<div class="col-md-6 animate-box">
					<div class="testimonial">
						<blockquote>
							<p>&ldquo;Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius. Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
							<p class="author"><img src="images/person3.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"> <cite>&mdash; Eric Miller</cite></p>
						</blockquote>
					</div>

					<div class="testimonial">
						<blockquote>
							<p>&ldquo;Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
							<p class="author"><img src="images/person1.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"> <cite>&mdash; Mike Adam</cite></p>
						</blockquote>
					</div>

				</div>

				

			</div>
		</div>
	</div>


	
	<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>Let's work together</span>
					<h2>Start Your Project</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					<p><button type="submit" class="btn btn-default">Get In Touch</button></p>
				</div>
			</div>
		</div>
	</div>
@endsection