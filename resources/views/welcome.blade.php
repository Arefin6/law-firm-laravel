<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.layouts.header')
   
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{route('index')}}">Indicia</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
          @include('admin.layouts.navLinks')
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image:url({{asset('Front')}}/images/bg_1.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          	<h2 class="subheading" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We are here to help!</h2>
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
            	<span>Experience</span> . <span>Innovation</span> . <span>Excellence</span>
            </h1>
            <a href="#" class="btn btn-primary">Join us</a>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-no-pb services-section">
      <div class="container">
        <div class="row no-gutters d-flex">
          <div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
            <div class="icon"><span class="flaticon-auction"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3"><a href="#">Get Your Legal Advice</a></h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
          <div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
            <div class="icon"><span class="flaticon-lawyer"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3"><a href="#">Work with Expert Lawyers</a></h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
          <div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
            <div class="icon"><span class="flaticon-money"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3"><a href="#">Have Great Discounted Rates</a></h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
          <div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
            <div class="icon"><span class="ion-ios-help-circle-outline"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3"><a href="#">Review Your Case Documents</a></h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
   	
    <section class="ftco-counter" id="section-counter">
    	<div class="container-fluid">
    		<div class="row d-flex">
    			<div class="col-md-6 d-flex">
    				<div class="img d-flex align-self-stretch align-items-center justify-content-center" style="background-image:url({{asset('Front')}}/images/bg_1.jpg);">
    					
    				</div>
    			</div>
    			<div class="col-md-6 px-5 py-5">
    				<div class="row justify-content-start pt-3 pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">Fun Facts</span>
		            <h2 class="mb-4">Whisper Lawfirm Stablished Since 1990</h2>
		            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
		          </div>
		        </div>
		    		<div class="row">
		          <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center py-4 bg-light mb-4">
		              <div class="text">
		              	<div class="icon d-flex justify-content-center align-items-center">
		              		<span class="flaticon-lawyer"></span>
		              	</div>
		                <strong class="number" data-number="500">0</strong>
		                <span>Qualified Lawyers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center py-4 bg-light mb-4">
		              <div class="text">
		              	<div class="icon d-flex justify-content-center align-items-center">
		              		<span class="flaticon-handshake"></span>
		              	</div>
		                <strong class="number" data-number="2000">0</strong>
		                <span>Trusted Clients</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center py-4 bg-light mb-4">
		              <div class="text">
		              	<div class="icon d-flex justify-content-center align-items-center">
		              		<span class="ion-ios-checkbox-outline"></span>
		              	</div>
		                <strong class="number" data-number="1500">0</strong>
		                <span>Successful Cases</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center py-4 bg-light mb-4">
		              <div class="text">
		              	<div class="icon d-flex justify-content-center align-items-center">
		              		<span class="flaticon-medal"></span>
		              	</div>
		                <strong class="number" data-number="100">0</strong>
		                <span>Honors &amp; Awards</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
    
    	<div class="container">
     
    		<div class="row justify-content-center mb-5 pb-3">
         
          <div class="col-md-7 text-center heading-section ftco-animate">
          	
            <h2 class="mb-4">Practice Areas</h2>
          </div>
        </div>
        
        @if($practices->count()>0)
        <div class="row d-flex justify-content-center">
		   @foreach($practices as $practice)
        	<div class="col-md-4 col-lg-3 text-center">
        		<div class="practice-area bg-white ftco-animate p-4">
        			<div class="image img-fluid">
					<img src="{{$practice->img}}" alt="images" style="width:100%" >
        			</div>
        			<h3 class="mb-3"><a href="{{route('practice.single',['slug' => $practice->slug])}}">{{$practice->name}}</a></h3>
        			
        		</div>
        	</div>
      @endforeach
    
      
			@else
                    	<tr>
                    		<th colspan="5" class="text-center">No Practice Area Added Yet</th>
                    	</tr>
                    	
                    @endif	
    </section>

    <section class="ftco-section bg-secondary">
    	<div class="container-fluid">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4" style="color:#eac15a;">Our Legal Attorneys</h2>
          </div>
        </div>
        <div class="row">
        @if($attorneys->count()>0)
        @foreach($attorneys as $attorney)

        	<div class="card ml-3 mr-2" style="width: 18rem;">
         <img src="{{$attorney ->img}}" class="card-img-top" alt="images">
            <div class="card-body">
              <h5 class="card-title">{{$attorney->name}}</h5>
                   <p class="card-text">{{$attorney -> title}}</p>
				   <div style="margin: 24px 0;">
                           <a href="#"><i class="fa fa-dribbble"></i></a> 
                           <a href="#"><i class="fa fa-twitter"></i></a>  
                           <a href="#"><i class="fa fa-linkedin"></i></a>  
                           <a href="#"><i class="fa fa-facebook"></i></a>
                   </div>
              <a href="{{route('message.create')}}" class="btn btn-primary">Contact</a>
            </div>
           </div>
       @endforeach
			 @else
                    	<tr>
                    		<th colspan="5" class="text-center">No Lawers yet</th>
                    	</tr>
                    	
       @endif	
        	
        	
			</div>
			</div>
			</div>
			</section>
		


    <section class="ftco-section testimony-section bg-secondary">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-4">Happy Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4"   style="background-image:url({{asset('Front')}}/images/person_1.jpg);">>
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Arthur Browner</p>
                    <span class="position">Client</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image:url({{asset('Front')}}/images/person_2.jpg);">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Arthur Browner</p>
                    <span class="position">Client</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image:url({{asset('Front')}}/images/person_3.jpg);">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Arthur Browner</p>
                    <span class="position">Client</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image:url({{asset('Front')}}/images/per
                  son_4.jpg);">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Arthur Browner</p>
                    <span class="position">Client</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image:url({{asset('Front')}}/images/person_3.jpg);">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Arthur Browner</p>
                    <span class="position">Client</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
        @if($posts->count()>0)
        @foreach($posts as $post)
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image:url({{asset('Front')}}/images/image_1.jpg);">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="topper d-flex align-items-center">
              		<div class="one py-2 pl-3 pr-1 align-self-stretch">
              			<span class="day">{{ $post->created_at->format('d') }}</span>
              		</div>
              		<div class="two pl-0 pr-3 py-2 align-self-stretch">
              			<span class="yr">{{ $post->created_at->format('y') }}</span>
              			<span class="mos">{{ $post->created_at->format('M') }}</span>
              		</div>
              	</div>
                <h3 class="heading mt-2"><a href="{{route('post.single',['slug' => $post->slug])}}">{{ $post->title }}</a></h3>
                <p>{{ str_limit($post->description,50) }}</p>
              </div>
            </div>
          </div>
         
        @endforeach
			 @else
                    	<tr>
                    		<th colspan="5" class="text-center">No Posts yet</th>
                    	</tr>
                    	
       @endif	
        </div>
      </div>
    </section>
		

    <section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="" class="gallery image-popup img d-flex align-items-center" style="background-image:url({{asset('Front')}}/images/image_4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="" class="gallery image-popup img d-flex align-items-center" style="background-image:url({{asset('Front')}}/images/image_5.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="" class="gallery image-popup img d-flex align-items-center" style="background-image:url({{asset('Front')}}/images/image_5.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery image-popup img d-flex align-items-center" style="background-image:url({{asset('Front')}}/images/image_6.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>

    <section class="ftco-section-parallax bg-secondary">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Whisper</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Practice Areas</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Family Law</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Business Law</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Insurance Law</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Criminal Law</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Drug Offenses</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Fire Accident</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Employment Law</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Property Law</a></li>

              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Business Hours</h2>
              <div class="opening-hours">
              	<h4>Opening Days:</h4>
              	<p class="pl-3">
              		<span>Monday – Friday : 9am to 20 pm</span>
              		<span>Saturday : 9am to 17 pm</span>
              	</p>
              	<h4>Vacations:</h4>
              	<p class="pl-3">
              		<span>All Sunday Days</span>
              		<span>All Official Holidays</span>
              	</p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  @include('admin.layouts.footerfont')
  </body>
</html>