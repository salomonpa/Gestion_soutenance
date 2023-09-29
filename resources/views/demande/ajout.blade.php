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
                <h5 class="card-title text-center">Ajouter une demande de soutenance</h5>

                @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
                @endif

              <form class="row g-3" action="{{ route('demande.store') }}" method="POST"  enctype="multipart/form-data">
                @csrf
              <div class="col-md-12">
                <label for="inputMotif" class="form-label">Motif</label>
                <input type="text" class="form-control" name="motif">
              </div>
              

              <form class="row g-3">
                <div class="col-md-6">
                  
                  <input type="text" class="form-control" name="statut" value="en attente" hidden>
                </div>

              

              <div class="col-md-12">
                <label for="inputPeriode_soutenance" class="form-label">Periode soutenance</label>
                <input type="date" class="form-control" name="periode_soutenance">
              </div>

              <div class="col-md-12">
                <label for="inputHeuresoutenance" class="form-label">Heure de soutenance</label>
                <input type="time" class="form-control" name="heure_soutenance">
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
