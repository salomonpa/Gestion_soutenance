@extends('layouts.mainlayout')
@section('content')

@if (session('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif

<div class="text-center">
    <h1>Liste des Maitres de Stage</h1>
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
                  <th scope="col">email</th>
                  <th scope="col">Fonction</th>
                </tr>
              </thead>
              <tbody>


                @foreach ($maitrestage as $maitre)
                <tr>
                    <td>{{ $maitre->id }}</td>
                    <td>{{ $maitre->nom }}</td>
                    <td>{{ $maitre->prenom }}</td>
                    <td>{{ $maitre->telephone }}</td>
                    <td>{{ $maitre->email }}</td>
                    <td>{{ $maitre->fonction }}</td>
                    <td>          
                      <a href="{{ route('maitrestage.show', $maitre->id) }}" class="btn btn-success"><i class="bi bi-eye" title="détails"></i></a>
                      <a href="{{ route('maitrestage.edit', $maitre->id) }}" class="btn btn-info"><i class="bi bi-pencil-square" title="modifier"></i></a>
                      <a href="{{ url('supprimer-maitrestage/' .$maitre->id) }}" class="btn btn-danger"> <i class="bi bi-trash"></i></a>
                      
                  </td>
                </tr>
            @endforeach
          </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
