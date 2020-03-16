@extends('layout')

@section('contenu')

<h1>Voici la liste d'attente des reservations</h1>
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


<table style="width:90%">
        <tr>
            <th>Numero de reservation</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Date de début</th>
            <th>Date de fin</th>
            <th>Action</th>
        </tr>
        <tr>
        @foreach($clients as $clients)
            <td>{{ $clients ->id}}</td>
            <td>{{ $clients ->nom}}</td>
            <td>{{ $clients ->prenom}}</td>
            <td>{{ $clients ->email}}</td>
            <td>{{ $clients ->date_d}}</td>
            <td>{{ $clients ->date_f}}</td>
            <td><a href="/attribution"><button>Attribuer</button></a></td>
        </tr>
        <tr>
    @endforeach
</table>
</br>
<a href="/espace-admin" class="lien" style="color : red;">Retourner sur MON COMPTE</a>

@endsection
