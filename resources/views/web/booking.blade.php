@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">

		<div class="col">
			<!-- @include('web.partials.info') -->

			{!! Form::open(['route' => 'guests.store',  $event->id]) !!}

		    <legend>Participar no evento</legend>
	        <h1>{{ $event->name }}</h1>
			<div class="card">
				<div class="card-header">
					{{ Form::hidden('event_id', $event->id) }}
					{{ Form::hidden('password', 'password') }}
					<p class="card-text">Local: <b>{{ $event->local }}</b> </p>
					<p class="card-text">Data/Hora: <b>{{ $event->data_time }}</b> </p>
					<p class="card-text">Responsavel: <b>{{ $event->grandma->name }}</b> </p>
				</div>
				<div class="card-body">
					<!-- Name -->
			        <div class="form-group">
			            {!! Form::label('name', 'Nome:', ['class' => 'col-lg-2 control-label']) !!}
			            <div class="col">
			                {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'nome']) !!}
			            </div>
			        </div>

			        <!-- Surname -->
			        <div class="form-group">
			            {!! Form::label('surname', 'Sobrenome:', ['class' => 'col-lg-2 control-label']) !!}
			            <div class="col">
			                {!! Form::text('surname', $value = null, ['class' => 'form-control', 'placeholder' => 'sobrenome']) !!}
			            </div>
			        </div>

			        <!-- Email -->
			        <div class="form-group">
			            {!! Form::label('email', 'Email:', ['class' => 'col-lg-2 control-label']) !!}
			            <div class="col">
			                {!! Form::email('email', $value = null, ['class' => 'form-control', 'placeholder' => 'email']) !!}
			            </div>
			        </div>

			        <!-- Password
			        <div class="form-group">
			            {!! Form::label('password', 'Password:', ['class' => 'col-lg-2 control-label']) !!}
			            <div class="col">
			                {!! Form::password('password',['class' => 'form-control', 'placeholder' => 'Password', 'type' => 'password']) !!}
			            </div>
			        </div>-->

			        <!-- Select With One Default -->
			        <div class="form-group">
			            {!! Form::label('number', 'Quantas pessoas', ['class' => 'col-lg-2 control-label'] )  !!}
			            <div class="col">
			                {!!  Form::selectRange('num_adults', 1, $event->max_guests) !!}
			                <span class="help-block">Numero de pessoas adultas.</span>
			            </div>
			        </div>

					<!-- Select With One Default -->
			        <div class="form-group">
			            <div class="col">
			                {!!  Form::selectRange('num_children', 0, 10) !!}
			                <span class="help-block">Numero de crianças.</span>
			            </div>
			        </div>


			        <!-- Text Area -->
			        <div class="form-group">
			            {!! Form::label('textarea', 'Comentario', ['class' => 'col-lg-2 control-label']) !!}
			            <div class="col">
			                {!! Form::textarea('comment', $value = null, ['class' => 'form-control', 'rows' => 3]) !!}
			                <span class="help-block">Pode deixarnos algum comentario.</span>
			            </div>
			        </div>

			        <!-- Radio Buttons -->
			        <div class="form-group">
								  {!! Form::label('textarea', 'Aceitar os termos', ['class' => 'col-lg-2 control-label']) !!}
						  		<div class="col">
		                    {!! Form::checkbox('checkbox') !!}
		                    <span class="help-block"> Concordo com os {!! link_to('terms', $title = 'Termos de Utilização', $parameters = [], $attributes = []); !!} deste serviço.</span>
			            </div>
			        </div>


			        <!-- Submit Button -->
			        <div class="form-group">
			            <div class="col">
			                {!! Form::submit('Participar', ['class' => 'btn btn-lg btn-info float-right'] ) !!}
			            </div>
			        </div>
				</div>



	        </div>


		    {!! Form::close()  !!}

		</div>
	</div>
</div>

@endsection

@section('scripts')

@endsection
