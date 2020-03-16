<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//---------------- INSCRIPTION -------------------------
Route::get('/inscription', 'InscriptionController@formulaire');

Route::post('/inscription', 'InscriptionController@traitement');


//---------------- CONNEXION -------------------------
Route::get('/connexion', 'ConnexionController@formulaire');

Route::post('/connexion', 'ConnexionController@traitement');



//ROUTES compte------------------------------------------
Route::get('/mon-compte', 'CompteController@accueil');
Route::get('/mon-compte2', 'CompteController@accueil2');
//ROUTES deconnexion
Route::get('deconnexion', 'CompteController@deconnexion');



//---------------- RESERVE -------------------------
Route::get('/reserver', 'ReserveController@formulaire');

Route::post('/reserver', 'ReserveController@traitement2');


//------ LISTE ------------------------
Route::get('voir-liste-attente', 'VoirListeController@voirliste');
Route::get('historique-client', 'liste_attenteController@voirhistorique');
Route::get('liste-attente', 'liste_attenteController@liste_attent');



//---- UTULIATEURS
Route::get('liste-utilisateurs', 'Liste_utilController@voir_util');


//------ ADMIN ------------------
Route::get('/espace-admin', 'AdminController@accueil');

//----- ATTRIBUTION -------------
Route::get('attribution', 'liste_attenteController@attribution');

//------- MODIFIER MDP ---------------------------------------------
Route::get('/modifier-password', 'Modifier_mdpController@formulaire');

Route::post('/modifier-password', 'Modifier_mdpController@traitement');


