@extends('layouts.mainlayout')
@section('content')

    <div class="text-center text-primary">
    <h2>AJOUTER UNE SOUTENANCE</h2>
</div>
    <form class="row g-3 needs-validation mt-3" novalidate>
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">Date</label>
          <input type="date" class="form-control" id="validationCustom01" value="Mark" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Heure</label>
          <input type="time" class="form-control" id="validationCustom02" value="Otto" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustomUsername" class="form-label">Thème</label>
          <div class="input-group has-validation">
            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
           
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <label for="inputHeuresoutenace" class="form-label">Jury</label>
          <select class="form-control" name="etudiants_id">

              <option>Selectionner un jury</option>;
              @foreach ( $juries as $jur)
                  <option value="{{ $jur->id}}"> </option>
                 
              @endforeach
          </select>

      </div>

      <div class="col-md-6">
        <label for="inputSalle" class="form-label">Salles</label>
        <select class="form-control" name="etudiants_id">

            <option>Selectionner une salle</option>
            @foreach ( $salles as $sal)
                <option value="{{ $sa->id }}">
                </option>
            @endforeach
        </select>

    </div>
    <div class="col-md-6">
      <label for="inputDemande" class="form-label">Demande</label>
      <select class="form-control" name="demandes_id">

          <option>Selectionner une demande</option>;
          @foreach ( $demandes as $demand)
              <option value="{{ $demand->id }}">{{ $demand->nom }} {{ $demand->prenom }}
              </option>
          @endforeach
      </select>
          </div>
         
        <div class="col-12">
          <button class="btn btn-primary" type="submit">Ajouter soutenance</button>
        </div>
      </form>
  

@endsection