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
                  <th scope="col">N</th>
                  <th scope="col">Motif</th>
                  <th scope="col">Statut</th>
                  <th scope="col">Preriode de soutenance</th>
                  <th scope="col">Heure de soutenance</th>
                 
                </tr>
              </thead>
              <tbody>
                <tbody>
                  @foreach ($demandes as $demand)
                  <tr>
                    <td>{{ $demand->id }}</td>
                    <td>{{ $demand->motif }}</td>
                    <td>{{ $demand->statut }}</td>
                    <td>{{ $demand->periode_soutenance }}</td>
                    <td>{{ $demand->heure_soutenance }}</td>

                    <td>          
                      <a href="{{ route('demande.show', $demand->id ) }}" class="btn btn-success"><i class="bi bi-eye" title="détails"></i></a>
                      <a href="{{ route('demande.edit', $demand->id ) }}" class="btn btn-info"><i class="bi bi-pencil-square" title="modifier"></i></a>
                      <a href="{{ url('supprimer-demandes/' .$demand->id) }}" class="btn btn-danger"> <i class="bi bi-trash"></i></a>                   
                  </td>
                   
            
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