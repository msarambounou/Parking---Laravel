@extends('layout')

@section('contenu')

<div class="title m-b-md">
    <ins>Modifier votre mot de passe ici</ins>  
</div>

<form class="section" action="/modifier-password" method="post" style="background-color: #E9E9EA;">

    <div class="field">
        <label class="label">Nouveau mot de passe</label>
        <div class="control">
            <input class="input" type="password" name="password" placeholder="Entrez votre mot de passe">
        </div>
            @if($errors->has('password'))
                <p class="help is-danger">{{ $errors->first('password') }}</p>
            @endif
    </div>


    <div class="field">
        <label class="label">Confirmer nouveau mot de passe</label>
        <div class="control">
            <input class="input" type="password" name="password_confirmation" placeholder="Entrez votre mot de passe">
        </div>
            @if($errors->has('password_confirmation'))
                <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
            @endif
    </div>

    <div class="control">
        <button type="submit" class="button is-primary">Modifier</button>
    </div>

</form>

@endsection