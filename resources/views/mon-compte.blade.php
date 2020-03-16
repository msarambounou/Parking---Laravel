@extends('layout')

@section('contenu')
<style>
button {
    width: 680px;
}

button:hover {
    background-color: #D7D7D7;
  color: black;
  border: 2px solid #e7e7e7;
}
td{
    padding-right: 20px;
    padding-bottom: 20px;

}
</style>


    <div class="section">
        <h1 class="title is-1">Bonjour, {{ auth()->user()->prenom }}</h1>
    </div>

   <table>
        <tr>
            <td>
            <a href="reserver"><button class="button is-large">
                    <span class="icon is-medium">
                    <i class="fa fa-car"></i>
                    </span>
                    <span>Réserver une place</span>
                </button></a>
            </td>

            <td>
            <a href="historique-client"><button class="button is-large">
                    <span class="icon is-medium">
                    <i class="fa fa-align-justify"></i>
                    </span>
                    <span>Consulter mes historiques</span>
                </button></a>
            </td>
        </tr>

        <tr>    

            <td>
            <a href="#"><button class="button is-large">
                    <span class="icon is-medium">
                    <i class="	fa fa-sort-numeric-asc"></i>
                    </span>
                    <span>Consulter mon rang</span>
                </button></a>
            </td>

            <td>
                <a href="#"><button class="button is-large">
                    <span class="icon is-medium">
                    <i class="fa fa-eye"></i>
                    </span>
                    <span>Voir mon numéro de place attribué</span>
                </button></a>
            </td>
                        
        </tr>
    </table>



  
   
   
@endsection

