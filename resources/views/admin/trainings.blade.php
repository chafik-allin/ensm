@extends('layouts.back')


@section('content')

<section class="news section">
	<div class="container">
		@if(session('success'))
		<div class="row m-5">
			<div class="alert alert-success">
				{{session('success')}}
			</div>
		</div>
		@endif

		
		<div class="row">

			<div class="col-12 m-5 text-center">
				<div class="section-title">
					<h3>Les formations de  <span class="alternate">l'ENSM</span></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, enim.</p>
				</div>
			</div>
			<div class="col-12">
				<a href="{{route('formations.create')}}" class="btn btn-info">
					Ajouter une formation
				</a>
			</div>
		</div>
		<hr>
		<div class="row mt-30">
		@if(count($trainings) >0)
			@foreach($trainings as $training)
			<div class="col-md-3">
				<div class="card mb-3">
	                <a href="#">
	                  <img class="card-img-top img-fluid w-100" src="{{asset($training->image)}}" alt="">
	                </a>
	                <div class="card-body">
	                  <h6 class="card-title mb-1"><a href="#">{{$training->name}}</a></h6>
	                </div>
	                <hr class="my-0">
	                <div class="card-body py-2 small">
	                  	<a class="mr-1 d-inline-block text-success" href="{{route('formations.show',['slug'=>$training->slug])}}">
	                    	<i class="fa fa-fw fa-eye"></i>Voir
                		</a>
                 	 	<a class="mr-1 d-inline-block" href="{{route('formations.edit', $training)}}">
	                   	 	<i class="fa fa-fw fa-edit"></i>Editer
                		</a>
                  		<form action="{{route('formations.destroy', $training)}}" method="POST" class="d-inline-block " >
	                  		@csrf
	                  		@method('delete')
							<button class="mr-1 d-inline confirm text-danger p-0 m-0">
	                    		<i class="fa fa-fw fa-trash"></i>Supprimer
							</button>
	                  		
	                  	</form>
              		</div>
				</div>
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
