{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
	{{ Form::label('category_id', 'Categorias') }}
	{{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('name', 'Nome de categoria') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
	{{ Form::label('slug', 'URL Amigavel') }}
	{{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>
<div class="form-group">
	{{ Form::label('file', 'Imagem') }}
	{{ Form::file('file') }}
</div>
<div class="form-group">
	{{ Form::label('status', 'Estado') }}
	<label>
		{{ Form::radio('status', 'PUBLISHED') }} Publicado
	</label>
	<label>
		{{ Form::radio('status', 'DRAFT') }} Rascunho
	</label>
</div>
<div class="form-group">
	{{ Form::label('tags', 'Etiquetas') }}
	<div>
		@foreach($tags as $tag)
		<label>
			{{ Form::checkbox('tags[]', $tag->id) }} {{ $tag->name }}
		</label>
		@endforeach
	</div>
</div>
<div class="form-group">
	{{ Form::label('excerpt', 'Resumo') }}
	{{ Form::textarea('excerpt', null, ['class' => 'form-control', 'rows' => '2']) }}
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

	// ClassicEditor
  //     .create( document.querySelector( '#body' ) )
  //     .catch( error => {
  //         console.error( error );
  //     } );

	CKEDITOR.config.height = 400;
	CKEDITOR.config.width = 'auto';

	CKEDITOR.replace('body');

	$(document).ready(function() {
	    $("#name, #slug").stringToSlug({
	        callback: function(text){
	            $("#slug").val(text);
	        }
	    });
	});

</script>
@endsection
