@extends('layouts.front')


@section('content')

<section class="news section">
	<div class="container">
	
		<div class="row mt-5">
			<div class="col-12">
				<div class="section-title">
					<h3>Les formations de  <span class="alternate">l'ENSM</span></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, enim.</p>
				</div>
			</div>
		</div>
		@if(session('success'))
		<div class="row m-5">
			<div class="alert alert-success">
				{{session('success')}}
			</div>
		</div>
		@endif


		<div class="row mt-30">
		@if(count($trainings)>0)
			@foreach($trainings as $training)
			<div class="col-lg-4 col-md-6 col-sm-8 col-10 m-auto">
				<a href="{{route('formations.show',['slug'=>$training->slug])}}">
					<div class="blog-post">
						<div class="post-thumb border">
								<img src="{{asset($training->image)}}" alt="{{$training->name}}" class="img-fluid">
						</div>
						<div class="post-content">
							<div class="post-title">
								<h2><a href="{{route('formations.show',['slug'=>$training->slug])}}">{{$training->name}}</a></h2>
							</div>
							<div class="post-meta text-center">
								<a href="{{route('formations.show', ['slug'=>$training->slug])}}" class="btn btn-default border">Plus d'infos</a>
							</div>
						</div>
					</div>
				</a>
			</div>
			@endforeach
			<div class="col-12 text-center">
				<!-- Pagination -->
				<nav class="d-flex justify-content-center">
				  <ul class="pagination">
				  	<li class="page-item">
				      <a class="page-link" href="#" aria-label="prev">
				        <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
				        <span class="sr-only">prev</span>
				      </a>
				    </li>
				    <li class="page-item active"><a class="page-link" href="#">1</a></li>
				    <li class="page-item"><a class="page-link" href="#">2</a></li>
				    <li class="page-item"><a class="page-link" href="#">3</a></li>
				    <li class="page-item">
				      <a class="page-link" href="#" aria-label="Next">
				        <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
				        <span class="sr-only">Next</span>
				      </a>
				    </li>
				  </ul>
				</nav>
			</div>

		@else
			<div class="col-12">
				<div class="alert bg-warning text-center text-white p-1">
					<i class="fas fa-exclamation-triangle fa-lg"></i>
					Aucune formations n'a été ajouté
				</div>
			</div>
		@endif

		</div>
	</div>
</section>
@stop
