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
          <label for="validationCustomUsername" class="form-label">Statut</label>
          <div class="input-group has-validation">
            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
              Please choose a username.
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <label for="validationCustom03" class="form-label">Jury</label>
          <select class="form-select" id="validationCustom04" required>
            <option selected disabled value="">Choose...</option>
            <option>...</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="validationCustom03" class="form-label">Salles</label>
          <select class="form-select" id="validationCustom04" required>
            <option selected disabled value="">Choose...</option>
            <option>...</option>
          </select>
          <div class="invalid-feedback">
            Please select a valid state.
          </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Demande</label>
            <select class="form-select" id="validationCustom04" required>
              <option selected disabled value="">Choose...</option>
              <option>...</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid state.
            </div>
          </div>
          <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Utilisateur</label>
            <select class="form-select" id="validationCustom04" required>
              <option selected disabled value="">Choose...</option>
              <option>...</option>
            </select>
          </div>
        <div class="col-12">
          <button class="btn btn-primary" type="submit">Ajouter soutenance</button>
        </div>
      </form>
  

@endsection