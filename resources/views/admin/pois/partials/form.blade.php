<div class="form-group">
	{{ Form::label('name', 'Nome de Ponto de Interesse') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
	{{ Form::label('slug', 'URL Amigavel') }}
	{{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>
<div class="form-group">
	{{ Form::label('local_id', 'Localidade') }}
	{{ Form::select('local_id', $locals, null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('excerpt', 'Resumo') }}
	{{ Form::textarea('excerpt', null, ['class' => 'form-control', 'rows' => '2']) }}
</div>
<div class="form-group">
	{{ Form::label('latitude', 'Latitude') }}
	{{ Form::text('latitude', null, ['class' => 'form-control', 'id' => 'latitude']) }}
</div>
<div class="form-group">
	{{ Form::label('longitude', 'Longitude') }}
	{{ Form::text('longitude', null, ['class' => 'form-control', 'id' => 'longitude']) }}
</div>
<div class="form-group">
	{{ Form::label('icon', 'Icon') }}
	{{ Form::file('icon') }}
</div>
<div class="form-group">
	{{ Form::label('image', 'Imagem') }}
	{{ Form::file('image') }}
</div>
<div class="form-group">
	{{ Form::label('body', 'Descrição') }}
	{{ Form::textarea('body', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::submit('Salvar', ['class' => 'btn btn-sm btn-primary']) }}
</div>

@section('scripts')

<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<!-- Editor -->
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>

<script>

		CKEDITOR.config.height = 400;
		CKEDITOR.config.width = 'auto';

		CKEDITOR.replace('body');

 		$(document).ready(function(){
	    $("#name, #slug").stringToSlug({
	        callback: function(text){
	            $("#slug").val(text);
	        }
	    });
	});
</script>
@endsection
