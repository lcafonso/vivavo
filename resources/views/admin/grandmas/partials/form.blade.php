<div class="form-group">
	{{ Form::label('name', 'Nome da Avó') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
	{{ Form::label('slug', 'URL Amigavel') }}
	{{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>
<div class="form-group">
	{{ Form::label('excerpt', 'Resumo') }}
	{{ Form::textarea('excerpt', null, ['class' => 'form-control', 'rows' => '2']) }}
</div>
<div class="form-group">
	{{ Form::label('file', 'Imagem') }}
	{{ Form::file('file') }}
</div>
<div class="form-group">
	{{ Form::label('local_id', 'Localidade') }}
	{{ Form::select('local_id', $locals, null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::submit('Salvar', ['class' => 'btn btn-sm btn-primary']) }}
</div>

@section('scripts')
<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<script>
	$(document).ready(function(){
	    $("#name, #slug").stringToSlug({
	        callback: function(text){
	            $("#slug").val(text);
	        }
	    });
	});
</script>
@endsection
