
	<div class="form-group">
		{{ Form::label('name', 'Titulo') }}
		{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
	</div>
	<div class="form-group">
		{{ Form::label('slug', 'URL Amigavel') }}
		{{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
	</div>
	<div class="form-group">
		{{ Form::label('gramdma_id', 'Avó anfitriã') }}
		{{ Form::select('grandma_id', $grandmas, null, ['class' => 'form-control']) }}
	</div>
	<div class="form-group">
		{{ Form::label('data_time', 'Data') }}
		{{ Form::date('data_time', \Carbon\Carbon::now(), ['class' => ''] ) }}
	</div>
	<div class="form-group">
		{{ Form::label('data_time', 'Hora de inicio') }}
		{{ Form::time('data_time', null, array('class' => '') ) }}
	</div>
	<div class="form-group">
		{{ Form::label('local', 'Local do evento') }}
		{{ Form::text('local', null, ['class' => 'form-control']) }}
	</div>
	<div class="form-group">
		{{ Form::submit('Salvar', ['class' => 'btn btn-sm btn-primary']) }}
	</div>
