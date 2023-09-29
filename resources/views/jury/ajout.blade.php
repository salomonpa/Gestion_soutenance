 @extends('layouts.mainlayout')
@section('content')

@if (session('status'))
                    <div class="alert alert-succès">
                        {{ session('status') }}
                    </div>
                @endif

<div class="text-center">
    <h1>Formulaire d'ajout</h1>
</div>

<form class="row g-3" action="{{ route('jury.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-lg-6 mt-3">
            <label for="inputNom" class="form-label">nom enseignant</label>
            <select class="form-control"  name="enseignants_id">
  
                <option>Selectionner un enseignnt</option>;
                @foreach ($enseignants as $enseignant)
                    <option value="{{ $enseignant->id }}">{{ $enseignant->nom }} {{ $enseignant->prenom }}</option>
                    
                @endforeach
            </select>
        </div>
        <div class="col-lg-6 mt-3">
            <label for="inputNom" class="form-label">nom directeur memoire</label>
            <select class="form-control"  name="directeurmemoires_id">
  
                <option>Selectionner un directeur de memoire</option>;
                @foreach ($directeurmemoire as $directeurm)
                    <option value="{{ $directeurm->id }}">{{ $directeurm->nom }} {{ $directeurm->prenom }}</option>
                    
                @endforeach
            </select>
        </div>

        <div class="col-lg-6 mt-3">
            <select class="form-control"  name="maitrestages_id">
            <label for="inputNom" class="form-label">nom maitre stage</label>
            <option>Selectionner un directeur de memoire</option>;
            @foreach ($maitrestage as $maitresta)
                <option value="{{ $maitresta>id }}">{{ $maitresta->nom }} {{ $maitresta->prenom }}</option>
                
            @endforeach
        </div>
        <div class="col-lg-6 mt-3">
            <select class="form-control"  name="presidentjs_id">
            <label for="inputPresident" class="form-label">president jury</label>
            <option>Selectionner un président de jury</option>;
            @foreach ($presidentj as $president)
                <option value="{{ $presidentj->id }}">{{ $presidentj->nom }} {{ $presidentj->prenom }}</option>
                
            @endforeach
        </div>


    </div>
  </div>
      <div class="">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Envoyez message</button>
      </div>
    </div>
  </div>
</div>
</form>
@endsection
