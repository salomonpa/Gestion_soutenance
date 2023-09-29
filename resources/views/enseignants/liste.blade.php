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
            <p>LISTE DES ENSEIGNANTS</p>
        </div>
            <!-- Table with stripped rows -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">N</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Prenom</th>
                  <th scope="col">Telephone</th>
                  <th scope="col">Email</th>
                  <th scope="col">Matière</th>
                </tr>
              </thead>
              <tbody>
                <tbody>
                  @foreach ($enseignant as $ens )
                  <tr>
                    <td>{{ $ens->id }}</td>
                    <td>{{ $ens->nom }}</td>
                    <td>{{ $ens->prenom }}</td>
                    <td>{{ $ens->telephone }}</td>
                    <td>{{ $ens->email }}</td>
                    <td>{{ $ens->matiere }}</td>

                    <td>          
                      <a href="{{ route('enseignants.show', $ens->id ) }}" class="btn btn-success"><i class="bi bi-eye" title="détails"></i></a>
                      <a href="{{ route('enseignants.edit', $ens->id ) }}" class="btn btn-info"><i class="bi bi-pencil-square" title="modifier"></i></a>
                      <a href="{{ url('supprimer-presidentj/' .$ens->id) }}" class="btn btn-danger"> <i class="bi bi-trash"></i></a>                   
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