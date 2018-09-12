
<div class="form-group">
	{{ Form::label('excerpt', 'Resumo') }}
	{{ Form::textarea('excerpt', null, ['class' => 'form-control', 'rows' => '3']) }}
</div>
<div class="form-group">
	{{ Form::label('body', 'Descrição') }}
	{{ Form::textarea('body', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::submit('Salvar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
