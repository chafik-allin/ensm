@extends('layouts.back')


@section('content')
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
		
			@if(count($errors->all())>0)
		<div class="row m-5">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
			@endif
		<div class="row"> 
			<div class="col-md-8 col-sm-12">
				<h5 class="mb-5">Editer la formation <u>"{{$training->name}}"</u></h5>
			</div>
			<div class="col-md-4 col-sm-12">
				<a href="{{route('admin.trainings')}}" class="btn btn-primary"><i class="fa fa-list-alt fa-lg"></i> Liste de formations</a>
			</div>	
		</div>
		<form action="{{route('formations.update', $training)}}" class="form" method="POST">
			@csrf
			@method('put')
			<div class="row form-group">
					<div class="col-md-6 col-sm-12">
					<label for="nom" >Nom de la formation*</label>
					<input type="text" name="name" id="name" placeholder="nom de la formation" required value="{{$training->name}}" class="form-control">
				</div>
				<div class="col-md-6 col-sm-12">
					<label for="duration">Durée de la formation*</label>
					<input type="text" name="duration" id="duration" placeholder="exemple: 6 semestres" required value="{{$training->duration}}" class="form-control">
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-6 col-sm-12">
					<label for="credits">Crédits*</label>
					<input type="number" class="form-control" required placeholder="exemple: 120" value="{{$training->credits}}" name="credits" id="credits" >
				</div>
				<div class="col-md-6 col-sm-12">
					<label for="language">Langue d'enseignement*</label>
					<input type="text" name="language" value="{{$training->language}}" id="language" placeholder="exemple: Français, Anglais, Arabe .. " required class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6 col-sm-12">
					<label for="required_diploma">Niveau de diplôme requis à l'entrée*</label>
					<input type="text" class="form-control" name="required_diploma" id="required_diploma" placeholder="Exemple: BAC+3" required="" value="{{$training->required_diploma}}" >
				</div>
				<div class="col-md-6 col-sm-12">
					<label for="level_validated">Niveau de diplôme validé à la sortie</label>
					<input type="text" class="form-control" name="level_validated" id="level_validated" placeholder="Exemple: BAC+5" required="" value="{{$training->level_validated}}">
				</div>
			</div>
			
			<div class="row form-group">
				<div class="col-12">
					<div class="input-group">
						<span class="input-group-btn">
							<a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
								<i class="fa fa-picture-o"></i> Image
							</a>
						</span>
						<input id="thumbnail" class="form-control" type="text" name="image" value="{{asset($training->image)}}">
					</div>
					<img id="holder" style="margin-top:15px;max-height:100px;" src="{{asset($training->image)}}">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-12">
					<label for="presentation">Présentation*</label>
					<textarea name="presentation" id="presentation" class="tinymce" cols="30" rows="10" placeholder="Présenter la formation">{{$training->presentation}}</textarea>
				</div>
			</div>
	
			<div class="row form-group">
				<div class="col-12">
					<label for="admission">Admission*</label>
					<textarea name="admission" id="admission" cols="30" rows="10" class="tinymce"  >{{$training->admission}}</textarea>
				</div>
			</div>
	
			<div class="row form-group">
				<div class="col-12">
					<label for="program">Programme <i>(Facultatif)</i></label>
					<textarea name="program" id="program" cols="30" rows="10" class="tinymce">{{$training->program}}</textarea>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-12">
					<label for="after">Et après ?<i>(Facultatif)</i></label>
					<textarea name="after" id="after" cols="30" rows="10" class="tinymce" >{{$training->after}}</textarea>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-12">
					<label for="contact">Contact <i>(Facultatif)</i></label>
					<textarea name="contact" id="contact" cols="30" rows="10" class="tinymce">{{$training->contact }}</textarea>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-12">
					<button class="btn btn-primary btn-block">
						<i class="fa fa-save"></i> Enregistrer
					</button>
				</div>
			</div>
		</form>
		
	</section>

</div>
@endsection

@section('scripts')

<script>
 	tinymce.init({
    	selector: '.tinymce',
    	menubar:false,
		toolbar: "undo redo | forecolor backcolor |styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | table | fontsizeselect",
    	plugins: 'advlist autolink textcolor table link lists charmap print preview'
  	});
  	 $('#lfm').filemanager('image');

</script>
@endsection