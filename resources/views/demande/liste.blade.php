@extends('layouts.mainlayout')
@section('content')


@if (session('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif




<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">

           <div class="text-center">
            <p>LISTE DES DEMANDES</p>
        </div>
            <!-- Table with stripped rows -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">N°</th>
                  <th scope="col">statut</th>
                  <th scope="col">Motif</th>
                  <th scope="col">Preriode de soutenance</th>
                  <th scope="col">Etudiant</th>
                  <th scope="col">Actions</th>
                 
                </tr>
              </thead>
              <tbody>
                <tbody>
                  @foreach ($demandes as $demande)
                  <tr>
                    <td>{{ $demande->id }}</td>
                    <td>{{ $demande->statut }}</td>
                    <td>{{ $demande->date }}</td>
                    <td>{{ $demande->periode}}</td>
                    <td>{{ $demande->etudiant->nom }} {{ $demande->etudiant->prenom }}</td>

                    <td>          
                      @if (Auth::user()->roles_id == '1')
                      @elseif (Auth::user()->roles_id == '2')
                      <a href="{{ route('demande.edit', $demandes->id) }}" > <i class="bi bi-pencil-square"></i></a>
                     
  
                      @else
  
                      @endif 
  
                      @if (Auth::user()->roles_id == '3')
                      <a href="{{ url('supprimer-demande/' .$demande->id)}}"> <i class="bi bi-trash"></i></a>
                      @else
  
                      @endif 
  
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