@extends('layouts.back')


@section('content')



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">
        <form action="{{route('menu.store')}}" method="POST">
        	@csrf
        	<div class="form-group">
        		<label for="name">item</label>
        		<input type="text" id="name" name="name" class="form-control" required placeholder="item">
        	</div>
    		<div class="form-group">
        		<label for="href">Lien</label>
        		<input type="text" id="href" name="href" class="form-control" required placeholder="le liens qu'on va ouvrir lorsqu'on clique">
        	</div>
        	<div class="form-group">
        		<label for="parent">item parent</label>
        		<select name="parent" id="parent" class="form-control">
        			<option value="">Aucun</option>
        			@foreach($menu as $item)
        			<option value="{{$item->id}}">{{$item->name}}</option>
        			@endforeach
        		</select>
        	</div>
        	<div class="form-group">
        		<button class="btn btn-primary float-right">Ajouter</button>
        	</div>

        </form>
      </div>
      
    </div>
  </div>
</div>


<div class="content">
	<section class="section m-5">
		@if(session('success'))
		<div class="row">
			<div class="col-12">
				<div class="alert alert-success">
					{{session('success')}}
				</div>
			</div>
		</div>
		@endif
		<div class="row">
			<div class="col-12">
				<button type="button" class="btn btn-default float-right " data-toggle="modal" data-target="#exampleModal">
					Ajouter un item
				</button>
			</div>
		</div>
		<br>

		<div class="row">
			@foreach($menu as $item)
			<div class="col-4 mt-1 mb-1">
				<div class="modal fade" id="menu{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="{{$item->name}}">
									Modifier {{$item->name}}
								</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="{{route('menu.update', $item)}}" method="POST">
									@csrf
									@method('put')
									<div class="form-group">
										<label for="name">item</label>
										<input type="text" id="name" name="name" class="form-control" required placeholder="item" value="{{$item->name}}">
									</div>
									<div class="form-group">
						        		<label for="href">Lien</label>
						        		<input type="text" id="href" name="href" class="form-control" required placeholder="le liens qu'on va ouvrir lorsqu'on clique" value="{{$item->href}}">
						        	</div>
						        	<div class="form-group">
						        		<button class="btn btn-primary float-right">Modifier</button>
						        	</div>
						        </form>
						    </div>
						</div>
					</div>
				</div>
			
			 	<a class="btn btn-primary color-white" data-toggle="collapse" href="#collapse{{$item->id}}" role="button" aria-expanded="false" aria-controls="collapse{{$item->id}}">
				    {{$item->name}} 
			  	</a>
				<a href="#" class="btn-info btn-sm btn" data-toggle="modal" data-target="#menu{{$item->id}}">
					<i class="fa fa-edit"></i>
				</a>
				<form action="{{route('menu.destroy', $item)}}" method="POST" class="d-inline">
					@csrf
					@method('delete')
					<button class="btn btn-danger btn-sm">
						<i class="fa fa-trash"></i>
					</button>
				</form>
				<div class="collapse" id="collapse{{$item->id}}">
				  	<div class="card card-body">
				  		<ul>
							@foreach($item->children as $child)
							<div class="modal fade" id="menu{{$child->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="menu{{$child->name}}">
												Modifier {{$child->name}}
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
									<form action="{{route('menu.update', $child)}}" method="POST">
										@csrf
										@method('put')
										<div class="form-group">
											<label for="name">item</label>
											<input type="text" id="name" name="name" class="form-control" required placeholder="item" value="{{$child->name}}">
										</div>
										<div class="form-group">
								        		<label for="href">Lien</label>
								        		<input type="text" id="href" name="href" class="form-control" required placeholder="le liens qu'on va ouvrir lorsqu'on clique" value="{{$child->href}}">
								        	</div>
										<div class="form-group">
							        		<label for="parent">item parent</label>
							        		<select name="parent" id="parent" class="form-control">
							        			<option value="{{$item->id}}">{{$item->name}}</option>
							        			@foreach($menu as $item)
						        				@continue($item->id == $child->parent)
							        			<option value="{{$item->id}}">{{$item->name}}</option>
							        			@endforeach
							        		</select>
							        	</div>
							        	<div class="form-group">
							        		<button class="btn btn-primary float-right">Modifier</button>
							        	</div>
							        </form>
							   			</div>
							   		</div>
							   	</div>
							</div>

							<li class="mb-2">
								{{$child->name}} 
								<a href="#" data-toggle="modal" data-target="#menu{{$child->id}}" class="btn-info btn-sm btn">
									<i class="fa fa-edit"></i>
								</a>
								<form action="{{route('menu.destroy', $child)}}" method="POST" class="d-inline">
									@csrf
									@method('delete')
									<button class="btn btn-danger btn-sm">
										<i class="fa fa-trash"></i>
									</button>
								</form>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	
	</section>
</div>
@endsection