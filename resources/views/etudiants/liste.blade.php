@extends('layouts.mainlayout')
@section('content')

@if (session('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif

<section class="section">
  <div>

   

    <div class="row mt-3">
      <div class="col-lg-12">
        <div class="card-body">
           
          <div class="text-center text-primary">
            <h3>LISTE DES ETUDIANTS</h3>
        </div>
        <div class="card">
          
            <!-- Table with stripped rows -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">N°</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Prénom</th>
                  <th scope="col">Niveau étude</th>
                  <th scope="col">Actions</th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach (  $etudiant as $etud )
                <tr>
                  <td>{{ $etud->id }}</td>
                  <td>{{ $etud->nom }}</td>
                  <td>{{ $etud->prenom }}</td>
                  <td>{{ $etud->niveau_etude }}</td>
                       
            {{-- <img src="{{asset('storage') . '/' . $etud->image}}" class="" alt="..."> --}}
  
          <td>          
            <a href="{{ route('etudiants.show', $etud->id ) }}" class="btn btn-success"><i class="bi bi-eye" title="détails"></i></a>
            <a href="{{ route('etudiants.edit', $etud->id ) }}" class="btn btn-info"><i class="bi bi-pencil-square" title="modifier"></i></a>
            <a href="{{ url('supprimer-etudiant/' .$etud->id) }}" class="btn btn-danger"> <i class="bi bi-trash"></i></a>

            
        </td>
         </tr>
                @endforeach
              </tbody>

            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>
@endsection