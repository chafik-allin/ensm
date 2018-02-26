@extends('layouts.front')

@section('content')

<!--================================
=            Page Title            =
=================================-->

<section class="page-title bg-title overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="title">
					<h4 class="text-white">{{$training->name}}</h4>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->


<!--================================
=            News Posts            =
=================================-->

<section class="news section">
	<div class="container">
		<div class="row ">
			<div class="col-12 mx-auto">
				<div class="block">
					<!-- Article -->
					<article class="blog-post single ">
						<div class=""  >
							<div class="post-details">
								<div class="row jumbotron">
									<div class="col-6">
										<ul style="list-style-type: none">
											<li><b>Durée: </b> {{$training->duration}}</li>
											<li><b>Crédits: </b> {{$training->credits}}</li>
											<li><b>Langue(s) d'enseignement: </b> {{$training->language}}</li>
										</ul>
									</div>
									<div class="col-6">
										<ul style="list-style-type: none">
											<li><b>Niveau de diplôme requis à l'entrée: </b> {{$training->required_diploma}}</li>
											<li><b>level_validated: </b> {{$training->level_validated}}</li>
										</ul>
									</div>
								</div>
								
								<div class="row">
									<div class="col-12">
										
										<ul class="nav nav-pills">
											<li class="nav-item">
												<a class="nav-link active" data-toggle="pill" href="#presentation">Présentation</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="pill" href="#admission">Admission</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="pill" href="#program">Programme</a>
											</li>
											<li class="nav-item">
												<a href="#after" data-toggle="pill" class="nav-link">Et après ?</a>
											</li>
											<li class="nav-item">
												<a href="#contact" data-toggle="pill" class="nav-link">Contact</a>
											</li>
										</ul>
										<!-- Tab panes -->
										<div class="tab-content mt-30">
											<div class="tab-pane active container" id="presentation">
													{!! $training->presentation !!}
											</div>
											<div class="tab-pane container" id="admission">
													{!! $training->admission !!}
											</div>
											<div class="tab-pane container" id="program">
													{!! $training->program !!}
											</div>
											<div class="tab-pane container" id="after">
													{!! $training->after !!}
											</div>
											<div class="tab-pane container" id="contact">
													{!! $training->contact !!}
											</div>
										</div>
									</div>
								</div>






								<div class="share-block">
									<div class="share">
										<p>
											Share: 
										</p>
										<ul class="social-links-share list-inline">
							              <li class="list-inline-item">
							                <a href="#"><i class="fa fa-facebook"></i></a>
							              </li>
							              <li class="list-inline-item">
							                <a href="#"><i class="fa fa-twitter"></i></a>
							              </li>
							              <li class="list-inline-item">
							                <a href="#"><i class="fa fa-instagram"></i></a>
							              </li>
							              <li class="list-inline-item">
							                <a href="#"><i class="fa fa-rss"></i></a>
							              </li>
							              <li class="list-inline-item">
							                <a href="#"><i class="fa fa-vimeo"></i></a>
							              </li>
							            </ul>
									</div>
								</div>
							</div>
						</div>
					</article>

				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of News Posts  ====-->

<!--==============================================
=            Call to Action Subscribe            =
===============================================-->

<section class="cta-subscribe bg-subscribe overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mr-auto">
				<!-- Subscribe Content -->
				<div class="content">
					<h3>Subscribe to Our <span class="alternate">Newsletter</span></h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm tempor</p>
				</div>
			</div>
			<div class="col-md-6 ml-auto align-self-center">
				<!-- Subscription form -->
				<form action="#" class="row">
					<div class="col-lg-8 col-md-12">
						<input type="email" class="form-control main white mb-lg-0" placeholder="Email">
					</div>
					<div class="col-lg-4 col-md-12">
						<div class="subscribe-button">
							<button class="btn btn-main-md">Subscribe</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!--====  End of Call to Action Subscribe  ====-->


@endsection