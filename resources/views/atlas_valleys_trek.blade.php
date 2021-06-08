	
    @extends('layouts.master')
	@section('css')
	<link href="{{URL::asset('assets/css-rtl/date_time_picker.css')}}" rel="stylesheet">
	<link href="{{URL::asset('assets/css-rtl/timeline.css')}}" rel="stylesheet">
	<link href="{{URL::asset('assets/css-rtl/magnific-popup.min.css')}}" rel="stylesheet">

	
	@endsection
    @section('content')
    
    @foreach ($uniqueUserIds as $uniqueUserId)
    <!-- SubHeader =============================================== -->
	<section class="parallax_window_in" data-parallax="scroll" data-image-src="img/atlas_valeys_trek.jpg" data-natural-width="1400" data-natural-height="470">
		<div id="sub_content_in_1">
			<div id="animate_intro">
				<h1>Atlas Valleys and Berber Villages Treks</h1>
				<p>2 to 3 Days</p>
			</div>
		</div>
	</section>
	<!-- End section -->
	<!-- End SubHeader ============================================ -->
	<section class="wrapper">
		<div class="divider_border"></div>

		<div class="container">
			<div class="row">
				<div class="col-md-8">

					<div class="owl-carousel add_bottom_15">
						@foreach ($uniqueUserId['slider_img'] as $slide)
                        <div class="item"><img src= {{ URL::asset($slide) }} alt="">
                        </div>
                        @endforeach
					</div>
					<p>The breathtaking area of the Atlas Mountains close to Marrakech offers some of the best trekking in the world. We’re for real! It offers stunning mountain scenery, snow-capped mountains topping over 4,000 m, traditional earth built Berber Villages and a great trekking infrastructure. No need to ask for more! Although many people want to climb Morocco’s highest peak - Mount Toubkal - the direct route from the main trailhead at Imlil doesn’t give a lot of exposure to the diversity of mountain scenery and Berber Villages that the Atlas Mountains can offer. In that regard these treks by far surpass the main Toubkal route. Most of the routes offered pass through the beautiful Azzaden Valley (at the head of which sits snow-capped Toubkal and its sister mountains) and offer an opportunity to walk through some splendid Berber Villages.</p>
					        <div class="row">
								<div class="col-md-6">
									<div class="feature-box">
										<div class="feature-box-icon_1">
											<i class="icon_set_1_icon-53"></i>
										</div>
										<div class="feature-box-info">
											<h4>Trek Duration: 2/3 days</h4>
											<p>Starting time 8/10 AM</p>
										</div>
									</div>
								</div>
								<!-- End col -->

								<div class="col-md-6">
									<div class="feature-box">
										<div class="feature-box-icon_1">
											<i class="icon_set_1_icon-30"></i>
										</div>
										<div class="feature-box-info">
											<h4>Walking grade:</h4>
											<p>Moderate</p>
										</div>
									</div>
								</div>
								<!-- End col -->
							</div>
					<hr>
					<div class="row">
						<div class="col-md-12">
						<h3 class="said">Itineraries </h3>
						 <div class="col-md-12">

							
							<div class="panel-group" id="accordion">

								<div class="panel panel-default">
									@foreach ($uniqueUserId['divs'] as $divs)
									<div class="panel-heading">
										<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="{{$divs['href']}}">{{$divs['title']}}<i class="indicator icon_minus_alt2 pull-right"></i></a>
							  			</h4>
									</div>
									<div id="{{$divs['id']}}" class="panel-collapse collapse in">
										<div class="panel-body">
								
											@foreach ($divs['objects'] as $objects)

                                           {!!$objects!!}

											@endforeach


										</div>
									</div>
									@endforeach
								</div>
								
							
							</div>
                         </div>
						</div>
						<!-- End col-md-12-->
					</div>
					<hr>
						<div class="row">
						 <div class="col-sm-12">
					         <h3>Tour Details</h3>
								<div class="col-md-6">
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="icon_set_1_icon-87"></i>
										</div>
										<div class="feature-box-info">
											<h4>Availability</h4>
											<p>
												This trek is available all year round.<br> If you are travelling alone please contact us as there is often the opportunity to join a group. 
											</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="icon_set_1_icon-58"></i>
										</div>
										<div class="feature-box-info">
											<h4>Included meals</h4>
											<p>
											  All meals are included during the trek
											</p>
										</div>
									</div>
								</div>
								<!-- End col -->

								<div class="col-md-6">
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="icon_set_1_icon-6"></i>
										</div>
										<div class="feature-box-info">
											<h4>Accommodation</h4>
						                        <p>
											     Traditional Berber village houses.
											    </p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="icon_set_1_icon-29"></i>
										</div>
										<div class="feature-box-info">
											<h4>Tour staff</h4>
											    <p>
												Local Guide<br> Cook<br> Muleteer/mules to carry your kit bags
												</p>
										</div>
									</div>
								</div>
						 </div>	<!-- End col -->
						</div>
						<hr>
					<div class="row">
						<div class="col-md-12">
						<h3 class="said">Frequently Asked Questions</h3>
						 <div class="col-md-12">
							<div class="panel-group" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1">What is the accommodation like during this trek?<i class="indicator icon_minus_alt2 pull-right"></i></a>
							  </h4>
									</div>
									<div id="collapse1" class="panel-collapse collapse in">
										<div class="panel-body">
										<p>During this treks we will be staying in a traditional Berber village houses. Depend on location, some of the properties might have simple or some outdated furniture. </p>
					                    <div class="row magnific-gallery">
						                    <div class="col-md-6">
							                    <a href="img/gallery/gite.jpg" title="Traditional Berber village house"><img src="img/gallery/gite.jpg" alt="" class="img-responsive">
							                    </a>
						                    </div>
					                    </div>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse2">What is the food like?<i class="indicator icon_plus_alt2 pull-right"></i></a>
							  </h4>
									</div>
									<div id="collapse2" class="panel-collapse collapse">
										<div class="panel-body">
										 <p>Meals will be largely Moroccan based but are likely to be infused with a little European influence.<br>Example:</p>
                                         <ul >
							                    <li><span>Breakfast:</span> Bread with jam, butter, boiled eggs and processed cheese, with the option of olive oil, served with mint tea, coffee and milk. And also juice, fruit and yoghurt.</li>
							                    <li><span>Lunch:</span> salad, tomatoes, carrots, lentils, beans, rice or pasta, kefta (meatball tagine). fish (sardines, tuna), seasonal fruit</li>
							                    <li><span>Dinner:</span> Soup, classic Morooccan tajine, couscous, olives, nuts, seasonal fruit</li>
						                 </ul>
					                    <div class="row magnific-gallery">
						                    <div class="col-md-6">
							                    <a href="img/gallery/salad.jpg" title="Salad for lunch"><img src="img/gallery/salad.jpg" alt="" class="img-responsive">
							                    </a>
						                    </div>
					                    </div>
										<br>
                                        <p><a href="food_on_trek.html" target="_blank" class="btn_1_outline">Read more aboud meals during the trek here</a></p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse3">What is the Fitness Level for this hike?<i class="indicator icon_plus_alt2 pull-right"></i></a>
							  </h4>
									</div>
									<div id="collapse3" class="panel-collapse collapse">
										<div class="panel-body">
										<p>To be able to enjoy these trekking adventures, you need to have a regular practice of walks. Long walks can be more helpful. During the adventure, it is expected that you will come across some inclined terrains to walk over but our guides will be there to assist you in crossing the steep climbs. Typically 4-6 hrs walking per day.</p>
										<br>
                                        <p><a href="our_grading.html" target="_blank" class="btn_1_outline">Read more aboud our GRADING SYSTEM</a></p>
										</div>
									</div>
								</div>
							</div>
							<div class="bannery" >
			                    <p class="ls-l slide_typo_2xy_1">Have more questions? Please check out our FAQ page!</p> 
						        <a href="faq.html" target="_blank" class="btn_outline_x">FAQ PAGE</a>
					        </div>
                         </div>
						</div>
						<!-- End col-md-12-->
					</div>
				</div>
				<!-- End Col -->
            
        <div class="col-md-4" id="sidebar">
            <div class="theiaStickySidebar">    
					<div class="box_style_1">
						<div class="price">
							<small>From </small><strong>€110 </strong><small>per person</small>
						</div>
						<ul class="list_ok">
							<li>Proper adventures</li>
							<li>Expert local guides</li>
							<li>Hassle free</li>
						</ul>
						<p><a href="#0" class="btn_full">BOOK NOW!</a></p>
					</div>
					<div class="box_style_2">
						<div id="message-booking"></div>
						<a href="contacts.html" class="btn_outline"> or Contact us</a>
						<a href="tel://+212644956142" id="phone_2"><i class="icon_set_1_icon-91"></i>+212 (0) 644956142</a>

					</div>
			</div>
		</div>
	
			</div>
			<!-- End row -->
		</div>
		<!-- End container -->
	</section>
	<!-- End section -->

	<div class="container margin_30">
		<h3 class="second_title">Take a look at our other tours</h3>
		<div class="carousel add_bottom_30">

			<div>
				<div class="img_wrapper">
					<div class="img_container">
						<a href="detail-page.html">
							<img src="img/tinmal.jpg" width="800" height="533" class="img-responsive" alt="">
								<div class="short_info">
									<h3>Ijoukak Valley Day Tour</h3>
									<em>Duration 8/10 hours</em>
									<p>
										This special day tour is designed to welcome you into the lives and the culture of the Berber people of the High Atlas.
									</p>
								</div>
						</a>
					</div>
				</div>
				<!-- End img_wrapper -->
			</div>

		</div>
		<!-- End carousel -->
	</div>
	<!-- end container -->
    
@endforeach
@endsection
@section('js')
<script>
    $('.carousel_in').owlCarousel({
      center: true,
      items:1,
      loop:true,
       autoplay:true,
       navText: [ '', '' ],
      addClassActive: true,
      margin:5,
      responsive:{
          600:{
              items:1
          },
           1000:{
              items:2,
              nav:true,
          }
      }
  });
  </script>
{{-- <script src="{{URL::asset('assets/plugins/sidebar_carousel_detail_page_func.js')}}"></script>
<script src="{{URL::asset('assets/plugins/map.js')}}"></script>
<script src="{{URL::asset('assets/plugins/infobox.js')}}"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="{{URL::asset('assets/plugins/bootstrap-datepicker.js')}}"></script> --}}
<script>
    $('#date_pick').datepicker();
</script>
<script src="{{URL::asset('assets/plugins/theia-sticky-sidebar.js')}}"></script>
<script>
    jQuery('#sidebar').theiaStickySidebar({
      additionalMarginTop: 80
    });
</script>
@endsection