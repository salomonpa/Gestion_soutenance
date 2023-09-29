@extends('layouts.mainlayout')
@section('content')

<div>

  @if (session('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif
<ul>
@foreach ($errors->all() as $error)
    <li class="alert alert-danger"> {{ $error }}</li>
@endforeach





    <h1 class="text-center">Modifier un enseignant</h1>


    <form action="{{ route('enseignants.update', $enseignants->id) }}" method="POST">
        @method('PATCH')
       @csrf
    <div class="row">
     
        <div class="col-lg-6 mt-3">
          <label for="inputNom" class="form-label">Nom</label>
          <input type="text" class="form-control" name="nom" value="{{ $enseignants->nom }}">
          
        </div>
        <div class="col-lg-6 mt-3">
          <label for="inputPrenom" class="form-label">Prenom</label>
          <input type="text" class="form-control" name="prenom" value="{{ $enseignants->prenom }}">
        </div>

        <div class="col-lg-6 mt-3">
          <label for="inputTelephone" class="form-label">Telephone</label>
          <input type="text" class="form-control" name="telephone" value="{{ $enseignants->telephone }}">
        </div>
        <div class="col-lg-6 mt-3">
          <label for="inputEmail" class="form-label">Email</label>
          <input type="text" class="form-control" name="email" value="{{ $enseignants->email }}">
          
          <div class="col-lg-12 mt-3">
            <label for="inputMatiere" class="form-label">Matière</label>
            <input type="text" class="form-control" name="matiere" value="{{ $enseignants->matiere }}">
        </div>
        </div>

        <div class="text-center mt-3">
          <button type="submit" class="btn btn-primary">Enregistrer</button>
          <button type="reset" class="btn btn-danger">Annuler</button>
        </div>




      </div>
    </form>
@endsection