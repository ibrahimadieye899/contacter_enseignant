<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

//Genération de la page d'accueil
Route::get('/', [Controller::class, 'showPageAccueil'])->name('PageAccueil.show');

//Genération de La page principale Etudiant
Route::get('/Etudiant', [Controller::class, 'showConnexionEtudiant'])->name('connexionEtudiant.show');

//Géneration de La page d’inscription Etudiant
Route::get('/Etudiant/inscription', [Controller::class, 'showInscriptionEtudiant'])->name('InscriptionEtudiant.show');
Route::post('/inscription', [Controller::class, 'storeInscription'])->name('Inscription.store');

//Générartion de la page d’identification ou authentification
Route::get('/login', [Controller::class, 'showLogin'])->name('Logine.show');
Route::post('/login', [Controller::class, 'storeLogin'])->name('Login.store');

//Déconnexion 
Route::post('/logout', [Controller::class, 'logout'])->name('logout.post');

//Mot de passe au cas d'oublie
Route::get('/motDePasseOublie', [Controller::class, 'motDePasseOublieForm'])->name('motDePasseOublie');
Route::post('/motDePasseOublie', [Controller::class, 'storemotDePasseOublie'])->name('motDePasseOublie.post');

//réinitialisation du mot de passe
Route::get('/reinitialisationMotDePasse', [Controller::class, 'reinitialisationMotDePasseForm'])->name('reinitialisationMotDePasse');
Route::post('/reinitialisationMotDePasse', [Controller::class, 'storereinitialisationMotDePasse'])->name('reinitialisationMotDePasse.post');

//Générartion du tableau de bord etudiant
Route::get('/Etudiant/tableauDeBordEtudiant', [Controller::class, 'showTableauDeBordEtudiant'])->name('tableauDeBordEtudiant.show');

//Générartion du tableau de bord enseignant
Route::get('/Enseignant/tableauDeBordEnseignant', [Controller::class, 'showTableauDeBordEnseignant'])->name('tableauDeBordEnseignant.show');

//Géneration de la page profil
Route::get('/Etudiant/profil', [Controller::class, 'showProfil'])->name('profil.show');

//Modification des informations de l'étudiant
Route::get('/Etudiant/profil/modification', [Controller::class, 'modificationEtudiantForm'])->name('modificationEtudiant');
Route::post('/modificationEtudiant', [Controller::class, 'storeModificationEtudiant'])->name('modificationEtudiant.post');

//Géneration de la page mes rendez vous
Route::get('/Etudiant/mesRendezVous', [Controller::class, 'showMesRendezVousEtudiant'])->name('MesRendezVousEtudiant');

//Géneration de la page de la prise de rendez vous
Route::get('/Etudiant/priseRendezVous', [Controller::class, 'priseRendezVousForm'])->name('priseRendezVous');
Route::post('/priseRendezVous', [Controller::class, 'storePriseRendezVous'])->name('priseRendezVous.post');
Route::post('/annulationRendezVous', [Controller::class, 'storeannulationRendezVous'])->name('annulationRendezVous.post');

//Géneration de la page des rdv avec les etudiant et envoi de message 
Route::get('/Enseignant/RendezVousMessage', [Controller::class, 'rendezVousMessageForm'])->name('rendezVousMessage');
Route::post('/rendezVousMessage', [Controller::class, 'storeRendezVousMessage'])->name('rendezVousMessage.post');
Route::post('/annulationRendezVousEnseignant', [Controller::class, 'storeannulationRendezVousEnseignant'])->name('annulationRendezVousEnseignant.post');

//Géneration de la page disponibilité enseignant
Route::get('/Enseignant/disponibilites', [Controller::class, 'showdisponibilites'])->name('disponibilites.show');
Route::get('/disponibilites', [Controller::class, 'storeDisponibilites'])->name('diponibilites.post');