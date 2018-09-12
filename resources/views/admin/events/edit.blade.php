@extends('layouts.app')



@section('content')


<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<!-- Header -->
				<div class="card-header">
					<h2>Editar Evento</h2>
          <p>Para editar o evento selecione a aba correspondente aos campos a serem alterados. Após a edição salve o dados apertando o botao salvar no fim do formulario.</p>

					<ul class="nav nav-tabs" role="tablist" >
				    <li class="nav-item">
							<a class="nav-link active" role="tab" data-toggle="tab" href="#evento" style="color: #353535;">Evento</a></li>
				    <li class="nav-item">
							<a class="nav-link" role="tab" data-toggle="tab" href="#descritivo" style="color: #353535;">Descritivo</a></li>
				    <li class="nav-item">
							<a class="nav-link" role="tab" data-toggle="tab" href="#atividades" style="color: #353535;">Actividades</a></li>
				  </ul>

				</div>
				<!-- Body -->
				<div class="card-body" >
					{!! Form::model($event, ['route' => ['event.update', $event->id], 'method' => 'PUT']) !!}

					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in show active" id="evento">
							@include('admin.events.partials.form')
						</div>
						<div role="tabpanel" class="tab-pane fade" id="descritivo">
							@include('admin.events.partials.form2')
						</div>
						<div role="tabpanel" class="tab-pane fade" id="atividades">
							@include('admin.events.partials.form3')
						</div>
					</div>

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection


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

	CKEDITOR.config.height = 350;
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
