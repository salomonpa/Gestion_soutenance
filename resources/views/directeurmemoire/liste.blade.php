@extends('layouts.mainlayout')
@section('content')

@if (session('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif

<div class="text-center">
    <h1>Liste des Directeurs de Memoire</h1>
</div>
<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="">

            <table class="table ">
              <thead>
                <tr>
                  <th scope="col">N°</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Prenom</th>
                  <th scope="col">Telephone</th>
                  <th scope="col">Adresse</th>
                  <th scope="col">Fonction</th>
                </tr>
              </thead>


              @foreach ($directeurmemoire as $dir)
              <tr>
                  <td>{{ $dir->id }}</td>
                  <td>{{ $dir->nom }}</td>
                  <td>{{ $dir->prenom }}</td>
                  <td>{{ $dir->telephone }}</td>
                  <td>{{ $dir->adresse }}</td>
                  <td>{{ $dir->fonction }}</td>

                  <td>          
                    <a href="{{ route('directeurmemoire.show', $dir->id ) }}" class="btn btn-success"><i class="bi bi-eye" title="détails"></i></a>
                    <a href="{{ route('directeurmemoire.edit', $dir->id ) }}" class="btn btn-info"><i class="bi bi-pencil-square" title="modifier"></i></a>
                    <a href="{{ route('directeurmemoire.destroy', $dir->id ) }}" class="btn btn-danger"><i class="bi bi-trash" title="supprimer"></i></a>
                    
                </td>
              </tr>
          @endforeach
            </table>
          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
