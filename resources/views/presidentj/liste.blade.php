@extends('layouts.mainlayout')
@section('content')


@if (session('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif

<div class="text-center">
    <h3>Liste des Présidents de Jury</h3>
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
                  <th scope="col">Affiliation</th>
                  
                </tr>
              </thead>
              <tbody>


                @foreach ( $presidentj as $presi)
                <tr>
                    <td>{{$presi->id }}</td>
                    <td>{{ $presi->nom }}</td>
                    <td>{{ $presi->prenom }}</td>
                    <td>{{ $presi->affiliation }}</td>
                    <td>{{ $presi->telephone }}</td>
                    <td>{{ $presi->email }}</td>
                    <td>          
                      <a href="{{ route('presidentj.show', $presi) }}" class="btn btn-success"><i class="bi bi-eye" title="détails"></i></a>
                      <a href="{{ route('presidentj.edit', $presi) }}" class="btn btn-info"><i class="bi bi-pencil-square" title="modifier"></i></a>
                      
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
