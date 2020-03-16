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
                    <a href="liste-utilisateurs"><button class="button is-large">
                            <span class="icon is-medium">
                            <i class="fa fa-car"></i>
                            </span>
                            <span>Consulter la liste des utilisateurs</span>
                        </button></a>
                    </td>

                    <td>   
                        <a href="liste-attente"><button class="button is-large">
                            <span class="icon is-medium">
                            <i class="fa fa-align-justify"></i>
                            </span>
                            <span>Consulter la liste d'attente</span>
                        </button></a>
                    </td>
                </tr>

                <tr>    

                    <td>
                        <button class="button is-large">
                            <span class="icon is-medium">
                            <i class="	fa fa-sort-numeric-asc"></i>
                            </span>
                            <span>Consulter l'historique des attribution des places</span>
                        </button>
                    </td> 

                    <td>
                        <button class="button is-large">
                            <span class="icon is-medium">
                            <i class="fa fa-plus"></i>
                            </span>
                            <span>Editer la liste des places</span>
                        </button>
                    </td>     
                </tr>
        </table>





  
   
   
@endsection

