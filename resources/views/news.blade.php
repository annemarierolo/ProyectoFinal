@extends('layouts.app')
@section('content')
	<!-- blog -->
		<div class="blog">
				<!-- container -->
				<div class="container">
					<div class="col-md-8 blog-top-left-grid">
						<div class="left-blog left-single">
							<div class="blog-left">
								<div class="single-left-left">
									<p>Posted By <a href="#">Admin</a> &nbsp;&nbsp; on June 2, 2016 &nbsp;&nbsp; <a href="#">Comments (10)</a></p>
									<img src="images/g9.jpg" alt="" />
								</div>
								<div class="blog-left-bottom">
									<P>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed blandit massa vel mauris sollicitudin 
										dignissim. Phasellus ultrices tellus eget ipsum ornare molestie scelerisque eros dignissim. Phasellus 
										fringilla hendrerit lectus nec vehicula. ultrices tellus eget ipsum ornare consectetur adipiscing elit.Sed blandit .
									</P>
								</div>
								<div class="blog-left-bottom left-bottom">
									<P>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed blandit massa vel mauris sollicitudin 
										dignissim. Phasellus ultrices tellus eget ipsum ornare molestie scelerisque eros dignissim. Phasellus 
										fringilla hendrerit lectus nec vehicula. ultrices tellus eget ipsum ornare consectetur adipiscing elit.Sed blandit .
									</P>
								</div>
								<div class="blog-left-bottom left-bottom">
									<P>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed blandit massa vel mauris sollicitudin 
										dignissim. Phasellus ultrices tellus eget ipsum ornare molestie scelerisque eros dignissim. Phasellus 
										fringilla hendrerit lectus nec vehicula. ultrices tellus eget ipsum ornare consectetur adipiscing elit.Sed blandit .
									</P>
								</div>
							</div>
							<div class="response">
								<h3>Responses</h3>
								<div class="media response-info">
									<div class="media-left response-text-left">
										<a href="#">
											<img class="media-object" src="images/t1.jpg" alt="">
										</a>
										<h5><a href="#">Admin</a></h5>
									</div>
									<div class="media-body response-text-right">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
											sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										<ul>
											<li>June 21, 2016</li>
											<li><a href="single.html">Reply</a></li>
										</ul>
										<div class="media response-info">
											<div class="media-left response-text-left">
												<a href="#">
													<img class="media-object" src="images/t2.jpg" alt="">
												</a>
												<h5><a href="#">Admin</a></h5>
											</div>
											<div class="media-body response-text-right">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
													sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												<ul>
													<li>June 21, 2016</li>
													<li><a href="single.html">Reply</a></li>
												</ul>		
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="media response-info">
									<div class="media-left response-text-left">
										<a href="#">
											<img class="media-object" src="images/t3.jpg" alt="">
										</a>
										<h5><a href="#">Admin</a></h5>
									</div>
									<div class="media-body response-text-right">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
											sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										<ul>
											<li>June 21, 2016</li>
											<li><a href="single.html">Reply</a></li>
										</ul>		
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							
							<div class="opinion">
								<h2>Leave Your Comment</h2>
								<form action="#" method="post">
									<input type="text" name="Name" placeholder="Name" required="">
									<input type="text" name="Email" placeholder="Email" required="">
									<textarea name="Message" placeholder="Message" required=""></textarea>
									<input type="submit" value="SEND">
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-4 blog-top-right-grid">
						<div class="categories">
							<h3>Categories</h3>
							<ul>
								<li><a href="#">Phasellus sem leo, interdum quis risus</a></li>
								<li><a href="#">Nullam egestas nisi id malesuada aliquet </a></li>
								<li><a href="#"> Donec condimentum purus urna venenatis</a></li>
								<li><a href="#">Ut congue, nisl id tincidunt lobor mollis</a></li>
								<li><a href="#">Cum sociis natoque penatibus et magnis</a></li>
								<li><a href="#">Suspendisse nec magna id ex pretium</a></li>
							</ul>
						</div>
						<div class="categories">
							<h3>Archive</h3>
							<ul class="marked-list offs1">
								<li><a href="#">May 2016 (7)</a></li>
								<li><a href="#">April 2016 (11)</a></li>
								<li><a href="#">March 2016 (12)</a></li>
								<li><a href="#">February 2016 (14)</a> </li>
								<li><a href="#">January 2016 (10)</a></li>    
								<li><a href="#">December 2016 (12)</a></li>
								<li><a href="#">November 2016 (8)</a></li>
								<li><a href="#">October 2016 (7)</a> </li>
								<li><a href="#">September 2016 (8)</a></li>
								<li><a href="#">August 2016 (6)</a></li>                          
							</ul>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!-- //container -->
		</div>
		<!-- //blog -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h4>Address</h4>
					</div>
					<div class="footer-grid-info">
						<p>Eiusmod Tempor inc
							<span>St Dolore Place,Kingsport 56777.</span>
						</p>
						<p class="phone">Phone : +1 123 456 789
							<span>Email : <a href="mailto:example@email.com">mail@example.com</a></span>
						</p>
					</div>
				</div>
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h4>Navigation</h4>
					</div>
					<div class="footer-grid-info">
						<ul>
							<li><a href="{{ url('/somos') }}">Quienes Somos</a></li>
							<li><a href="{{ url('/paquetes') }}">Paquetes</a></li>
							<li><a href="{{ url('/eventos') }}">Eventos</a></li>
							<li><a href="{{ url('/noticias') }}">Noticias</a></li>
							<li><a href="{{ url('/contacto') }}">Contacto</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h4>Follow</h4>
					</div>
					<div class="social">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h4>Newsletter</h4>
					</div>
					<div class="footer-grid-info">
						<form action="#" method="post">
							<input type="email" id="mc4wp_email" name="EMAIL" placeholder="Enter your email here" required="">
							<input type="submit" value="Subscribe">
						</form>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="copyright">
				<p>© 2016 My Trip . All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a> </p>
			</div>
		</div>
	</div>
	<!-- //footer -->
@stop