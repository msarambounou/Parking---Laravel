@extends('layout')

@section('contenu')


</br>
<div class="title m-b-md">
    <ins>Reservez une place ici</ins>
</div>
<form class="section" action="/reserver" method="post" style="background-color: #E9E9EA;">
{{ csrf_field() }}



<div class="field">
    <label class="label">Date de début</label>
    <div class="control">
        <input class="input" type="date" name="date_d" value="{{ old('') }}">
    </div>
        
</div>

<div class="field">
    <label class="label">Date de début</label>
    <div class="control">
        <input class="input" type="date" name="date_f" value="{{ old('') }}">
    </div>
        
</div>



<div class="control">
  <button class="button is-primary">Envoyer</button>
</div>
@endsection