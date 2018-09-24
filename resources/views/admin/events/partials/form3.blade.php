<h2>Atividades do evento</h2>
<p>Atividades que se realizaram no evento </p>
@foreach($event->activits as $activit)
  <?php
  $temp = \DB::table('activit_event')->where('id', $activit->id)->first();
  ?>
  <p class="card-text"><b>{{ date_format(date_create($temp->scheduled), 'H:i') }}</b> - {{ $activit->name }}</p>
    <hr>
@endforeach
