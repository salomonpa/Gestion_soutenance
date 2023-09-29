@extends('layouts.mainlayout')
@section('content')

<div class="pagetitle">
    <h1>Tableau Bord</h1>
    <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="dashboard">Accueil</a></li>
        <li class="breadcrumb-item active">Nouvelle inscription</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- Formulaire inscription etudiant -->
          <div class="col-12">
            <div class="card recent-sales overflow-auto">
              <div class="card-body">
                <h5 class="card-title text-center">Inscription d'un étudiant </h5>

                @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
                @endif

              <form class="row g-3" action="{{ route('etudiants.store') }}" method="POST"  enctype="multipart/form-data">
                @csrf
              <div class="col-md-6">
                <label for="inputName5" class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom">
              </div>
              

              <form class="row g-3">
                <div class="col-md-6">
                  <label for="inputPrenom" class="form-label">Prenom</label>
                  <input type="text" class="form-control" name="prenom">
                </div>

              

              <div class="col-md-6">
                <label for="inputEmail5" class="form-label">E-mail</label>
                <input type="email" class="form-control" name="email">
              </div>

              <div class="col-md-6">
                <label for="inputDatenaissance" class="form-label">Date de naissance</label>
                <input type="date" class="form-control" name="date_naiss">
              </div>

              <div class="col-md-6">
                <label for="inputState" class="form-label">Niveau étude</label>
                    <select name="niveau_etude" class="form-select">
                        <option>Choisir le niveau ...</option>
                        <option>Licence</option>
                        <option>Master</option>
                        <option>Doctorat</option>
                        
                    </select>
                </div>

              <div class="col-md-6">
                <label for="inputState" class="form-label">Filière étudiant</label>
                <select name="filiere" class="form-select">
                  <option>Choisir la filière ...</option>
                  <option>Informatique de Gestion</option>
                  <option>Reseaux Informatique</option>
                  <option>Comptabilité Générale</option>
                  <option>Communication Digitale</option>
                </select>
              </div>

              <div class="row mt-3">
                <div class="col-lg-12">
                  <label for="inputPhoto" class="form-label">Photo de l'étudiant</label>
                    <input type="file" name="photo_etudiant" class="form-control" >
                </div>


              <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-danger">Annuler</button>
              </div>
            </form>

              </div>

            </div>
          </div>
          <!-- End Formulaire inscription etudiant -->

        </div>
      </div>
      <!-- End Left side columns -->

    </div>
  </section>
  

@endsection
