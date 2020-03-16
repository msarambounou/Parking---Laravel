@extends('layout')

@section('contenu')


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


<h1>Voici la liste de votre historique de demandes</h1>

<table style="">
        <tr>
          <th>Numero</th>
          <th>Nom</th>
          <th>Prenom</th>
        </tr>
        <tr>
        @foreach($demandes as $demandes)
          <td>{{ $demandes ->id}}</td>
          <td>{{ $demandes ->date_d}}</td>
          <td>{{ $demandes ->date_f}}</td>
        </tr>
        <tr>
        @endforeach
</table>
</br>
<i class='fa fa-arrow-left' style='font-size:18px;color:red'></i><a href="/mon-compte" class="lien" style="color : red;">  Retourner sur Mon Compte</a>

@endsection