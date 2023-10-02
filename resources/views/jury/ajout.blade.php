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
            
                          <form class="row g-3" action="{{ route('jury.store') }}" method="POST">
                            @csrf

                            <div class="col-md-6">
                                <label for="inputHeuresoutenace" class="form-label">enseignant</label>
                                <select class="form-control" name="enseignants_id">

                                    <option>Selectionner un etudiant</option>;
                                    @foreach (  $enseignants as $ens)
                                        <option value="{{ $ens->id }}">{{ $ens->nom }} {{ $ens->prenom }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="col-md-6">
                                <label for="inputHeuresoutenace" class="form-label">Enseignant</label>
                                <select class="form-control" name="enseignants_id">

                                    <option>Selectionner un enseignant</option>;
                                    @foreach ( $enseignants as $ens)
                                        <option value="{{ $ens->id }}">{{ $ens->nom }} {{ $ens->prenom }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="col-md-6">
                                <label for="inputDirecteur" class="form-label">Directeur de memoire</label>
                                <select class="form-control" name="directeurmemoires_id">

                                    <option>Selectionner un directeur de memoire</option>;
                                    @foreach ( $directeurmemoire as $dir)
                                        <option value="{{ $dir->id }}">{{ $dir->nom }} {{ $dir->prenom }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="col-md-6">
                                <label for="inputMaitre" class="form-label">Maitre de stage</label>
                                <select class="form-control" name="maitrestages_id">

                                    <option>Selectionner un maitre de stage</option>;
                                    @foreach ( $maitrestage as $maitre)
                                        <option value="{{ $maitre->id }}">{{ $maitre->nom }} {{ $maitre->prenom }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="col-md-6">
                                <label for="inputPresident" class="form-label">Président de jury</label>
                                <select class="form-control" name="presidentjs_id">

                                    <option>Selectionner un président de jury</option>;
                                    @foreach ( $presidentj as $presi)
                                        <option value="{{ $presi->id }}">{{ $presi->nom }} {{ $presi->prenom }}
                                        </option>
                                    @endforeach
                                </select>

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