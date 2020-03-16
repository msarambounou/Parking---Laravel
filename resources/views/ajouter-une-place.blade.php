@extends('layout')

@section('contenu')

<h1>Voici la liste des utilisateurs</h1>
<style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}
th {
    background-color:#E8E8EA;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}


</style>


<table style="width:70%">
        <tr>
            <th>Id</th>
            <th>Libellé</th>
            <th>Date début</th>
            <th>Date fin</th>
        </tr>
        <tr>
        @foreach($places as $places)
            <td>{{ $places ->id}}</td>
            <td>{{ $places ->libelle}}</td>
            <td>{{ $places ->date_d}}</td>
            <td>{{ $places ->date_f}}</td>
        </tr>
        <tr>
    @endforeach
</table>
</br>
<a href="/" class="lien" style="color : red;">Retourner à l'accueil</a>

@endsection